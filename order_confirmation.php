<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'functions.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Thank you, <?php echo $_POST['customer-name']; ?>, for your order!</p> <br>
    <p></p>
    <ul>

    </ul>
    <br>
    <p></p>
</body>
</html>
