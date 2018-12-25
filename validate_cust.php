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
  $sql = "SELECT * from customer WHERE email='$username'";
  $results = $conn->query($sql);
  $row = mysqli_fetch_assoc($results);
  
  if ($row["password"]==$password) {
    $_SESSION['user_at'] = $row['id'];
    $_SESSION['uname_at'] = $row['fname'];
    $_SESSION['type'] = "Customer";
    $_SESSION["cart"] = array();

    header("Location: item.php?id=".$GET_['id']);
  }
  else{
    echo $sql;
      // echo '<script>window.location.href = "custloginpage.html";</script>';
  }
?>