<?php
// Enables error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection details
$server = "localhost";
$username = "ykht45";
$password = "WVcWCD39vf2gdB4r";
$dbname = "ykht45_1";

// Creating connection
$conn = new mysqli($server, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Starting or resuming the session
session_start();

// Login logic
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Checking user credentials
    $stmt = $conn->prepare("SELECT email FROM `user` WHERE email = ? AND passwords = ?");
    
    // Checking if the prepare statement is successful
    if ($stmt === false) {
        die("Error in SQL query: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful
        $row = $result->fetch_assoc();
        $username = $row["email"];

        // Storing username in session
        $_SESSION["email"] = $username;

        // Redirecting to the home page or wherever you want
        header("Location:index2.php");
        exit();
    } else {
        // Login failed
        echo "Invalid email or password";

       // header("Location:login.html");

    }

    $stmt->close();
}

// Closing the database connection
$conn->close();
?>
