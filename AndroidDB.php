<?php
$servername = "papademas.net";
$username = "auser";
$password = "apass";
$dbname = "android";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *from harsha";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output[]=$row;
        print(json_encode($row));
    }
} else {
    echo "0 results";
}
$conn->close();
?>