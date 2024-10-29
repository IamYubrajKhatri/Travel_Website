<?php

// Checking if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);to see what is happening//
    // fetching data from html to php
    $owner = $_POST["owner"];
    $cvv = $_POST["cvv"];
    $cardNumber = $_POST["card_number"];
    $expiryMonth = $_POST["months"];
    $expiryYear = $_POST["years"];

    // Creating a database connection 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactinformation";

    $conn = new mysqli($server, $username, $password, $dbname);

    // Checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Inserting data into the database
    $sql = "INSERT INTO paymentinfo (ownername, cvv, cardnumber, months, years) VALUES ('$owner', '$cvv', '$cardNumber', '$expiryMonth', '$expiryYear')";

    if ($conn->query($sql) === TRUE) {
       // echo "Payment has been successfully processed.";
       header("Location: thank.html");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Closeing the database connection
    $conn->close();
}
?>
