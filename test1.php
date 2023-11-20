<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "your_username", "your_password");
$sql = "SELECT your_column FROM your_table WHERE your_condition";
$row = $pdo->query($sql)->fetchColumn();

// 使用 var_dump 或 print_r 输出结果
var_dump($row);  // 或者 print_r($row);
?>