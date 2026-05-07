<?php include 'header.php'; ?>

<h2>Checkout</h2>

<form action="order-confirmation.php" method="post">

    <label>Full Name:</label>
    <input type="text" name="fullname" required><br><br>

    <label>Shipping Address:</label>
    <input type="text" name="address" required><br><br>

    <label>Credit Card Number:</label>
    <input type="password" name="cardnumber" required><br><br>

    <input type="submit" value="Place Order">

</form>

<?php include 'footer.php'; ?>
