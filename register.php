<?php include 'header.php'; ?>

<h2>Create An Account</h2>

<form action="register-process.php" method="post">

    <label>First Name</label>
    <input type="text" name="firstname" required>

    <label>Last Name</label>
    <input type="text" name="lastname" required>

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <input type="submit" value="Register">

</form>

<?php include 'footer.php'; ?>
