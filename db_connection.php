<?php
 
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "voteCoin";

// Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name FROM candidates";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Candidate Name: " . $row["name"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>