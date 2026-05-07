<?php include 'header.php'; ?>

<?php
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$cardnumber = $_POST['cardnumber'];
?>

<h2>Order Confirmation</h2>

<p>Thank you, <?php echo $fullname; ?>!</p>
<p>Your order will be shipped to:</p>
<p><?php echo $address; ?></p>

<p>Your payment has been processed.</p>

<?php include 'footer.php'; ?>
