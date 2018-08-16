<?php
//Подключение к БД www.000webhost.com:

//$dsn = 'mysql:dbname=id3467371_brand;host=localhost';
//$user = 'id3467371_brandadmin';
//$password = 'branDadmin007';

//Подключение к БД openserver:

$dsn = 'mysql:dbname=brand;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

include 'view.php';
