<?php
session_start();
//functions.phpを使った簡略版DB接続
include('functions.php');
check_session_id();
$pdo = connect_to_db();


// SQL実行の処理

$sql = "SELECT * FROM meavita_user_table";
$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// // SQLデータ抽出・表示の処理
// //fetchALLでまとめて取得して$resultに入れる
// //fetchは一つずつデータを取り出す
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //連想配列形式で結果を取得する際の記述
// $output = "";
// //$resultは取得した全データを保持する配列
// //$recordは、配列の現在の要素
// //配列の各要素について一度ずつ実行される
// foreach ($result as $record) {
//     //.= にすると上書きされず、取得したデータを追加していける
//     // = だけだと、最後に取得したデータだけしか表示されない
//     $output .= "
//     <p>名前：{$record["u_name"]}</p>
//     <p>メール：{$record["u_email"]}</p>
//     <p>パスワード：{$record["u_password"]}</p>
//     <p>ワークスタイル：{$record["workstyle"]}</p>
//     <p>見つけた方法：{$record["find"]}</p>
//     <br>
//   ";
// }


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .user_info {
        margin-bottom: 20px;
    }
</style>

<body>

    <!-- // html部分にデータを追加 -->
    <h2>アカウント情報</h2>
    <fieldset class=user_info>
        <!-- 🔽 にforeachで取得したデータが入る -->
        <!-- <?= $output ?> -->
        <P>Name：<?= $_SESSION['u_name'] ?></P>
        <h3>保有ポイント：○○○ポイント（有効期限：202△年△月△日）</h3>
        <P>Email：<?= $_SESSION['u_email'] ?></P>
        <P>年代：<?= $_SESSION['age'] ?></P>
        <P>ワークスタイル：<?= $_SESSION['workstyle'] ?></P>
        <P>お子様の有無：<?= $_SESSION['children'] ?></P>
        <P>キャリアのお悩み：<?= $_SESSION['worry'] ?></P>
        <P>解決時期：<?= $_SESSION['urgency'] ?></P>
        <P>ミアビータを何で知りましたか？：<?= $_SESSION['find'] ?></P><br>
        <P><button>編集</button>　マイページ情報の変更が行えます。</P>
        <P><button>退会</button>　会員の退会処理を行えます。</P>

    </fieldset>

    <a href="free_page.php">マイページへ戻る</a>

</body>

</html>