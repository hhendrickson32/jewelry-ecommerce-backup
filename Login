<?php include 'header.php'; ?>

<h2>Login</h2>

<form action="login-process.php" method="post">
    <label>Email:</label>
    <input type="text" name="email"><br><br>

    <label>Password:</label>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">
</form>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<?php
$email = $_POST['email'];
$password = $_POST['password'];
?>

<h2>Login Information Received</h2>

<p>Email: <?php echo $email; ?></p>
<p>Password: <?php echo $password; ?></p>

<?php include 'footer.php'; ?>
