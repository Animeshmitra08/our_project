<?php

$Firstname = $_POST['Firstname'];
$LastName= $_POST['LastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['conpassword'];



$servername = "localhost:3306";
$server_username= "root";
$pass = "Animesh@2001";
$db="customer";

// Create connection
$conn = mysqli_connect($servername, $server_username, $pass,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {

  $stmt= $conn->prepare("insert into login_register(firstname,lastname,password,username) values (?,?,?,?)" );
  $stmt->bind_param('ssss',$Firstname,$LastName,$password,$username);
  
  if(strlen($password)== strlen($confirm_password) && strlen($Firstname)<30 && strlen($LastName)<30){
  $stmt->execute();
  echo "<script>alert('Registered Successfully');</script>";
  header("refresh:0; url = http://localhost/web_dev_php/Login_Page.php");
  }
else{

    echo "<script>alert('Register Again');</script>";
    header("refresh:0; url = http://localhost/web_dev_php/Register.php");

  } 
 
  
}
$conn->close();
?>