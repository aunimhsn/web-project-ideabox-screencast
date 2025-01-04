<?php

$host = 'localhost';
$database = 'ideabox_db';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$database;charset=UTF8";
$pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);