<?php

try {
$host = 'localhost'; //server im testing on
$db = 'designJunkie'; // main database name
$user = ''; //database username
$pass = ''; //database password
$appname = 'design junkie'; //website and app name
$charset = 'utf8';

$dsn = "mysql:host=$host;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


// Create database
$createDatabase = 'CREATE DATABASE IF NOT EXISTS designJunkie';
$pdo->exec($createDatabase);

//Use Database
$useDatabase = 'use designJunkie';
$pdo->exec($useDatabase);

//create table
    $createTable = 'CREATE TABLE IF NOT EXISTS contactForm (
                contactID int(11) AUTO_INCREMENT,
                fullName varchar(200) NOT NULL,
                telephone int(11) NOT NULL,
                email varchar(200) NOT NULL,
                message varchar(5000) NOT NULL,
                PRIMARY KEY (contactID))';
    $pdo->exec($createTable);
}
catch(PDOException $e)
{
    echo $createDatabase . "<br>" . $e->getMessage();
}

?>
