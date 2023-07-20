<?php

$username = $_POST['username'];
$password= $_POST['password'];

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

  $stmt= $conn->prepare("select * from login_register where username = ?" );
  $stmt->bind_param('s',$username);
  
  $stmt->execute();
  
  $stmt_result = $stmt->get_result(); 
  if($stmt_result->num_rows > 0) {
  
  $data = $stmt_result->fetch_assoc(); 

  // if ($data['username' === $username]) {
  //   # code...
  // }
  // else {
  //   echo "<script>alert('username don't exist');</script>";
  // }

  if($data['password'] === $password)
  { 
    echo "<script>alert('Success');</script>"; 
    header("refresh:0; url = http://localhost/web_dev_php/Components/Dashboard.html");
  } 
  else { 
    
    echo "<script>alert('Invalid  Password');</script>"; 
    header("refresh:0; url = http://localhost/web_dev_php/Login_Page.php");
  }
  
  } 
  else {
    echo "<script>alert('Invalid Email or password');</script>";
    header("refresh:0; url = http://localhost/web_dev_php/Login_Page.php");
  }
}

$conn->close();
?>