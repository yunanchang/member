<?php
$dsn='mysql:host=localhost;charset=utf8;dbname=member';
$pdo=new PDO($dsn ,'root','');

$a=total('users','2');
print_r($a);

function total($table, $id)
{
    global $pdo;
    $sql = "select count(`id`) from `$table` ";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo 'find=>'.$sql;
    echo $sql;
    $row = $pdo->query($sql)->fetchColumn();
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function find($table, $id)
{
    global $pdo;
    $sql = "select * from `$table` ";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo 'find=>'.$sql;
    echo $sql;
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

?>