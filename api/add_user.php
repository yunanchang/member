<?php
include_once "../include/connect.php";

$_POST['acc']=htmlspecialchars(trim($_POST['acc']));

/* $sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`) 
                   values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";

$pdo->exec($sql); */


$User->save($_POST);

// insert("users",['acc'=>"{$acc}",
//                  'pw'=>"{$_POST['pw']}",
//                  'name'=>"{$_POST['name']}",
//                  'email'=>"{$_POST['email']}",
//                  'address'=>"{$_POST['address']}"]);


header("Location:../index.php");