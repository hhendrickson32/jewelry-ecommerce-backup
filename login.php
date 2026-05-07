<?php include 'header.php'; ?>

<h2>Customer Login</h2>

<form action="login-process.php" method="post">

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <input type="submit" value="Login">

</form>

<?php include 'footer.php'; ?>
