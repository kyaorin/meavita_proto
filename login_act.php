<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

// echo $email;
// echo $password;

// 各種項目設定
$dbn = 'mysql:dbname=meavita_proto;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる．


// SQL作成&実行
$sql = "SELECT * FROM meavita_user_table WHERE u_email=:email AND u_password=:password ";

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// 抽出データ数を取得

$val = $stmt->fetch(); //１レコードだけ取得する方法