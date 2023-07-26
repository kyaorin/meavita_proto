<?php
session_start();
include('functions.php');
check_session_id();
$pdo = connect_to_db();
