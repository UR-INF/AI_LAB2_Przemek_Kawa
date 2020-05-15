<?php



if(isset($_POST['login']))
{

    $email=$_POST['email'];
    $haslo=md5($_POST['pass']);
    $sql="SELECT email,haslo,imie FROM klient WHERE email=:email and haslo=:pass";
    $query = $nah->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':pass',$haslo,PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount()>0)
    {
        $_SESSION['login']=$_POST['email'];
        $_SESSION['imie']=$result->imie;
        $page=$_SERVER['REQUEST_URI'];
        echo "<script type='text/javascript'> document.location='$page';</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
                  
}
  

?>

<div class="dropdown d-inline">
		<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 Login</a>
            <div class="dropdown-menu">
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Email" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Hasło" required="required">
                </div>
                <div class="form-group bg-secondary">
                  <input type="submit" value="login" name="login"  class="btn btn-block">
                </div>              
              </form>
            </div>
</div>
