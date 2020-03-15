<?php
require_once "../utils/helpers.php";
// Install required apps and tools to create and access databases first.
// A good source (for macos): https://medium.com/better-programming/install-apache-mysql-php-macos-mojave-10-14-b6b5c00b7de

// Here I will use MySQLi, to connect to the database, another option will be PDO.
// for more details: https://www.w3schools.com/php/php_mysql_connect.asp

newSection('Setup the DB', true);
$dpPassword = 'YOUR_PASSWORD';
$dpUsername = 'YOUR_USERNAME';
$dbServer = 'localhost';
$dbName = 'db_01';

$connection = new mysqli($dbServer, $dpUsername, $dpPassword, $dbName);

// print_r($connection);

// exit if there are any connection errors
if ($connection->connect_errno) {
    exit ("Database Connection Failed: {$connection->connect_errno}");
}

// =====================================================================================================================
newSection("Basic Queries");

// basic queries:
$authorsTable = 'Authors';

$deleteQuery = "DELETE FROM $authorsTable WHERE id = 4";
//$connection->query($deleteQuery);

$updateQuery = "UPDATE $authorsTable SET pen_name = 'Someone' WHERE id = 2";
//$connection->query($updateQuery);

$insertQuery = "INSERT INTO $authorsTable (first_name, last_name, pen_name) VALUES ('Alix', 'North', 'Alix North')";
//$connection->query($insertQuery);

// print the last added row id
echo "Newly Created Author ID: {$connection->insert_id}";
lines(5);

$selectQuery = "SELECT first_name, last_name, pen_name FROM $authorsTable ORDER BY first_name";
$result = $connection->query($selectQuery);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {  // fetch a row and convert it to an array or null if no rows.
        //print_r($row);
        echo "Author: {$row['first_name']}" . PHP_EOL;
        echo "================" . PHP_EOL;
    }
}

// =====================================================================================================================
newSection("Prepared Statements");
// allow for outside users to be used inside queries by preventing any sql injection attacks.

$tempFirstName = "Alix";

$selectQuery = "SELECT first_name, last_name, pen_name FROM $authorsTable WHERE first_name = ?";
$statementObj = $connection->prepare($selectQuery);

/*
 * Available parameters types:
 * - s: string
 * - d: decimal (floating point)
 * - i: int
 * - b: blob
 *
 * Example: $statementObj->bind_param("sdi", $stringVar, $decimalVar, $intVar);
 *
 * *** Parameters must be passed as variables, not values. ***
*/
$statementObj->bind_param("s", $tempFirstName);
$statementObj->execute();

// bind_result is required only with select statements.
$statementObj->bind_result($firstName, $lastName, $penName);
$statementObj->store_result();

if ($statementObj->num_rows > 0) {
    while ($statementObj->fetch()) {
        echo "$firstName $lastName ($penName)" . PHP_EOL;
    }
}

// close connection and result
$statementObj->close();
$result->close();  # or $result->free();
$connection->close();