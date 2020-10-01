<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Items</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<script>
function myFunction() {
    alert("Your order successfully placed.");
}
</script>


	<?php 
	include 'session.php'; 
	?>
	
	<?php
		echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

  <a class="navbar-brand" href="home2.php" style="font: 30px Lucida handwriting, cursive;">ArtLife</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
     
    
      </ul>
  </div>

      

  </ul>

    <ul class="navbar-nav ml-auto" >
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="far fa-user"></i> Welcome! '.$_SESSION['uname_at'].'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="home2.php">Logout</a>
        </div>
      </li>
      

    </ul>
  </div>
</nav>'
?>
<?php 
		if(isset($_GET['id'])){
			$servername = "localhost";
	        $username = "id7617156_root";
	        $password = "sakec";
	        $dbname = "id7617156_artlife";	        
		}
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * from painting where id =".$_GET['id'];
            
		$data = mysqli_query($conn, $sql);
		 while ($row=mysqli_fetch_assoc($data)) {
		 	echo'<div class="container" style="margin-top: 80px;">';
	?>
	
	<p align="center"><div class="col-sm-3" style="width:500px;" >
      <div></div><p style="text-align: justify;"><img style="width: 300px;height: 300px; float:left;" src="<?php echo 'images/img'.$row['id'].'.jpg' ?>" alt=""></p></div>
  
  <div style="padding-left: 400px;">
      <p style="text-align: justify; font-family: cursive;" class="lead"><?php echo 'Rs. '.$row["cost"] ?></p>
      <p style="text-align: justify;font-family: cursive;" class="lead"><?php echo 'Name:'.$row["name"] ?></p>
      <p style="text-align: justify;font-family: cursive;" class="lead"><?php echo 'Size:'.$row["size"] ?></p>
      <p style="text-align: justify;font-family: cursive;" class="lead"><?php echo 'Category:'.$row["genre"] ?></p>
      <p style="text-align: justify;font-family: cursive;" class="lead"><?php echo 'Artist:'.$row["fname"] ?></p>
    </div>
	</p>
	<?php } ?>
</div>
</div>
<br>

<form action="" method="POST">
		<p align="left" style="padding-left: 550px;"><button type="button" class="btn btn-success" onclick="myFunction()">Add to Cart</button></p>	
	</form>

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>