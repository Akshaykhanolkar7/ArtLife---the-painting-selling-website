<?php
  
  $servername = "localhost";
  $username = "id7617156_root";
  $password = "sakec";
  $databasename = "id7617156_artlife";
  //create con
  $conn = new mysqli($servername, $username, $password, $databasename);
  if($conn->connect_error){
    die("Connection failed");
  }

  session_start();
  $username = $_POST["email"];
  $password = $_POST["password"];
  $sql = "SELECT * from artist WHERE email='$username'";
  $results = $conn->query($sql);
  $row = $results->fetch_assoc();
      
  if ($row["password"]==$password) {
    $_SESSION['user_at'] = $row['id'];
    $_SESSION['uname_at'] = $row['fname'];
    $_SESSION['type'] = "Artist";
    
    header("Location: index.php");
  }
  else{
      echo '<script>window.location.href = "artistloginpage.php";</script>';
  }

    // echo '<script language="javascript">';
    // echo 'alert("message successfully sent")';
    // echo '</script>';
?>