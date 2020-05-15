<?php
session_start();
include('php/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>BuldoRex</title>
		<meta name="description" content="Wypożyczalnia pojazdów budowlanych">
		<meta name="keywords" content="wypożyczalnia pojazdów budowlanych, budowa, koparka">
		<meta name="author" content="Przemek">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	<section id="start">
	 	<div class="container text-center">
		 <h1>BuldoRex</h1>
		 <div class="logo"> <img src="img/logo.jpg"></div>
		</div>
	</section>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
				<ul class="nav justify-content-end">
					<li class="nav-item">
						<a class="nav-link active" href="index.php#start">Start</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#onas">O nas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#onas#galeria">Galeria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#onas#kontakt">Kontakt</a>
					</li>
				</ul>
				<div class="my-2">
				<?php if(strlen($_SESSION['login'])==0)
				{
				?>
					
						<?php include('login.php'); ?>
						<?php include('rejestracja.php');?>
					
				<?php }
				else { 
					?>
						<a class="btn btn-secondary" href="logout.php" role="button" >
						 Logout</a>
					<?php
				} ?>
				</div>
			</div>

	</nav>
	<section id="onas" class="bg-secondary">
		<div class="container">
		<h3 class="text-cenetr">O Nas</h3>
			<p>W roku 1990 system GNU posiadał już edytor tekstu (Emacs),
				kompilator (GCC) oraz większość podstawowych bibliotek i narzędzi standardowej dystrybucji Uniksa.
				Jako że głównym założeniem było stworzenie w pełni wolnego systemu operacyjnego, a nie napisanie go zupełnie od nowa,
				starano się używać wolnego oprogramowania wszędzie, gdzie było to możliwe. W latach 80. 
				nie było go zbyt wiele; skorzystano więc z okienkowego systemu graficznego X Window System, systemu profesjonalnego składu drukarskiego
				TeX i mikrojądra Mach i włączono je do GNU.
			</p>
		</div>
	</section>
	<section id="Galeria" class="bg-white">
		<div class="container">
		<h3 class="text-cenetr">Galeria</h3>
			<p>W roku 1990 system GNU posiadał już edytor tekstu (Emacs),
				kompilator (GCC) oraz większość podstawowych bibliotek i narzędzi standardowej dystrybucji Uniksa.
				Jako że głównym założeniem było stworzenie w pełni wolnego systemu operacyjnego, a nie napisanie go zupełnie od nowa,
				starano się używać wolnego oprogramowania wszędzie, gdzie było to możliwe. W latach 80. 
				nie było go zbyt wiele; skorzystano więc z okienkowego systemu graficznego X Window System, systemu profesjonalnego składu drukarskiego
				TeX i mikrojądra Mach i włączono je do GNU.
			</p>
		</div>
	</section>
	<section id="kontakt" class="bg-secondary">
		<div class="container">
		<h3 class="text-cenetr">Kontakt</h3>
			<p>W roku 1990 system GNU posiadał już edytor tekstu (Emacs),
				kompilator (GCC) oraz większość podstawowych bibliotek i narzędzi standardowej dystrybucji Uniksa.
				Jako że głównym założeniem było stworzenie w pełni wolnego systemu operacyjnego, a nie napisanie go zupełnie od nowa,
				starano się używać wolnego oprogramowania wszędzie, gdzie było to możliwe. W latach 80. 
				nie było go zbyt wiele; skorzystano więc z okienkowego systemu graficznego X Window System, systemu profesjonalnego składu drukarskiego
				TeX i mikrojądra Mach i włączono je do GNU.
			</p>
		</div>
	</section>

	</body>
</html>