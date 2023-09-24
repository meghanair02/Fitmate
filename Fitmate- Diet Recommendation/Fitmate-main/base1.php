<!DOCTYPE html>
<html>

<?php session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}?>
<head><h1>FITMATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome <?php echo $username;?></div></h1> 			
</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #22a7be;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="diett.php">Diet chart</a>
  <a href="history.php">Diet History</a>
  <a href="base1.php">Tracker</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="predictorr.php">Illness speculation</a>
  <a href="game.html">Game</a>

  <span><a href="logout.php">Logout</a></span>
</div>

<div style="padding-left:16px">
  <br></br>
</div>

</body>
</html>

<head>
	<title>Weight Input Page</title>
</head>
<?php session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}?>
<body>
	<form method="post" action="base1.php">
		<label for="day">Select Day:</label>
		<select id="day" name="day">
        <option value=" 1">Day 1</option>
			<option value=" 2">Day 2</option>
			<option value=" 3">Day 3</option>
			<option value=" 4">Day 4</option>
            <option value=" 5">Day 5</option>
			<option value=" 6">Day 6</option>
			<option value=" 7">Day 7</option>
			<option value=" 8">Day 8</option>
			<option value=" 9">Day 9</option>
			<option value=" 10">Day 10</option>
			<option value=" 11">Day 11</option>
			<option value=" 12">Day 12</option>
			<option value=" 13">Day 13</option>
			<option value=" 14">Day 14</option>
			<option value=" 15">Day 15</option>
			<option value=" 16">Day 16</option>
			<option value=" 17">Day 17</option>
			<option value=" 18">Day 18</option>
			<option value=" 19">Day 19</option>
			<option value=" 20">Day 20</option>
			<option value=" 21">Day 21</option>
			<option value=" 22">Day 22</option>
			<option value=" 23">Day 23</option>
			<option value=" 24">Day 24</option>
			<option value=" 25">Day 25</option>
			<option value=" 26">Day 26</option>
			<option value=" 27">Day 27</option>
			<option value=" 28">Day 28</option>
			<option value=" 29">Day 29</option>
			<option value=" 30">Day 30</option>
			
		</select><br><br>
		<label for="weight">Enter Weight:</label>
		<input type="number" id="weight" name="weight"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
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
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>
<?php
// Connect to MySQL database
$host = '';
$user = 'root';
$password = '';
$dbname = 'graph db';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}
// Get the username from the query string

// Select numeric data from database for the given username
$stmt = $conn->prepare("SELECT day, weight  FROM details WHERE username = :username ORDER BY day");
$stmt->bindParam(':username', $username);
$stmt->execute();
$data = array();
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
    $data[] = $row;
}

// Create line chart using Chart.js library
?>
<!DOCTYPE html>
<html>
<head>
    <title>Line Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        color: #000000;
    }

    #myChart {
        width: 800px;
        height:200px;
        margin: 0 auto;
    }

    h1 {
        text-align: left;
        margin-top: 50px;
    }

    p {
        text-align: center;
        margin-top: 20px;
    }
</style>

</head>
<body>
    <h1>Weight Progress Over a Month</h1>
    <?php if (count($data) > 0) { ?>
        <canvas id="myChart"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode(array_column($data, 0)); ?>,
                    datasets: [{
                        label: 'Weight',
                        data: <?php echo json_encode(array_column($data, 1)); ?>,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    <?php } else { ?>
        <p>No data found for username: <?php echo $username; ?></p>
    <?php } ?>
