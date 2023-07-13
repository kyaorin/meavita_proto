<?php

// var_dump($_POST);
// exit();

session_start();
include('functions.php');
check_session_id();

//必須項目の入力チェック
//以下の条件に合致する場合は以降の処理を中止してエラー画面を表示する．

if (
    !isset($_POST["session_date"]) || $_POST["session_date"] === "" ||
    !isset($_POST["supporter"]) || $_POST["supporter"] === "" ||
    !isset($_POST["session_content"]) || $_POST["session_content"] === "" ||
    !isset($_POST["session_memo"]) || $_POST["session_memo"] === ""
) {
    exit("ParamError");
}

// POSTデータ取得
$session_date = $_POST["session_date"];
$supporter = $_POST["supporter"];
$session_content = $_POST["session_content"];
$session_memo = $_POST["session_memo"];


// echo $session_date;
// echo $supporter;
// echo $session_content;
// echo $session_memo;
// exit();


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
$sql = "INSERT INTO session_record_table (id, session_date, supporter,session_content,session_memo,created_at, updated_at,deleted_at) 
VALUES (NULL, :session_date, :supporter, :session_content, :session_memo,now(), now(),NULL)";

$stmt = $pdo->prepare($sql);

// バインド変数を設定
// ハッキングのコードなどが入ってきた時に無効化する
$stmt->bindValue(':session_date', $session_date, PDO::PARAM_STR); //文字列を渡したい時は、PARAM_STR
$stmt->bindValue(':supporter', $supporter, PDO::PARAM_STR); //数値を渡したい時は、PARAM_INT
$stmt->bindValue(':session_content', $session_content, PDO::PARAM_STR);
$stmt->bindValue(':session_memo', $session_memo, PDO::PARAM_STR);

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
// if ($status) {
//     $id = $pdo->lastInsertId();
//     $sql = "SELECT * FROM session_record_table WHERE id=:id";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindValue(':id', $id, PDO::PARAM_INT);
//     $stmt->execute();
//     $session_info = $stmt->fetch(PDO::FETCH_ASSOC);
//     if ($session_info) {
//         $_SESSION = array();
//         $_SESSION['session_id'] = session_id();
//         $_SESSION['session_date'] = $session_info['session_date'];
//         $_SESSION['supporter'] = $session_info['supporter'];
//         $_SESSION['session_content'] = $session_info['session_content'];
//         $_SESSION['session_memo'] = $session_info['session_memo'];
//         header("Location:session_read.php");
//         exit();
//     }
// } else {
//     echo json_encode(["execute error" => "Failed to get user data"]);
//     exit();
// }

header('Location:session_input.php');
exit();
