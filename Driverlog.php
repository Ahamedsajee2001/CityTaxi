
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
            <h1>Driver Login</h1>

            <form action="login.php" method="POST">

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

            <div class="Register">
                Need an Account?<a href="Driverreg.php" >Register</a>
            </div>

            
        </div>
    </div>
  </body>
</html>
