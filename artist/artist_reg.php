<?php

$servername = "localhost";
$username = "id7617156_root";
$password = "sakec";
$dbname = "id7617156_artlife";
//$_SESSION["cust_id"] = "1";
// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
  // code...
  echo "";
}
$pass1=$_POST['password'];
$pass2=$_POST['cpassword'];

if($pass1 == $pass2) {
  // code...
  $sql ="INSERT INTO artist values('$_POST[fname]','$_POST[lname]','$_POST[address]',$_POST[contact],'$_POST[email]','$_POST[password]',0)";
  if ($conn->query($sql) === TRUE) {
    echo "<script>javascript: alert('New user created successfully')</script>";

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else {
  echo "Password does not match";
}


?>
