<?php
require_once "assets/include.php";
define('POSTED_DATA_KEY', 'formPostData');

if (isset($_SESSION[POSTED_DATA_KEY])) {
    $postedData = $_SESSION[POSTED_DATA_KEY];

    // session_destroy(); // or
    unset($_SESSION[POSTED_DATA_KEY]);
} else {
    header('Location: index.php');
}

echo '<pre>';
print_r($postedData);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Fundamentals</title>
    <link href="assets/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="Header">
    <img src="assets/Dickens_Gurney_head.jpg" border="0" alt="">
    <h2>
        Mailing List Information
    </h2>
</div>
<div id="Body">
    <div>
        <label>Favorite Author:</label>
        <span><?= $postedData['author'] ?></span>
    </div>
    <div>
        <label>Favorite Century:</label>
        <span><?= implode(', ', $postedData['century']) ?></span>
    </div>
    <div>
        <label>Comments:</label>
        <span><?= $postedData['comments'] ?></span>
    </div>
    <div>
        <label>Name:</label>
        <span><?= $postedData['name'] ?></span>
    </div>
    <div>
        <label>E-mail Address:</label>
        <span><?= $postedData['email'] ?></span>
    </div>
    <div>
        <label>Receive Newsletter:</label>
        <span><?= $postedData['newsletter'] ?></span>
    </div>
</div>
</body>
</html>