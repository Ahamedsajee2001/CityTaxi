<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
  <link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
    type="text/css"
  />
    <title>Manual Reservation Form</title>
    <link rel="stylesheet" href="manualres.css"/>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><img src="Taxi-logo-pic.png" alt="taxi"></a>
        <nav class="navbar">
            <a href="Home.php">Home</a>
            <a href="About.html">About Us</a>
            <a href="Contact.html">Contact us</a>
            <a href="register.php">Automatic Reservation</a>
        </nav>
    </header>
    <div class="container">
    <style>
  </style>
        <h2> Manual Reservation Form</h2>
        <form action="process_reservation.php" method="POST">
            <label for="reservation_type">Reservation Type:</label>
            <select id="reservation_type" name="reservation_type">
                <option value="manual" id="option">Manual</option>
                <option value="automatic" id="option">Automatic</option>
            </select><br>

            <label for="destination">Manual passenger Mobile:</label><br>
            <input type="text" id="destination" name="destination" required><br>

            <label for="pickup_location">Pickup Location:</label>
            <input type="text" id="pickup_location" name="pickup_location" required><br>

            <label for="destination">Dropoff Location:</label>
            <input type="text" id="destination" name="destination" required><br>

            <label for="pickup_datetime">Pickup Date and Time:</label>
            <input type="datetime-local" id="pickup_datetime" name="pickup_datetime" required><br>
            <label for="Driver_id">Select a Driver:</label>
            
 
            <br><br><label for="status">Reservation Status:</label>
            <span>Pending</span> <br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        // Get the reservation type dropdown element
        var reservationTypeDropdown = document.getElementById('reservation_type');

        // Add change event listener
        reservationTypeDropdown.addEventListener('change', function() {
            // Get the selected value
            var selectedValue = reservationTypeDropdown.value;

            // Check if selected value is "automatic"
            if (selectedValue === 'automatic') {
                // Redirect to register.php
                window.location.href = 'register.php';
            }
        });
    </script>
    
</body>
</html>
