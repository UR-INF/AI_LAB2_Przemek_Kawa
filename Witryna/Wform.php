<?php
session_start();
$conn = new mysqli("localhost","root","","aplikacje");

if($conn->connect_error) {
	die("Conn Fail: ".$conn->connect_error);
}
if(!isset($_SESSION['login']))
{
	$conn->close();
	header('Location: index.php');
	exit;
}
$emailk=$_SESSION['login'];




?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>BuldoRex</title>
		<meta name="description" content="Wypożyczalnia pojazdów budowlanych">
		<meta name="keywords" content="wypożyczalnia pojazdów budowlanych, budowa, koparka">
		<meta name="author" content="Przemek Kawa">
		<!-- bootstrap -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- fontello -->
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<!-- personal css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="img/Ikony/logo.jpg">
	</head>
	
	<body>


	<nav class="navbar sticky-top navbar-dark bg-dark">
		<div class="container">
				<ul class="nav justify-content-end">
					<li class="nav-item">
						<a class="nav-link" href="index.php#demo">Start</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#my">O Nas</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="index.php#Kontakt">Kontakt</a>
					</li>
					<?php if (isset($_SESSION['login']))
					{	?>
					<li class="nav-item Dropdown">
						<div class="dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Konto</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="chhaslo.php">Zmień hasło</a>
							<a class="dropdown-item" href="Pklienta.php">Panel Klienta</a>
							<a class="dropdown-item" href="Wform.php">Formularz Wypożyczenia</a>
						</div>
						</div>
					</li>
					<?php
					} elseif (isset($_SESSION['prac']))
					{ ?>
						<li class="nav-item">
							<a class="nav-link" href="PracK.php">Zamówienia</a>
						</li>
			<?php   }	?>
				</ul>
				<div class="my-2 d-inline">
				<?php if ((isset($_SESSION['login'])) or (isset($_SESSION['prac'])))
				{
				?>
					<a class="nav-link" href="logout.php" role="button" >
						 Wyloguj</a>
				<?php 
				}
				else 
				{ ?>	
			
					<div class="nav-link d-inline"> <a class="text-white" href="loginForm.php" class="btn-xs uppercase" data-togle="modal">Logowanie</a></div>
					<div class="nav-link d-inline"> <a class="text-white" href="rejestracjaForm.php" class="btn-xs uppercase" data-togle="modal">Rejestracja</a></div>
					
			<?php	} ?>
				</div>
			</div>

	</nav>
 <div class="row content"  >
    <div class="col-sm-2" >

    </div>
	<div class="col-sm-8 text-center" >  
		<div class="container">
			<form action="WformPOST.php" method="POST">
						<div class="form-group">
							<label class="col-form-label col-md-4">Data odbioru<input class="form-control" type="date" value="<?php echo date("Y-m-d") ?>" name="dataodb"></label>
						</div>
						<div class="form-group">
							<label class="col-form-label col-md-4">Data zwrotu<input class="form-control" type="date" value="<?php echo date("Y-m-d") ?>" name="datazwr"></label>
						</div>
						<button id="szukaj" name="szukaj" class="btn-dark btn-lg">Sprawdz Dostępne</button>
					</form>
		</div>
		<?php
		if(isset($_SESSION['Grrr']))
	  {
		  echo $_SESSION['Grrr'];
		  unset ($_SESSION['Grrr']);
	  }?>
	</div>
	<div class="col-sm-2">

      </div>
 </div>

<div class="container text-center bg-dark text-white">    
 <div id="Kontakt">
	<br>
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 col-md-4">
					<h3 class="text-center">Kontakt</h3>
					<p>BuldoRex sp. z o. o.</p>
					<p>tel. 888 888 888</p>
					<p>Kwiatowa 307</p>
					<p>32-712 Rzeszów</p>
				</div>
				<div class="col-sm-12 col-md-4">
					
				</div>
				<div class="col-sm-12 col-md-4">
					<h3 class="text-center">Znajdz nas na:</h3>
					<a class="text-white" href="https://www.facebook.com" target="_blank"><i style="font-size: 40px" class="icon-facebook-squared"></i></a>
					<a class="text-white" href="https://www.youtube.com" target="_blank"><i style="font-size: 40px" class="icon-youtube-squared"></i></a>
					<a class="text-white" href="https://github.com/UR-INF/AI_LAB2_Przemek_Kawa" target="_blank"><i style="font-size: 40px" class="icon-github-squared"></i></a>
				</div>
			</div>
		</div>
		<br>
	</div>
</div>


<footer class="container-fluid text-center">
  <p> Przemysław Kawa &copy; 2020</p>
</footer>

</body>
</html>