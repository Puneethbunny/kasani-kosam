<?php
include "connection.php";

  $sfconn=new mysqli($servername, $username, $password, $database);
  if($sfconn->connect_error){
    die("connection failed: " . $sfconn->connect_error);
  }
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $corporatename=$_POST['corporatename'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $logo=$_Post['image'];

  $sql = "INSERT INTO Corporates (firstname, lastname, corporatename, email, password, Logo) VALUES ('$firstname', '$lastname', '$corporatename', '$email', '$password','$image')";
  if (mysqli_query($sfconn, $sql)) {
    header("Location: reg2.php?error=404 Not found");
    exit();
  }
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($sfconn);
  }
  mysqli_close($sfconn);
?>