<?php
session_start();
include('functions.php');

// var_dump($_POST);
// exit();

//データ受け取り
$email = $_POST["email"];
$password = $_POST["password"];

// echo $email;
// echo $password;

// DB接続 
$pdo = connect_to_db();

// SQL作成&実行
$sql = "SELECT * FROM meavita_user_table WHERE u_email=:email AND u_password=:password AND deleted_at IS NULL ";

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

// ユーザーの有無で条件分岐
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user) {
    echo "<p>ログイン情報に誤りがあります</p>";
    echo "<a href=login.php>ログイン</a>";
    exit();
} else {
    $_SESSION = array();
    $_SESSION['session_id'] = session_id();
    $_SESSION['is_admin'] = $user['is_admin'];
    $_SESSION['u_name'] = $user['u_name'];
    $_SESSION['u_email'] = $user['u_email'];
    $_SESSION['age'] = $user['age'];
    $_SESSION['workstyle'] = $user['workstyle'];
    $_SESSION['children'] = $user['children'];
    $_SESSION['worry'] = $user['worry'];
    $_SESSION['urgency'] = $user['urgency'];
    $_SESSION['find'] = $user['find'];
    header("Location:free_page.php");
    exit();
}
