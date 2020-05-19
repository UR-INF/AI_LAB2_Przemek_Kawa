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
    if($query->rowCount() > 0)
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


              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email"  placeholder="Email" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="pass" placeholder="Hasło" required="required">
                </div>
                <div class="form-group bg-secondary">
                  <input type="submit" value="login" name="login"  class="btn btn-block">
                </div>              
              </form>

