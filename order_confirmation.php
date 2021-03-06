<?php
/**
 * Created by PhpStorm.
 * User: Sang Le
 * Date: 4/8/2019
 * Time: 2:27 PM
 * Description: Order confirmation page when the user click the submit. Will show what was order and the price.
 * File: order_confirmation.php
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'flavors.php';

$errors = [];

if(empty($_GET['customer-name'])) {
    $errors[] = 'You forgot to enter your name.';
}

if(empty($_GET['flavors'])) {
    $errors[] = 'You forgot to select a flavor';
}

if(empty($errors)) {
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
    <p>Thank you, <?php echo $_GET['customer-name']; ?>, for your order!</p>
    <p>Order Summary:</p>
    <ul>
        <?php
            foreach ($_GET['flavors'] as $value) {
                // looping through the flavor in the associative array
                foreach ($flavors as $key => $item) {
                    // check if the key in the form and key in the array match
                    if($value == $key) {
                        echo '<li>' . $item . '</li>';
                    }
                }
            }
        ?>
    </ul>
    <br>
    <p>Order Total:
        <?php
            $amount = count($_GET['flavors']);
            $total = $amount * $price;
            echo '$' . number_format($total, 2);
        ?>
    </p>
</body>
</html>
<?php
}
else {
    echo '
        <p>Something went wrong!</p>
        <p>The following error(s) occurred:<br>';
        foreach($errors as $message) {
            echo " - $message<br>\n";
        }
        echo '</p>
              <p>Please try again.</p>';

        require 'index.php';
}
?>
