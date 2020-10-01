<!DOCTYPE html>
<html>

<?php session_start(); 
    if(($_SESSION['uname_ct']) == ''){
      echo '<script>window.location.href = "custloginpage.html";</script>';
    }
    
      
?>

<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<?php

echo '<nav id ="nav1" class="navbar navbar-inverse" style="margin:0px; border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">

      <!--<a class="navbar-brand" href="index.html" style="font-family: Lucida handwriting ,cursive; color:white; font-size:30px">ArtLife</a>-->

      <a id="h1" class="navbar-brand" href="index.html" >ARTLIFE</a>

    </div>

    <ul class="nav navbar-nav navbar-right" >
      <li><a href="custloginpage.html"><span class="glyphicon glyphicon-user"></span>Welcome! '.$_SESSION['uname_ct'].'</a></li>
      <li><a><span class="glyphicon glyphicon-shopping-cart" style="font-size:30px;"></span></a></li>

    </ul>
  </div>
</nav>
';
?>

</body>
</html>