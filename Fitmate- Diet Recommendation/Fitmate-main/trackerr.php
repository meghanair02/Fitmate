
<?php
// Connect to MySQL database
$host = '';
$user = 'root';
$password = '';
$dbname = 'graph db';
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the username from the query string
$username = $_GET['username'];

// Select numeric data from database for the given username
$sql = "SELECT * FROM details WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row['weight'];
}

// Create line chart using Chart.js library
?>
<!DOCTYPE html>
<html>
<head>
    <title>Line Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php if (count($data) > 0) { ?>
        <canvas id="myChart"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode(range(1, count($data))); ?>,
                    datasets: [{
                        label: 'Numeric Data',
                        data: <?php echo json_encode($data); ?>,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
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
