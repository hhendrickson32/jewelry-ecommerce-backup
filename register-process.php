<?php include 'header.php'; ?>

<?php

$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);

?>

<h2>Registration Successful</h2>

<p>Welcome, <?php echo $firstname . " " . $lastname; ?>!</p>

<p>Your account has been created successfully.</p>

<p><strong>Email:</strong> <?php echo $email; ?></p>

<?php include 'footer.php'; ?>
