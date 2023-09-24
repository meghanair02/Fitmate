<!DOCTYPE html>
<html>

<meta name="viewport" content=" initial-scale=1">
<?php session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}?>
<head><div  ><h1>FITMATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome <?php echo $username;?></div></h1> 			
</div></head>
<body>
<style>
    <style>
/* Define styles for body and h1 elements */
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

h1 {
  text-align: center;
  margin-top: 50px;
}

/* Define styles for topnav */
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
<div class="topnav">
  <a href="diett.php">Diet chart</a>
  <a href="history.php">Diet History</a>
  <a href="graph.php">Tracker</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <span><a href="logout.php">Logout</a></span>
</div>

<div style="padding-left:16px">
  <br></br>
</div>

</body>
</html><?php
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
                        borderWidth: 1
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
</body>
</html>
