<?php

//connect_to_db()の関数を呼び出した場所に
//new PDO($dbn, $user, $pwd);が反映される
//万が一、エラーがでたらdbErrorが表示される

function connect_to_db()
{
    $dbn = 'mysql:dbname=meavita_proto;charset=utf8mb4;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    try {
        return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
        exit('dbError:' . $e->getMessage());
    }
}

//ログイン状態のチェック関数

function check_session_id()
{
    if (!isset($_SESSION["session_id"]) || $_SESSION["session_id"] !== session_id()) {
        header("Location:login.php");
        exit();
    } else {
        session_regenerate_id(true);
        $_SESSION["session_id"] = session_id();
    }
}
