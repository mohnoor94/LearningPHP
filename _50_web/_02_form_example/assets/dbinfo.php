<?php

$dpUsername = 'YOUR_USERNAME';
$dpPassword = 'YOUR_PASSWORD';
$dbServer = 'localhost';
$dbName = 'db_01';
$authorsTable = 'Authors';

$connection = new mysqli($dbServer, $dpUsername, $dpPassword, $dbName);

// exit if there are any connection errors
if ($connection->connect_errno) {
    exit ("Database Connection Failed: {$connection->connect_errno}");
}
