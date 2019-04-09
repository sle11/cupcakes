<?php
/**
 * Created by PhpStorm.
 * User: Sang Le
 * Date: 4/8/2019
 * Time: 2:27 PM
 * Description: Index page for the cupcake form.
 * File: index.php
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'flavors.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form action="order_confirmation.php" method="get">
        <label for="customer-name">Your name:</label> <br>
        <input type="text" name="customer-name" id="customer-name" placeholder="Please input your name." value="<?php if(isset($_GET['customer-name'])) echo $_GET['customer-name']; ?>"> <br>

        <label for="flavors[]">Cupcake flavors</label>
        <ul style="list-style-type: none">
            <?php
            foreach ($flavors as $key => $value) {
                if(isset($_GET['flavors'])) {
                    foreach($_GET['flavors'] as $item) {
                        if ($key == $item) {
                            echo '<li><input type="checkbox" name="flavors[]" value="' . $key . '" checked>' . $value . '</li>';
                        }
                        else {
                            echo '<li><input type="checkbox" name="flavors[]" value="'. $key .'">' . $value . '</li>';
                        }
                    }
                }
                else {
                    echo '<li><input type="checkbox" name="flavors[]" value="'. $key .'">' . $value . '</li>';
                }

            }
            ?>
        </ul>
        <input type="submit" value="Order">
    </form>


</body>
</html>


