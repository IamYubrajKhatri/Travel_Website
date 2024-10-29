<?php
// Enables error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection details
$server = "localhost";
$username = "ykth45";
$password = "WVcWCD39vf2gdB4r";
$dbname = "ykht45_1";

// Creating connection
$conn = new mysqli($server, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if(isset($_POST["sub"])){
    $name = $_POST["nam"];
    $comment = $_POST["comment"];
    $date = date('F d Y,h:i:s A');
    $reply_id = $_POST["reply_id"];
   
    $query = "INSERT INTO `comment`(`id`, `name`, `commentar`, `date`, `reply_id`) VALUES ('','$name','$comment','$date','$reply_id')";
    mysqli_query($conn, $query);
}

// Fetching comments from the database
$sql = "SELECT * FROM `comment` ORDER BY `date` DESC";
$result = $conn->query($sql);

// Displaying comments as HTML
while ($row = $result->fetch_assoc()) {
    echo '<div class="comment">';
    echo '<p><strong>' . $row['name'] . ':</strong> ' . $row['commentar'] . '</p>';
    echo '<small>' . $row['date'] . '</small>';
    echo '</div>';
}

// Closing the database connection
$conn->close();
?>
