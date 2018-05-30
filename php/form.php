<?php

print_r($_POST);

$name_error =$surname_error=$email_error = $phone_error=$message_error;
$name = $surname = $email = $phone= $message;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])){
 $name_error = "Name is required";
} else {
$name = test_input($_POST["name"]);
if(!preg_match("/^[a-ZA-Z]*$/",$name)){
  $name_error = "Only letters and white space allowed";
  }
}

if (empty($_POST["surname"])){
 $surname_error = "Last Name is required";
} else {
$surname = test_input($_POST["surname"]);
if (!preg_match("/^[a-ZA-Z]*$/" ,$surname)){
  $surname_error = "Only letters and white space allowed";
  }
}

if (empty($_POST["email"])){
 $email_error = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $email_error = "Invalid email format";
  }
}

if (empty($_POST["phone"])){
 $phone_error = "Phone is required";
} else {
$phone = test_input($_POST["phone"]);
if (!preg_match("/^(\d[\s-]?)?[\(\[s-]{0,2}?\d{3}[\)\]\s-]{0,2} ?\d{3}[\-]?\d{4}$/i",$phone)){
  $phone_error = "Only letters and white space allowed";
  }
}

if (empty($_POST["message"])){
 $message = "";
} else {
$phone = test_input($_POST["message"]);
  }
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;

}
