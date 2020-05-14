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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	<section id="start">
	
	<section>
			<div class="nav navbar-collapse">
				<ul class="nav justify-content-end">
					<li class="nav-item">
						<a class="nav-link active" href="#Start">Start</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#onas">O nas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#galeria">Galeria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#kontakt">O nas</a>
					</li>
				</ul>
				<div class "my-2">
				<?php if(strlen($_SESSION['login'])==0)
				{
				?>
					<div class="login_btn"> <a href="#placeholder">Login / Rejestracja</a></div>
				<?php }
				else { echo "Witaj zalogowany użytkowniku!";
				} ?>
				</div>
			</div>

	
			