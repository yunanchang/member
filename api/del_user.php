<?php

include_once '../include/db.php';

// $sql="delete from `users` where `id`='{$_GET['id']}'";

// $pdo->exec($sql);
$User->del("users",$_GET['id']);
unset($_SESSION['user']);

header('../location:../index.php');