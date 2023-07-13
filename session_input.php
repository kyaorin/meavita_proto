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
    <title>セッション履歴入力画面</title>
</head>

<style>
    .text {
        width: 600px;
        height: 25px;
    }

    .textarea {
        width: 600px;
        height: 150px;
    }

    .submit {
        font-size: 16px;
        color: white;
        width: 120px;
        height: 40px;
        background-color: #52b4b9;
        margin-left: 90px;
    }

    .session_list {
        margin: 30px 0 10px;
    }
</style>

<body>

    <h2><?= $_SESSION['u_name'] ?> さんセッション履歴入力画面</h2>

    <form action="session_create.php" method="POST">

        <div>
            日付　　　 <input type="date" name="session_date">
        </div>
        <div>
            サポーター <input class=text type="text" name="supporter">
        </div>
        <div>
            相談内容　 <input class=textarea type="textarea" name="session_content">
        </div>
        <!-- <div>
            フィードバック<input class=textarea type="textarea" name="session_content">
        </div> -->
        <div>
            振返メモ　 <input class=textarea type="textarea" name="session_memo">
        </div>
        <div>
            <button class=submit>submit</button>
        </div>
    </form>

    <div class=session_list>
        <a href="session_read.php">セッション履歴一覧</a>
    </div>
    <a href="free_page.php">マイページへ戻る</a>

</body>

</html>