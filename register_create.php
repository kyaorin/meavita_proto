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
$sql = 'INSERT INTO meavita_user_table (id, u_name, u_email, u_password,workstyle,find,life_flg,created_at, updated_at) 
VALUES (NULL, :u_name, :u_email, :u_password, :workstyle, :find, :life_flg, now(), now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':u_name', $name, PDO::PARAM_STR);
$stmt->bindValue(':u_email', $email, PDO::PARAM_STR);
$stmt->bindValue(':u_password', $password, PDO::PARAM_STR);
$stmt->bindValue(':workstyle', $workstyle, PDO::PARAM_STR);
$stmt->bindValue(':find', $find, PDO::PARAM_STR);
$stmt->bindValue(':life_flg', $life_flag, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}


// SQL実行の処理

header('Location:register_input.php');
exit();
