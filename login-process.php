<?php include 'header.php'; ?>

<?php

$email = htmlspecialchars($_POST['email']);

?>

<h2>Login Successful</h2>

<p>Welcome back!</p>

<p>You are logged in as:</p>

<p><strong><?php echo $email; ?></strong></p>

<?php include 'footer.php'; ?>
