<html>

<form>
  <label for="day">Day:</label>
  <input type="text" id="day" name="day"><br><br>
  <label for="weight">Weight:</label>
  <input type="text" id="weight" name="weight"><br><br>
  <input type="submit" value="Submit">
</form>
<?php $servername = "";
$usernamee = "root";
$password = "";
$dbname = "diethistory";

// Create database connection
$conn = mysqli_connect($servername, $usernamee, $password, $dbname);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define variables for the data you want to insert


// Build SQL query to insert data into table
$sql = "INSERT INTO diethistory (username, height, weight,age,breakfast,lunch) VALUES ('$username', '$h', '$w','$age','$brkfast','$lch')";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
</html>
