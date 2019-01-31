<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=psd1807;port=3306', 'root', '');
$key = $_GET['key'];
// $query = "select * from chengyu where id ='" . $id . "'";

$query = "select * from ff where price = '$key'";
$stmt = $pdo->query($query);

print_r($pdo->errorInfo());
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($arr);
echo '</pre>';