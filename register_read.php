<?php

//functions.phpを使った簡略版DB接続
include('functions.php');
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

// SQLデータ抽出・表示の処理
//fetchALLでまとめて取得して$resultに入れる
//fetchは一つずつデータを取り出す
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); //連想配列形式で結果を取得する際の記述
$output = "";
//$resultは取得した全データを保持する配列
//$recordは、配列の現在の要素
//配列の各要素について一度ずつ実行される
foreach ($result as $record) {
    //.= にすると上書きされず、取得したデータを追加していける
    // = だけだと、最後に取得したデータだけしか表示されない
    $output .= "
    <p>名前：{$record["u_name"]}</p>
    <p>メール：{$record["u_email"]}</p>
    <p>パスワード：{$record["u_password"]}</p>
    <p>ワークスタイル：{$record["workstyle"]}</p>
    <p>見つけた方法：{$record["find"]}</p>
    <br>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- // html部分にデータを追加 -->
    <h2>アカウント情報</h2>
    <fieldset>
        <!-- 🔽 にforeachで取得したデータが入る -->
        <?= $output ?>
    </fieldset>

</body>

</html>