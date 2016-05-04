<?php
$GivennameErr = $emailErr = $MobilePhoneErr = "";
$Given name = $email = $Mobile Phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Given name"])) {
    $GivennameErr = "Given name is required";
  } else {
    $Given name = validate_input($_POST["Given name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Given name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = validate_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  if (empty($_POST["MobilePhone"])) {
    $MobilePhoneErr = "Number is required";
  } else {
    $Mobile Phone = validate_input($_POST["Mobile Phone"]);
    if (!preg_match("/^[0-9 ]*$/",$Mobile Phone)) {
      $MobilePhoneErr = "only numbers are allowed"; 
    }
  }

function validate_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
