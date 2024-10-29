<?php
// Checking  if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Getting data from html to php
    $destination = $_POST['destination'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['lemail'];
    $message = $_POST['lmsg'];



    // database connection
    $server = "localhost";
    $username = "ykht45";
    $password = "WVcWCD39vf2gdB4r";
    $dbname = "ykht45_1";

    $conn = new mysqli($server, $username, $password, $dbname);

    // Checking  connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Inserting data into the database
    $sql = "INSERT INTO realdata (destination, firstname, lastname, email, request) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $destination, $fname, $lname, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
        //echo "Data inserted successfully";

        // Redirecting to payment.html
        header("Location: payment.html");
        exit(); 
    } else {
        echo "Error: " . $stmt->error;
    }

    // Closing the statement
    $stmt->close();

    // Closing the database connection
    $conn->close();
}
?>
