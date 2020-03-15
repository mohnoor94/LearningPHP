<?php
require_once "assets/dbinfo.php";
require_once "assets/include.php";

$selectQuery = "SELECT id, first_name, last_name, pen_name FROM $authorsTable ORDER BY first_name";
$result = $connection->query($selectQuery);

echo '<pre>';
print_r($_POST);
echo '</pre>';

if (count($_POST) > 0) {
    if ($_POST['email'] != '') {
        $_SESSION['formPostData'] = $_POST;
        header('Location: final.php');
    } else {
        $emailError = 'validation';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Fundamentals</title>
    <link href="assets/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="Header">
    <img src="assets/Dickens_Gurney_head.jpg" alt="">
    <h2>
        Join Our Literature Mailing List
    </h2>
</div>
<div id="Body">
    <form method="POST" action="index.php">
        <div>
            <label>Favorite Author:</label>
            <select name="author">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['first_name'] ?> <?= $row['last_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="multiple">
            <label>Favorite Century:</label>
            17th Century <input type="checkbox" name="century[]" value="17th">
            18th Century <input type="checkbox" name="century[]" value="18th">
            19th Century <input type="checkbox" name="century[]" value="19th">
        </div>
        <div>
            <label>Comments:</label>
            <textarea name="comments"></textarea>
        </div>
        <div>
            <label>Name:</label>
            <input type="text" name="name"/>
        </div>
        <div class="<?= $emailError ?>">
            <label>E-mail Address:</label>
            <input type="text" name="email"/>
        </div>
        <div class="multiple">
            <label>Receive Newsletter:</label>
            Yes <input type="radio" name="newsletter" value="no">
            No <input type="radio" name="newsletter" value="yes">
        </div>
        <div class="multiple">
            <label>&nbsp;</label>
            <input type="submit" name="submit" value="Join Mailing List">
        </div>
    </form>
</div>
</body>
</html>