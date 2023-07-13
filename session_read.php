<?php
session_start();
include('functions.php');
check_session_id();


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?= $_SESSION['u_name'] ?> さんのセッション履歴一覧</h2>
    <div class=session_list>
        <a href="session_input.php">セッション履歴入力画面へ</a>
    </div>
    <a href="free_page.php">マイページへ戻る</a>
</body>

</html>