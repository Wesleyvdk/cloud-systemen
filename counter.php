<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Visit Counter</title>
</head>
<body>
    <h1>Welcome!</h1>
<?php
$servername = "db";
$username = "counter_user";
$password = "password";
$dbname = "visit_counter";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update visit count
$sql = "UPDATE counter SET visits = visits + 1 WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Visit count incremented successfully.";
} else {
    echo "Error updating record: " . $conn->error;
}

// Retrieve current visit count
$sql = "SELECT visits FROM counter WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Visits: " . $row["visits"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>