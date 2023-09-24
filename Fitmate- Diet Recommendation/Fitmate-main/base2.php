<?php
// Database connection details
$host = "localhost";
$username3 = "root";
$password = "";
$dbname = "graph db";

// Create connection
$conn = new mysqli($host, $username3, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}
// Get form data
$day = $_POST['day'];
$weight = $_POST['weight'];

// SQL query to insert data into table
$sql = "INSERT INTO details (username, day, weight) VALUES ('$username','$day', '$weight')";

// Execute query


// Close connection
$conn->close();
