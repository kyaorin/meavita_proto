<?php
session_start();
include('functions.php');
check_session_id();

$pdo = connect_to_db();

$sql = 'SELECT * FROM session_record_table ORDER BY session_date DESC';
$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}


$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
    $output .= "
    <fieldset>
    <tr>
      <td>{$record["session_date"]}</td><br><br>
      <td>サポーター：{$record["supporter"]}</td><br><br>
      <td>相談内容：{$record["session_content"]}</td><br><br>
      <td>振返メモ：{$record["session_memo"]}</td>
    </tr>
    </fieldset><br>
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
    <h2><?= $_SESSION['u_name'] ?> さんのセッション履歴一覧</h2>
    <tbody>
        <?= $output ?>
    </tbody>
    <div class=session_list>
        <a href="session_input.php">セッション履歴入力画面へ</a>
    </div>
    <a href="free_page.php">マイページへ戻る</a>
</body>

</html>