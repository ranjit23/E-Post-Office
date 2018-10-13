<?php
$servername = "localhost";
$username = "localhost";
$password = "ranjit23";
$dbname = "epost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (fName, lName, userName, password)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>if(isset($_POST['save'])){
        $sql = "INSERT INTO users  (fName, lName, userName, password)
        VALUES ('".$_POST["fName"]."','".$_POST["lName"]."','".$_POST["userName"]."','".$_POST["password"]."')";
    }
