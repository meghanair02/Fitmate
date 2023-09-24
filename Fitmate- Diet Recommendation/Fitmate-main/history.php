<html>
  <head>
 <?php  session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} 
?>
    <title>FITMATE</title>
    <style>
      /* Define the styles for the page */
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

      /* Add new styles for the table */
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th,
      td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
      }

      th {
        background-color: #f2f2f2;
        color: #333;
      }

      tr:hover {
        background-color: #f5f5f5;
      }
    </style>
  </head>
  <body>
    <br>
    <!-- Add the page content here -->
    <head><h1>FITMATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome <?php echo $username;?></div></h1> 			
    <div class="topnav">
      <a href="diett.php">Diet chart</a>
      <a href="history.php">Diet History</a>
      <a href="base1.php">Tracker</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="predictorr.php">Illness speculation</a>
      <a href="game.html">Game</a>

      <span><a href="logout.php">Logout</a></span>
    </div>
    <?php
      // Add the PHP code here
    ?>
  </body>
</html>


<?php 

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=diethistory', 'root', '');
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}

// Define the input username
$input_username = $username;

// Prepare a SELECT query
$stmt = $db->prepare("SELECT * FROM diethistory WHERE username = :username");

// Bind the input username to the query
$stmt->bindParam(':username', $input_username);

// Execute the query
$stmt->execute();

// Initialize an empty array to store the variables to extract
$variables_to_extract = array();
echo ' Your Diet History';
// Loop through the results and extract the variables if the input username matches the username in the database
while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($user['username'] === $input_username) {
        $variables_to_extract[] = array(
            'breakfast' => $user['breakfast'],
            'lunch' => $user['lunch'],
            'snacks'=>$user['snacks'],
            'dinner'=>$user['dinner'],
            'created_on' => $user['created_on']
        );
    }
}

// Print the variables to extract in a table
if (!empty($variables_to_extract)) {
    echo '<table>';
    echo '<tr><th>Breakfast</th><th>Lunch</th><th>Snacks</th><th>Dinner</th><th>Created On</th></tr>';
    foreach ($variables_to_extract as $variable) {
        echo '<tr>';
        echo '<td>' . $variable['breakfast'] . '</td>';
        echo '<td>' . $variable['lunch'] . '</td>';
        echo '<td>' . $variable['snacks'] . '</td>';
        echo '<td>' . $variable['dinner'] . '</td>';
        echo '<td>' . $variable['created_on'] . '</td>';


        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "User not found!";
}

// Close the database connection
$db = null;
?>
