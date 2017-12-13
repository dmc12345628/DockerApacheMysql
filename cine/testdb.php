<?php

$dsn = 'mysql:host=mysql;dbname=cine';
$username = 'cine';
$password = 'cine';

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$dbh = new PDO($dsn, $username, $password, $options);

$stmt = $dbh->query('select table_name from information_schema.tables');
foreach ($stmt as $row)
{
    echo $row['table_name'] . "<br>";
}

?>