<?php include 'header.php'; ?>

<?php

$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);

?>

<h2>Order Confirmation</h2>

<div class="confirmation">

    <p>Thank you, <?php echo $fullname; ?>!</p>

    <p>Your order has been placed successfully.</p>

    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <p><strong>Shipping Address:</strong></p>

    <p><?php echo $address; ?></p>

</div>

<?php include 'footer.php'; ?>
