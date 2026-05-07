<?php include 'header.php'; ?>

<h2>Checkout</h2>

<form action="order-confirmation.php" method="post">
    <label>Full Name:</label>
    <input type="text" name="fullname"><br><br>

    <label>Shipping Address:</label>
    <input type="text" name="address"><br><br>

    <label>Credit Card Number:</label>
    <input type="text" name="cardnumber"><br><br>

    <input type="submit" value="Place Order">
</form>

<?php include 'footer.php'; ?>
