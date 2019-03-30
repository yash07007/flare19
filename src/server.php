<?php
session_start();
// $errors = array();

if (isset($_POST['submit'])) {
  
  $rname = "";
  $uni = "";
  $phone = "";
  $email = "";
  $event = "";
  $days = "";
  $db = "";
  
   $db = mysqli_connect('localhost', 'flareslp_flare19', '12345', 'flareslp_flare2019');
  
  $rname = mysqli_real_escape_string($db, $_POST['rname']);
  $uni = mysqli_real_escape_string($db, $_POST['uni']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $event = mysqli_real_escape_string($db, $_POST['event']);
  $days = mysqli_real_escape_string($db, $_POST['days']);
  
  echo $rname;
  echo Yash1112;

//   if (empty($rname)) { array_push($errors, "Representative Name is required"); }
//   if (empty($uni)) { array_push($errors, "University Name is required"); }
//   if (empty($phone)) { array_push($errors, "Mobile Number is required"); }
//   if (empty($email)) { array_push($errors, "Email is required"); }

  	$query = "INSERT INTO accdata (rname, uni, phone, email, event, days)
  			  VALUES('$rname', '$uni', '$phone', '$email', '$event', '$days')";
  			  
  	echo $query;
  	
  	$x = mysqli_query($db, $query);
  	echo $x;
    //header('Location: thankYou.html');
}
?>
