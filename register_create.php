<?php
session_start();
// var_dump($_POST);
// exit();

//必須項目の入力チェック
//以下の条件に合致する場合は以降の処理を中止してエラー画面を表示する．

if (
    !isset($_POST["name"]) || $_POST["name"] === "" ||
    !isset($_POST["email"]) || $_POST["email"] === "" ||
    !isset($_POST["password"]) || $_POST["password"] === "" ||
    !isset($_POST["age"]) || $_POST["age"] === "" ||
    !isset($_POST["workstyle"]) || $_POST["workstyle"] === "" ||
    !isset($_POST["children"]) || $_POST["children"] === "" ||
    !isset($_POST["worry"]) || $_POST["worry"] === "" ||
    !isset($_POST["urgency"]) || $_POST["urgency"] === "" ||
    !isset($_POST["find"]) || $_POST["find"] === ""
) {
    exit("ParamError");
}

// POSTデータ取得
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$age = $_POST["age"];
$workstyle = $_POST["workstyle"];
$children = $_POST["children"];
$worry = $_POST["worry"];
$urgency = $_POST["urgency"];
$find = $_POST["find"];

// echo $name;
// echo $email;
// echo $password;
// echo $age;
// echo $workstyle;
// echo $worry;
// echo $urgency;
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
$sql = "INSERT INTO meavita_user_table (id, u_name, u_email, u_password,is_admin,age,workstyle,children,worry,urgency,find,created_at, updated_at,deleted_at) 
VALUES (NULL, :u_name, :u_email, :u_password, NULL,:age,:workstyle,:children,:worry,:urgency,:find,now(), now(),NULL)";

$stmt = $pdo->prepare($sql);

// バインド変数を設定
// ハッキングのコードなどが入ってきた時に無効化する
$stmt->bindValue(':u_name', $name, PDO::PARAM_STR); //文字列を渡したい時は、PARAM_STR
$stmt->bindValue(':u_email', $email, PDO::PARAM_STR); //数値を渡したい時は、PARAM_INT
$stmt->bindValue(':u_password', $password, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':workstyle', $workstyle, PDO::PARAM_STR);
$stmt->bindValue(':children', $children, PDO::PARAM_STR);
$stmt->bindValue(':worry', $worry, PDO::PARAM_STR);
$stmt->bindValue(':urgency', $urgency, PDO::PARAM_STR);
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
// セッション変数を作成
// header関数を使って、指定したページへリダイレクト

// SQL実行後の処理 
// セッション変数を作成（byチャッピー）
if ($status) {
    $id = $pdo->lastInsertId();
    $sql = "SELECT * FROM meavita_user_table WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $user_info = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user_info) {
        $_SESSION = array();
        $_SESSION['session_id'] = session_id();
        $_SESSION['is_admin'] = $user_info['is_admin'];
        $_SESSION['u_name'] = $user_info['u_name'];
        $_SESSION['u_email'] = $user_info['u_email'];
        $_SESSION['age'] = $user_info['age'];
        $_SESSION['workstyle'] = $user_info['workstyle'];
        $_SESSION['children'] = $user_info['children'];
        $_SESSION['worry'] = $user_info['worry'];
        $_SESSION['urgency'] = $user_info['urgency'];
        $_SESSION['find'] = $user_info['find'];
        header("Location:free_page.php");
        exit();
    }
} else {
    echo json_encode(["execute error" => "Failed to get user data"]);
    exit();
}
