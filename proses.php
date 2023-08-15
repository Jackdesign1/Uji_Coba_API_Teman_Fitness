<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $born = $_POST["born"];
    $birthdate = $_POST["birthdate"];
    $faculty = $_POST["faculty"];
    $studyProgram = $_POST["studyProgram"];
    $whatsapp = $_POST["whatsapp"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    if ($conn->query($sql) === TRUE) {
        echo "Data has been submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
