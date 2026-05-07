<?php include 'header.php'; ?>

<h2>Checkout</h2>

<form action="order-confirmation.php" method="post">

    <label>Full Name</label>
    <input type="text" name="fullname" required>

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Shipping Address</label>
    <input type="text" name="address" required>

    <label>Credit Card Number</label>
    <input type="password" name="cardnumber" required>

    <input type="submit" value="Place Order">

</form>

<?php include 'footer.php'; ?>
