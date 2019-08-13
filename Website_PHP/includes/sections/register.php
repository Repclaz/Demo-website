<?php
  if(isset($_POST['register_button'])) {
    echo '
      <script>
        $(document).ready(function() {
          $("#login").hide();
          $("#register").show();
        });
      </script>
    ';
  }
?>

<div id="dialog-wrapper">
  <div class="login-box">
    <p id="dialog-exit">X</p>
    <h6 class="login-header">Login or sign up below!</h6>
    <form action="index.php" method="POST" id="login">
      <input type="email" name="log_email" placeholder="Email Address" class="form-control" value="<?php
        if(isset($_SESSION['log_email'])) {
          echo $_SESSION['log_email'];
        }
      ?>" required>
      <input type="password" name="log_password" placeholder="Password" class="form-control">
      <input type="submit" name="login_button" value="Login" class="btn btn-light">
      <br>

      <?php if(in_array("Password was incorrect<br>", $error_array)) echo "Password was incorrect<br>";
        else if(in_array("Email not found<br>", $error_array)) "Email not found<br>";
      ?>

      <a href="#" id="signup" class="signup">Need an account? Register here!</a>

    </form>

    <form action="index.php" method="POST" id="register">
      <input type="text" name="reg_first_name" placeholder="First Name" class="form-control" value="<?php if(isset($_SESSION['reg_first_name'])) {
        echo $_SESSION['reg_first_name'];
      }
        ?>" required>
      <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>" ?>

      <input type="text" name="reg_last_name" placeholder="Last Name" class="form-control" value="<?php if(isset($_SESSION['reg_last_name'])) {
        echo $_SESSION['reg_last_name'];
      }
        ?>" required>
      <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>" ?>

      <input type="email" name="reg_email" placeholder="Email" class="form-control" value="<?php if(isset($_SESSION['reg_email'])) {
        echo $_SESSION['reg_email'];
      }
        ?>" required>
      
      <input type="email" name="reg_email_confirm" placeholder="Confirm Email" class="form-control" value="<?php if(isset($_SESSION['reg_email_confirm'])) {
        echo $_SESSION['reg_email_confirm'];
      }
        ?>" required>
      <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
        else if(in_array("Email must follow format: user@email.com<br>", $error_array)) echo "Email must follow format: user@email.com<br>";
        else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>" ?>

      <input type="password" name="reg_password" placeholder="Password" class="form-control" required>
      <input type="password" name="reg_password_confirm" placeholder="Confirm Password" class="form-control" required>
      <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";
        else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
        else if(in_array("Your password must be between 5 and 30 characters<br>", $error_array)) echo "Your password must be between 5 and 30 characters<br>" ?>

      <input type="submit" name="register_button" value="Register" class="btn btn-light">
      <br>

      <?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
      <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>

    </form>
  </div>
</div>
