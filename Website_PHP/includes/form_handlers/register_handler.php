<?php

// Declaring variables for registration to prevent errors
$first_name = "";
$last_name = "";
$email = "";
$email_confirm = "";
$password = "";
$password_confirm = "";
$date = "";
$error_array = array();

if (isset($_POST['register_button'])) {

  // Set values from registration form POST
  $first_name = strip_tags($_POST['reg_first_name']);
  $first_name = str_replace(' ', '', $first_name);
  $first_name = ucfirst(strtolower($first_name));
  $_SESSION['reg_first_name'] = $first_name;

  $last_name = strip_tags($_POST['reg_last_name']);
  $last_name = str_replace(' ', '', $last_name);
  $last_name = ucfirst(strtolower($last_name));
  $_SESSION['reg_last_name'] = $last_name;

  $email = strip_tags($_POST['reg_email']);
  $email = str_replace(' ', '', $email);
  $email = ucfirst(strtolower($email));
  $_SESSION['reg_email'] = $email;

  $email_confirm = strip_tags($_POST['reg_email_confirm']);
  $email_confirm = str_replace(' ', '', $email_confirm);
  $email_confirm = ucfirst(strtolower($email_confirm));
  $_SESSION['reg_email_confirm'] = $email_confirm;

  $password = strip_tags($_POST['reg_password']);
  $password_confirm = strip_tags($_POST['reg_password_confirm']);

  $date = date("Y-m-d");

  if ($email == $email_confirm) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $email = filter_var($email, FILTER_VALIDATE_EMAIL);

      $email_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

      $num_rows = mysqli_num_rows($email_check);

      if ($num_rows > 0) {
        array_push($error_array, "Email already in use<br>");
      }

    }
    else {
      array_push($error_array, "Email must follow format: user@email.com<br>");
    }
  }
  else {
    array_push($error_array, "Emails don't match<br>");
  }

    if (strlen($first_name) > 25 || strlen($first_name) < 2) {
      array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
    }

    if (strlen($last_name) > 25 || strlen($last_name) < 2) {
      array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
    }

    if ($password != $password_confirm) {
      array_push($error_array, "Your passwords do not match<br>");
    }
    else {
      if (!ctype_alnum($password)) {
        array_push($error_array, "Your password can only contain english characters or numbers<br>");
      }
    }

    if (strlen($password) > 30 || strlen($password) < 5) {
      array_push($error_array, "Your password must be between 5 and 30 characters<br>");
    }

    if(empty($error_array)) {
      $password = password_hash($password, PASSWORD_DEFAULT);

      $username = strtolower($first_name . "_" . $last_name);
      $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");

      $i = 0;
      while(mysqli_num_rows($check_username_query) != 0) {
        $i++;
        $username = $username . "_" . $i;
        $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
      }

      $rand = rand(1, 2);
      $profile_pic = "assets/images/profile_pics/defaults/" . ($rand == 1) ? "head_deep_blue.png" : "head_emerald.png";

      $insert_query = mysqli_query($con, "INSERT INTO users VALUES ('', '$first_name', '$last_name', '$username', '$email', '$password', '$date', '$profile_pic', '0', '0', 'no', ',')");

      array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");

      $_SESSION['reg_first_name'] = "";
      $_SESSION['reg_last_name'] = "";
      $_SESSION['reg_email'] = "";
      $_SESSION['reg_email_confirm'] = "";

    }

}

?>