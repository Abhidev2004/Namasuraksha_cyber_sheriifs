<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "web"; // your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Only run when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $officer_id = $_POST['officer_id'];
    $station_id = $_POST['station_id'];
    $officer_name = $_POST['officer_name'];
    $badge_number = $_POST['badge_number'];
    $rank = $_POST['rank'];
    $department = $_POST['unit'];  // corrected: 'unit' instead of 'department'
    $contact_number = $_POST['contact_number'];
    $email_id = $_POST['email_id'];

    // Always validate station_id exists before inserting
    $check_station = "SELECT * FROM station_register WHERE station_id = '$station_id'";
    $result = $conn->query($check_station);

    if ($result->num_rows > 0) {
        // Now insert into officers
        $sql = "INSERT INTO officers (officer_id, station_id, officer_name, badge_number, rank, department, contact, email_id) 
                VALUES ('$officer_id', '$station_id', '$officer_name', '$badge_number', '$rank', '$department', '$contact_number', '$email_id')";

        if ($conn->query($sql) === TRUE) {
            echo "New Officer added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Station ID does not exist in station_register. Please enter a valid station_id.";
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <title>Add Officer</title>
</head>
<body>

  <h2>Add New Officer</h2>

  <form action="officers.php" method="POST">

    <label>Officer ID:</label><br>
    <input type="text" name="officer_id" placeholder="Enter unique Officer ID" required><br><br>

    <label>Station ID:</label><br>
    <input type="text" name="station_id" placeholder="Enter unique station ID" required><br><br>

    <label>Officer Name:</label><br>
    <input type="text" name="officer_name" placeholder="Enter full Officer Name" required><br><br>

    <label>Badge Number:</label><br>
    <input type="text" name="badge_number" placeholder="Enter Badge Number" required><br><br>

    <label>Rank:</label><br>
    <input type="text" name="rank" placeholder="Enter Rank (e.g., Constable, Sub-inspector..)" required><br><br>

    <label>Department:</label><br>
    <select name="unit" required>
      <option value="">Select Department</option>
      <option value="Administration">Administration</option>
      <option value="Patrol">Patrol</option>
      <option value="Investigative Services">Investigative Services</option>
      <option value="Support Services">Support Services</option>
      <option value="Traffic Police">Traffic Police</option>
      <option value="Cybercrime Unit">Cybercrime Unit</option>
      <option value="Security Detail/VIP Security">Security Detail/VIP Security</option>
      <option value="K-9 Unit">K-9 Unit</option>
      <option value="Mounted Police">Mounted Police</option>
      <option value="Crime Scene Investigation (CSI)">Crime Scene Investigation (CSI)</option>
      <option value="School Resource Officers (SROs)">School Resource Officers (SROs)</option>
      <option value="Victim Advocate">Victim Advocate</option>
      <option value="Public Information Officer (PIO)">Public Information Officer (PIO)</option>
      <option value="Criminal Investigation Department (CID)">Criminal Investigation Department (CID)</option>
      <option value="Economic Offences Wing (EOW)">Economic Offences Wing (EOW)</option>
      <option value="Government Railway Police (GRP)">Government Railway Police (GRP)</option>
      <option value="Anti-Corruption Organization">Anti-Corruption Organization</option>
      <option value="State Armed Police Forces">State Armed Police Forces</option>
      <option value="Central Armed Police Forces (CAPF)">Central Armed Police Forces (CAPF)</option>
      <option value="Central Bureau of Investigation (CBI)">Central Bureau of Investigation (CBI)</option>
      <option value="National Investigation Agency (NIA)">National Investigation Agency (NIA)</option>
      <option value="Intelligence Bureau (IB)">Intelligence Bureau (IB)</option>
    </select><br><br>

    <label>Contact:</label><br>
    <input type="number" name="contact_number" placeholder="Enter contact number" required><br><br>

    <label>Email ID:</label><br>
    <input type="email" name="email_id" placeholder="Enter email ID" required><br><br>

    <button type="submit">Add Officer</button>

  </form>

</body>
</html>
