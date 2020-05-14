<?php
session_start();
include('php/config.php');
error_reporting(0);
if (isset($_SESSION["login"]))
{
    header('Location:index.php');
}
if(isset($_POST['rejestr']))
{
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $email=$_POST['email'];
    $haslo=md5($_POST['pass']);
    $nr_tel=$_POST['nr_tel'];
    $sql="INSERT INTO klient(imie,nazwisko,email,haslo,nr_telefonu) VALUES (:imie,:nazwisko,:email,:pass,:nr_tel)";
    $query = $nah->prepare($sql);
    $query->bindParam(':imie',$imie,PDO::PARAM_STR);
    $query->bindParam(':nazwisko',$nazwisko,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':pass',$haslo,PDO::PARAM_STR);
    $query->bindParam(':nr_tel',$nr_tel,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $nah->lastInsertId();
    if($lastInsertId)
    {
        echo "sucess!";
    }
    else{
        echo "error";
    }
}
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
	 	<div class="container text-center">
		 <h1>BuldoRex</h1>
		 <div class="logo"> <img src="img/logo.jpg"></div>
		</div>
	</section>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
				<ul class="nav justify-content-end">
					<li class="nav-item">
						<a class="nav-link active" href="index.php#onas#Start">Start</a>
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
					<button class="login_btn bg-secondary"> <a class="nav-link" href="#placeholder">Login</a></button>
					<button class="login_btn bg-secondary"> <a class="nav-link" href="rejestracja.php">Rejestracja</a></button>
				<?php }
				else { echo "Zalogowany";
				} ?>
				</div>
			</div>

	</nav>

	<div class="modal-body text-center">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="imie" placeholder="Full Name" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nazwisko" placeholder="Full Name" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="nr_tel" placeholder="Numer Telefonu" maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" onBlur="checkAvailability()" placeholder="Email" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Hasło" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Potwierdz Hasło" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </body>
</html>
