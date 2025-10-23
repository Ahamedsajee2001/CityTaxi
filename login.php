<?php
session_start();
include 'Config/database.php';
header("Cache-control: no-cache, no-store, must-revalidate"); // prevent browser caching
header("pragma: no-cache");
header("Expires: 0");
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="Icon" href="img/icons8-car-96.png" />
    <link rel="stylesheet" href="CSS/login.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@1,9..40,300&family=Open+Sans:wght@300&family=Roboto+Slab&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
  <div class="container">
        <div class="loginpage">
            <img src="img\Group 2 copy.png" width="200px" height="50px" alt="City-Taxi">
            <h1>Login Now</h1>

            <form action="login.php" method="POST">
                <?php
                if(isset($_POST['login'])){
                    if(!empty(trim($_POST['username']))&& !empty(trim($_POST['password']))){
                        $username = mysqli_real_escape_string($con,$_POST['username']);
                        $password = mysqli_real_escape_string($con,$_POST['password']);

                        $login_query = "SELECT * FROM passenger WHERE username='$username' AND password='$password'";
                        $login_query_run = mysqli_query($con,$login_query);

                        if(mysqli_num_rows($login_query_run)>0){

                             $row = mysqli_fetch_array($login_query_run);
                             if(is_array($row) && !empty($row)){
                                $_SESSION['username']=$row['username'];
                                $_SESSION['password']=$row['password'];
                                $_SESSION['email']=$row['email'];
                                $_SESSION['fullname']=$row['fullname'];
                                $_SESSION['mobile']=$row['mobile'];
                                $_SESSION['age']=$row['age'];
                                $_SESSION['gender']=$row['gender'];

                                echo '<div id="success-message" style="font-size:7px; font-width:bolder; background-color: #dff0d8; color: #3c763d; padding: 10px; border: 1px solid #d6e9c6; border-radius: 5px; margin-bottom: 10px; margin-top: 10px">Registration Successful! Login Details have been sent to your email. Check now.</div>';
                                echo '<script>
                                setTimeout(function(){
                                document.getElementById("success-message").style.display = "none";
                                },4000); //4000 milliseconds = 4 seconds
                                </script>';
                                header("Location: Home2.php");
                                exit(0);
                             }

                        }
                        else{
                            $_SESSION['status'] = "Invalid Email or Password";
                            header("Location: login.php");
                            exit(0);
                        }
                    }
                    else{
                        $_SESSION['status'] = "All fields are mandetory";
                        header("Location: login.php");
                        exit(0);
                    }
                }
                
                ?>

                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-user' ></i>
                    </div>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
    
                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-key' ></i>
                    </div>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
    
                <div class="forgot">
                    <a href="Forgot.html">Forgot Password?</a>
                </div>
    
                <div class="submit">
                    <input type="submit" value="Login" name="login">
                </div>
            </form>

            <div class="others">
                <p>Login with Others</p>
            </div>

            <div class="logo">
                <span class="icon-button">
                    <span class="facebook">
                        <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class='bx bxl-facebook-circle' ></i></a>
                    </span>
                    
                    <span class="gmail">
                       <a href="https://www.google.com/"><i class='bx bxl-google' ></i></a> 
                    </span>

                </span>

            </div>

            <div class="Register">
                Need an Account?<a href="register.php" >Register</a>
            </div>

            
        </div>
    </div>
  </body>
</html>
