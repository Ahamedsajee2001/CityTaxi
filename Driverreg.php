<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="Icon" href="img/icons8-car-96.png" />
    <link rel="stylesheet" href="CSS/register.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@1,9..40,300&family=Open+Sans:wght@300&family=Roboto+Slab&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@1,9..40,300&family=Open+Sans:wght@300&family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <div class="loginpage">
            <img src="img\Group 2 copy.png" width="200px" height="50px" alt="City-Taxi">
            <h1>Register Driver</h1>

            <form method="post" action="">

                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-user' ></i>
                    </div>
                    <!-- <label for="email">Email:</label> -->
                        <input type="text" name="fullname" placeholder="Enter Your Name" required>
                </div>

                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-envelope' ></i>
                    </div>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>
    
                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-phone'></i>
                    </div>
                    <input type="number" name="mobile" placeholder="Enter Your Mobile Number" required>
                </div>
    
                <div class="form">
                    <div class="form-icon">
                        <img src="img/icons8-age-50.png" alt="" width="15px" height="15px" >
                    </div>
                    <input type="number" name="age" placeholder="Enter Your Age" required>
                </div>
                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-id-card'></i>
                    </div>
                    <input type="text" name="nic" placeholder="Enter Your NIC Number" required>
                </div>
    
               
    
                <div class="submit">
                    <!-- <button id="signupButton">SIGN UP</button>    -->
                    <input type="submit" name="submit" value="SIGN UP" required>
                </div>

                <div class="Login">
                Have Already an Account?<a href="Driverlog.php">Login</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>