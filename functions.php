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
