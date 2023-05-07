<?php
$firstName = $_POST["firstName"] ?? "";
$lastName = $_POST["lastName"] ?? "";
$emailAddress = $_POST["emailAddress"] ?? "";
$contactNumber = $_POST["contactNumber"] ?? "";
$comments = $_POST["comments"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

    <h1>Thanks for reaching out! We've received your message.</h1>

    <p>Make sure your details are correct.</p>

    <dl class="info">
        <dt>First name</dt>
        <dd><?= $firstName ?></dd>
        <dt>Last name</dt>
        <dd><?= $lastName ?></dd>
        <dt>Email Address</dt>
        <dd><?= $emailAddress ?></dd>
        <dt>Contact Number</dt>
        <dd><?= $contactNumber ?></dd>
        <dt>Comments</dt>
        <dd><?= $comments ?></dd>
        <form action="index.php" method="get">
            <button type="submit">Confirm</button>
        </form>
    </dl>

</body>

</html>
