<?PHP

$dsn='mysql:host=localhost;charset=utf8;dbname=school';

$pdo= new pdo($dsn,'root','');

$sql='select * from students';

$rows=$pdo->query($sql)->fetch();

echo "<pre>";
// $rows = $pdo->query($sql)->fetchColumn();

$rows=$pdo->query($sql)->fetch();

// print_r ($rows[2]);

print_r ($rows);
$rows=$pdo->query($sql)->fetchColumn(3);
print_r ($rows);
// print_r ($rows);