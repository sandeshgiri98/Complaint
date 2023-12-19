<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link rel="stylesheet" href="popupp.css">
</head>
<body>
  
        <div id="success-popup" style="display: none;">
            <img src="../photoes/register.gif" class="invalid" alt="Image Not found">
            <h2>Registered Successful!</h2>
            <p>Welcome to Login Page.</p>
        </div>  
        <div id="error-popup" style="display: none;">
            <img src="../photoes/wrong.gif" class="invalid" alt="Image Not found">
            <h2 class="incorrect">Error <br>Please Check Credentials</h2>
            <p >Please try again.</p>
        </div>
 

<?php
include_once('connection.php');



  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['contact'];
  $dob = $_POST['dob'];
  $password = $_POST['password'];

    
    $sql = "INSERT INTO register (name, email, phone, dob, password) VALUES ('$name', '$email', '$phone', '$dob', '$password')";
    $query = $con->query($sql);

    if(!$query){
      echo 
      "<script>
       document.getElementById('error-popup').style.display='block';
       setTimeout(function(){
          window.location.href='Register.php'; 
          }, 1800);
       </script>";
} 
else 
{
  echo "<script>
  document.getElementById('success-popup').style.display='block';
  setTimeout(function(){ 
      window.location.href='../login/login.php'; 
  }, 1600);
</script>";
}
  
    ?>
</body>
</html>