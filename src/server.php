<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'flarereg');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $tname = mysqli_real_escape_string($db, $_POST['tname']);
  $rname = mysqli_real_escape_string($db, $_POST['rname']);
  $uni = mysqli_real_escape_string($db, $_POST['uni']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $event = mysqli_real_escape_string($db, $_POST['event']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($rname)) { array_push($errors, "Representative Name is required"); }
  if (empty($uni)) { array_push($errors, "University Name is required"); }
  if (empty($phone)) { array_push($errors, "Mobile Number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO regdata (tname, rname, uni, phone, email, event)
  			  VALUES('$tname', '$rname', '$uni', '$phone', '$email', '$event')";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Successfully Registered";
  	header('location: index.php');
  }
}
?>
