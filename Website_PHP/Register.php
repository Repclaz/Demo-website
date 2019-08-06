<?php
include'includes/Header.php';
?>

  <form action="register.php" method="POST">
    <input type="text" name="reg_first_name" placeholder="First Name" value="<?php if(isset($_SESSION['reg_first_name'])) {
      echo $_SESSION['reg_first_name'];
    }
     ?>" required>
    <br>
    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>" ?>

    <input type="text" name="reg_last_name" placeholder="Last Name" value="<?php if(isset($_SESSION['reg_last_name'])) {
      echo $_SESSION['reg_last_name'];
    }
     ?>" required>
    <br>
    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>" ?>

    <input type="email" name="reg_email" placeholder="Email" value="<?php if(isset($_SESSION['reg_email'])) {
      echo $_SESSION['reg_email'];
    }
     ?>" required>
    <br>
    
    <input type="email" name="reg_email_confirm" placeholder="Confirm Email" value="<?php if(isset($_SESSION['reg_email_confirm'])) {
      echo $_SESSION['reg_email_confirm'];
    }
     ?>" required>
    <br>
    <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
      else if(in_array("Email must follow format: user@email.com<br>", $error_array)) echo "Email must follow format: user@email.com<br>";
      else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>" ?>

    <input type="password" name="reg_password" placeholder="Password" required>
    <br>
    <input type="password" name="reg_password_confirm" placeholder="Confirm Password" required>
    <br>
    <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";
      else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
      else if(in_array("Your password must be between 5 and 30 characters<br>", $error_array)) echo "Your password must be between 5 and 30 characters<br>" ?>

    <input type="submit" name="register_button" value="Register">
  </form>

<?php
include'includes/Footer.php';
?>