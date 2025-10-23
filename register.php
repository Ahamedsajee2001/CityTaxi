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
            <h1>Register Now</h1>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-envelope' ></i>
                    </div>
                    <!-- <label for="email">Email:</label> -->
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>

                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-user' ></i>
                    </div>
                    <input type="text" name="fullname" placeholder="Enter Your Full Name" required>
                </div>
    
                
    
                <div class="form">
                    <div class="form-icon">
                        <i class='bx bxs-phone'></i>
                    </div>
                    <input type="text" name="mobile" placeholder="Enter Your Mobile Number" required>
                </div>
    
                <div class="form">
                    <div class="form-icon">
                        <img src="img/icons8-age-50.png" alt="" width="15px" height="15px" >
                    </div>
                    <input type="number" name="age" placeholder="Enter Your Age" required>
                </div>
    
                <div class="gender">
                    
                    <label name="Gender">Gender :</label>
                    <input name="Gender" type="radio" value="male" required>Male
                                <!-- <label for="Gender" style="margin-right: 10px;">Male</label> -->
                    <input name="Gender" type="radio" value="female" required>Female
                                <!-- <label for="Gender">Female</label> -->
                </div>
    
                <div class="submit">
                    <!-- <button id="signupButton">SIGN UP</button>    -->
                    <input type="submit" name="submit" value="SIGN UP" required>
                </div>

                <div class="Login">
                Have Already an Account?<a href="login.php">Login</a>
            </div>
            </form>
            <?php
        include 'Config/database.php';
        // require phpmailer autoloader
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/SMTP.php';

        // Check Connection
        if($con->connect_error){

            die("Connection failed" .$con->connect_error);

        }

        //Handle Form Submission
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            //process from data and registration logic
            $username = generateUsername();
            $password = generatePassword();
            $email = $_POST['email'];
            $fullname =$_POST['fullname'];
            $mobile =$_POST['mobile'];
            $age =$_POST['age'];
            $gender =$_POST['Gender'];

            //verify Email Address
            $verify_email = mysqli_query($con,"SELECT Email FROM passenger  WHERE email = '$email'");

        if(mysqli_num_rows($verify_email) !=0){
            echo "<div class='message'>
                   <p>This email is already used Try another one!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button>";
        }
        else{
            $sql ="INSERT INTO passenger (username,password,email,fullname,mobile,age,gender) VALUES ('$username','$password','$email','$fullname','$mobile','$age','$gender')";
        }


            if($con->query($sql) == true){

                $mail = new PHPMailer(true);

                try{
                    $mail->isSMTP();
                    $mail->Host ='smtp.gmail.com'; //SMTP server hostname
                    $mail->SMTPAuth = true;
                    $mail->Username='citytaxi201@gmail.com';
                    $mail->Password='ffmllspkokbvolsy';
                    $mail->SMTPSecure='ssl'; //Enable TLS encryption
                    $mail->Port = 465; //SMTP port

                    //sender and recipient
                    $mail->setFrom('citytaxi201@gmail.com'); //your gmail
                    $mail->addAddress($email,$fullname); //REcipient email and  name

                    //Email content
                    $mail->isHTML(true);
                    $mail->Subject = 'Welcome to Citytexi';
                    $mail->Body = "Welcome $fullname where every ride is an experience tailored just for you! Sit back, relax, and let us take you on a journey through the heart of the city. Our dedicated drivers are here to ensure your comfort and safety every step of the way. Thank you for choosing City Taxi - your trusted partner in urban travel!<br><br>
                    Your Username:$username <br><br>
                    Your password: $password";

                    //Send email
                    $mail->send();
                    echo '<div id="success-message" style="font-size:7px; font-width:bolder; background-color: #dff0d8; color: #3c763d; padding: 10px; border: 1px solid #d6e9c6; border-radius: 5px; margin-bottom: 10px; margin-top: 10px">Registration Successful! Login Details have been sent to your email. Check now.</div>';
                    echo '<script>
                    setTimeout(function(){
                        document.getElementById("success-message").style.display = "none";
                    },5000); //5000 milliseconds = 3 seconds
                    </script>';  
                }
                catch(Exception $e){
                    echo "<p>Failed to send login details. please try again later..</p>";

                }
            }
            else{
                // echo "Error: ". $sql . "<br>" . $con->error;
                echo '<div id="unsuccess-message" style="font-size:7px; font-width:bolder; background-color: #FF0000; color: #3c763d; padding: 10px; border: 1px solid #d6e9c6; border-radius: 5px; margin-bottom: 10px; margin-top: 10px">Registration Unsuccessful! Check your connection status</div>';
                echo '<script>
                setTimeout(function(){
                    document.getElementById("unsuccess-message").style.display = "none";
                },5000); //5000 milliseconds = 5 seconds
                </script>';

            }
        }

        // Function to generate a random username
        function generateUsername(){
            $length = 15;
            return substr($_POST['fullname'] .uniqid(),0,$length);
        }
        function generatePassword(){
            return substr(md5(mt_rand()),0,6);
        }
        $con->close();
        ?>
            
        </div>
    </div>
</body>
</html>