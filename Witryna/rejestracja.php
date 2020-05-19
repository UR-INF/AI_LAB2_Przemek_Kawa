<?php



if(isset($_POST['rejestr']))
{
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $email=$_POST['email'];
    $haslo=md5($_POST['password']);
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
      echo "<script>alert('Registration successfull. Now you can login');</script>";
    }
    else 
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
                  
}
?>

<!--  
<script>
function checkemail()
{
  $("loaderIcon").show();
  jQuery.ajax({
    url: "checkemail.php",
    data:'email'=$("#email").val(),
    type: "POST",
    success:function(data){
      $("#user-avalibity-status").html(data);
      $("loaderIcon").hide();
    },
    error:function(){}

  });
}
</script>-->

<script type="text/javascript">
function valid()
{
  if(document.rejestr.password.value!=document.rejestr.confirmpassword.value)
  {
    alet("Hasla nie są identyczne!");
    return false;
  }
  return true;
}
</script>

            
              <form method="post" name="rejestr" onSubmit="return valid();" >
                <div class="form-group">
                  <input type="text" class="form-control" name="imie" placeholder="Imie" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nazwisko" placeholder="Nazwisko" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nr_tel" placeholder="Numer Telefonu" maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input  type="email" class="form-control" name="email" id="email"  placeholder="Email" required="required" > 
                  <span id="user-availability-status" style="font-size:12px;"></span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Hasło" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Potwierdz Hasło" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="" >
                  <label  for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group bg-secondary">
                  <input type="submit" value="Rejestruj" name="rejestr" id="rejestr" class="btn btn-block">
                </div>
               
              </form>

