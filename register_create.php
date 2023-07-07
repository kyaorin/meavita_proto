<?php

//必須項目の入力チェック
//以下の条件に合致する場合は以降の処理を中止してエラー画面を表示する．

if (
    !isset($_POST["name"]) || $_POST["name"] === "" ||
    !isset($_POST["email"]) || $_POST["email"] === "" ||
    !isset($_POST["password"]) || $_POST["password"] === "" ||
    !isset($_POST["workstyle"]) || $_POST["workstyle"] === "" ||
    !isset($_POST["find"]) || $_POST["find"] === ""
) {
    exit("ParamError");
}

// POSTデータ取得
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$workstyle = $_POST["workstyle"];
$find = $_POST["find"];

// echo $name;
// echo $email;
// echo $password;
// echo $workstyle;
// echo $find;


// 各種項目設定
//何のデータベースに接続するのか＝mysqlのmeavita_protoというデータベースに接続、そのアドレスがlocalhost(レンタルサーバーを使う場合はIPアドレス）
$dbn = 'mysql:dbname=meavita_proto;charset=utf8mb4;port=3306;host=localhost';
//XAMPPのmysqlは、予めID＝rootが設定されていて、パスワードがない（レンタルサーバーの場合は、ID・PASSを入れる）
$user = 'root';
$pwd = '';

// DB接続
try {
    // PDO（PHP Data Objects）を新しく作る
    $pdo = new PDO($dbn, $user, $pwd);
    // エラーが出た時の取得方法はこのコードだと覚える
    // 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる．
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


// SQL作成&実行（データ登録）
// ユーザーが入力したデータを受け取る時は、直接変数を入れるのではなく、必ずバインド変数を設定してESCAPEすること！
// バインド変数は必ず頭にコロン：を付ける
$sql = "INSERT INTO meavita_user_table (id, u_name, u_email, u_password,workstyle,find,created_at, updated_at) 
VALUES (NULL, :u_name, :u_email, :u_password, :workstyle, :find,now(), now())";

$stmt = $pdo->prepare($sql);

// バインド変数を設定
// ハッキングのコードなどが入ってきた時に無効化する
$stmt->bindValue(':u_name', $name, PDO::PARAM_STR); //文字列を渡したい時は、PARAM_STR
$stmt->bindValue(':u_email', $email, PDO::PARAM_STR); //数値を渡したい時は、PARAM_INT
$stmt->bindValue(':u_password', $password, PDO::PARAM_STR);
$stmt->bindValue(':workstyle', $workstyle, PDO::PARAM_STR);
$stmt->bindValue(':find', $find, PDO::PARAM_STR);


// SQL実行
try {
    //実行処理
    $status = $stmt->execute();
    //実行に失敗すると `sql error ...` が出力される
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}


// SQL実行後の処理 
// header関数を使って、指定したページへリダイレクト
header("Location:free_page.php");
exit();
