<?php
// セッションの開始合図！
session_start();

// ユーザー毎に自動的にidが発行＆保存される
// idは、アプリケーション→cookie内から確認できる
$old_id = session_id();

// 再生成
// trueが入っていないと、古いidが有効になったままになる
session_regenerate_id(true);
$new_id = session_id();

var_dump($old_id, $new_id);
exit();
