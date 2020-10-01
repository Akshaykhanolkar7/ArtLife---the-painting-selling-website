<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https:/use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  
    <title>Home 2</title>

    <style>
  *{
    margin:0px;
    padding: 0px;
  }
  .btn{
    padding:0px;
  }
  .btn:hover{
    box-shadow:5px 5px 20px black;
  }
  #main
  {
    width: 100%;
    height: auto;
    border: 0px solid black;
    display: -webkit-flex; /* Safari */
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    flex-direction: row;
    padding: 5px;
  }
  #main_in
  {
    height:350px;
    width:33%;
    border:0px solid black;
    padding: 10px
    /* margin: 0px; */
  }
  img
  {
     width:100%;
     height:300px;
  }
  #h1
  {
    display: inline;
    position: relative;
    font: 30px Lucida handwriting, cursive;
    letter-spacing: -5px;
    color:white;
  }

  /*#h1:after
  {
    content: "ArtLife";
    position: absolute; left: 5px; top: 5px;
    color: rgba(255,0,0,0.5);
  }*/

  #myFooter a{
    text-decoration: none;
    color: white;
  }

  #dda a:hover {
    color: lime;
  }
  .fab {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 5px;
  }

  .fab:hover {
  opacity: 0.7;
  }


  .fa-facebook {
  background: #3B5998;
  color: white;
  }

  .fa-twitter {
  background: #55ACEE;
  color: white;
  }
  .fa-instagram {
  background: #125688;
  color: white;
  }
  .fa-google {
  background: #dd4b39;
  color: white;
  }


  </style>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="home2.php" style="font: 30px Lucida handwriting, cursive;">ArtLife</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/home2.php?var=Figurative ">Figurative,human</a>
          <a class="dropdown-item" href="/home2.php?var=Abstract ">Abstract Paintings</a>
          <a class="dropdown-item" href="/home2.php?var=Religious ">Religious,God,Goddess</a>
          <a class="dropdown-item" href="/home2.php?var=Animals ">Animals,Birds,Fishes</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="artistloginpage.php"><i class="fas fa-pencil-alt"></i> Artist Login</a>
      </li>
    </ul>
  </div>
</nav>

  <div style="width:100%;">
    <iframe name="home" src="slide.html" height="400px" width="1375px" align="middle" ></iframe>
  </div>


<div id="main">
  <!-- <div class="container"> -->
  <div class="row">
    <?php
        $servername = "localhost";
        $username = "id7617156_root";
        $password = "sakec";
        $dbname = "id7617156_artlife";

        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if(isset($_GET['var'])){
          $ch=$_GET['var'];

          if($ch=="Figurative"){

            $sql = "SELECT * from painting where genre like 'Figurative%' or genre like 'Human%'";
            $data = mysqli_query($conn, $sql) or die("Internal Error1");
            
          }
          else if ($ch=="Abstract") {
            # code...

            $sql = "SELECT * from painting where genre like 'Abstract%'";
            $data = mysqli_query($conn, $sql) or die("Internal Error2");
          }
          else if ($ch=="Religious") {
            # code...

            $sql = "SELECT * from painting where genre like 'Religious%'";
            $data = mysqli_query($conn, $sql) or die("Internal Error3");
          }
          else if ($ch=="Animals") {
            # code...

            $sql = "SELECT * from painting where genre like 'Animal%'";
            $data = mysqli_query($conn, $sql) or die("Internal Error4");
          }

          }
          else{
            $sql = "SELECT * from painting";
            $data = mysqli_query($conn, $sql) or die("Internal Error5");
          }
        
      

        while ($row=mysqli_fetch_assoc($data)) {
    ?>

    <div class="col-sm-4">
      <a href="<?php echo 'item.php?id='.$row["id"] ?>">
        <button type="submit" class="btn btn-default btn-lg"><img style="width: 100%;height:300px" src="<?php echo '/images/img'.$row['id'].'.jpg' ?>" alt=""></button>
        <p style="text-align: center;" class="lead"><?php echo 'Rs '.$row["cost"] ?></p>
      </a>
    </div>

  <?php } ?>
</div>
  </div>  
</div>

<footer id="myFooter"  style="background-color: #333;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                    <h4 style="color:lime">Get started</h4>
                    <ul>
                        <li><a href="home2.php">Home</a></li>
                        <li><a href="home2.php">Sign up</a></li>

                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h4 style="color:lime">About us</h4>
                    <ul>
                        <li><a href="about_us.php">Contact us</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="social-networks" align="center">
            <p style="color:white;margin:0;"> Follow us on:</p>
            <a href="https:/twitter.com/ImAK09" class="twitter"><i class="fab fa-twitter" style="border-radius:50%"></i class="fab fa-twitter" style="border-radius:50%"></a>
            <a href="https:/www.facebook.com/akshay.khanolkar.7" class="facebook"><i class="fab fa-facebook" style="border-radius:50%"></i></a>
            <a href="https:/www.instagram.com/akkshhay_7/" class="instagram"><i class="fab fa-instagram" style="border-radius:50%"></i></a>
            <a href="https:/plus.google.com/u/1/+Akshaykhanolkar" class="google"><i class="fab fa-google" style="border-radius:50%" ></i></a>
        </div>

    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https:/code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https:/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https:/stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>