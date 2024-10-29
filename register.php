<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection details
/*$server = "localhost";
$username = "root";
$password = "";
$dbname = "contactinformation";*/

$server = "localhost";
$username = "ykht45";
$password = "WVcWCD39vf2gdB4r";
// $password = "";
$dbname = "ykht45_1";

// Creating  connection
$conn = new mysqli($server, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration logic
if (isset($_POST["register"])) {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // No need to hash here
    $rpassword = $_POST["rpassword"]; // No need to hash here

    // Check for duplicate user
    $duplicate = mysqli_query($conn, "SELECT * FROM `user` WHERE first_name = '$firstName' AND last_name = '$lastName' OR email = '$email'");

    if (!$duplicate) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($duplicate) > 0) {
        echo "User already exists";
    } else {
        // Checking if passwords match
        if ($password == $rpassword) {
            // Inserting new user using prepared statement
            $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, passwords) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

            if ($stmt->execute()) {
                //echo "Registration successful!";
                header("Location: login.html");
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Passwords do not match";
        }
    }
}

// Close the database connection
$conn->close();
?>
