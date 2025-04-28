<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "web";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $station_id = $_POST['full_name'];
    $station_pincode = $_POST['station_pincode'];
    $contact_number = $_POST['contact_number'];

    $sql = "INSERT INTO station_register (station_id, pincode, contact) 
            VALUES ('$station_id', '$station_pincode', '$contact_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Station registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Station Register</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>

<h1>Station Register</h1>

<form action="station_register.php" method="POST">
  <label>Station ID:</label><br>
  <input type="text" name="full_name" placeholder="Enter the station ID" required><br><br>

  <label>Pincode:</label><br>
  <input type="number" name="station_pincode" placeholder="Enter pincode" required><br><br>

  <label>Contact:</label><br>
  <input type="number" name="contact_number" placeholder="Enter contact Number" required><br><br>

  
  <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.html">Login Here</a></p>

</body>
</html>
