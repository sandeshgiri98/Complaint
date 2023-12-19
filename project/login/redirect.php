<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="popup.css">
</head>
<body>
   
        <div id="success-popup" style="display: none;">
            <img src="../photoes/tick.gif" alt="Image Not found">
            <h2>Login Successful!</h2>
            <p>Welcome to home page.</p>
        </div>  
        <div id="error-popup" style="display: none;">
            <img src="../photoes/wrong.gif" class="invalid" alt="Image Not found">
            <h2 class="incorrect">Incorrect <br>Email or Password</h2>
            <p >Please try again.</p>
        </div>
 


    <!-- PHP for the login popup -->
    <?php
    include("../register/connection.php");

    $email =$_POST['email'];
    $password = $_POST['password'];

    $emailQuery = "SELECT * from register WHERE email='$email' and password='$password'";
    $emailExe = mysqli_query($con,$emailQuery);
    // if(mysqli_num_rows($emailExe)>0){
    //     header("Location: https://matechi.net/");
    // }
    // else
    // echo
    // "<h3>Data Insertion Failed</h3>"
    if(mysqli_num_rows($emailExe) > 0){
        //  login
        echo "<script>
                document.getElementById('success-popup').style.display='block';
                setTimeout(function(){ 
                    window.location.href='../dashboard/dashboard.html'; 
                }, 1600);
            </script>";
    } else {
        // Incorrect email or password
        echo "<script>
                document.getElementById('error-popup').style.display='block';
                setTimeout(function(){
                    window.location.href='login.php'; 
                    }, 1000);
            </script>";
    }
    ?>
</body>
</html>