<?php
include'Assets/Header.php';
?>

  <form action="register.php" method="POST">
    <input type="text" name="reg_fname" placeholder="First Name" required>
    <br>
    <input type="text" name="reg_lname" placeholder="Last Name" required>
    <br>
    <input type="email" name="reg_email" placeholder="Email" required>
    <br>
    <input type="email" name="reg_email_confirm" placeholder="Confirm Email" required>
    <br>
    <input type="password" name="reg_password" placeholder="Password" required>
    <br>
    <input type="password" name="reg_password_confirm" placeholder="Confirm Password" required>
    <br>
    <input type="submit" name="register_button" value="Register">
  </form>

<?php
include'Assets/Footer.php';
?>