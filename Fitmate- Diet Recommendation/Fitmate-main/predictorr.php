<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewoprt" content="width=device-width, initial-scale=1">
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

</html>
</label><!DOCTYPE html>
<html>
<head>
  <title>Symptoms Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #333;
    }
    input[type="checkbox"] {
      margin-right: 5px;
    }
    input[type="submit"] {
      display: block;
      margin-top: 10px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #4caf50;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
  <h1 type='body'>Tick the symptoms you feel in your body  </h1>
</head>
<body>
  <form method="post">
    <!-- Checkbox options for Cancer -->
    

<?php
// Define the arrays

$conditions = [
  'cancer' => ['fatigue','unexplained pain','changes in bowel or bladder habits','persistent coughing'],
  'Hyperthyroidism' => ['rapid heartbeat','sweating','anxiety','tremors','difficulty sleeping','weakness','dry skin','hairloss','depression'],
  'diabetes' => ['excessive thirst','frequent urination','blurred vision','slow healing of wounds','tingling or numbness in hands and feet'],
  'crohns' => ['abdominal pain','diarrhea','rectal bleeding','fatigue'],
  'ulcerative'=>['abdominal pain','cramping','rectal pain and bleeding','fatigue'],
  'HIV' => ['fever','night sweats','swollen lymph nodes','fatigue','frequent infections'],
  'tubercolosis' => ['coughing up blood','chest pain','night sweats','fever','loss of appetite'],
  'celiac' => ['abdominal pain','bloating','diarrhea','constipation','anemia','fatigue']
];

$all_symptoms = [];

// Collect all symptoms in one array and remove duplicates
foreach ($conditions as $condition => $symptoms) {
  $all_symptoms = array_merge($all_symptoms, $symptoms);
}

$all_symptoms = array_unique($all_symptoms);

// Create a checkbox for each symptom
foreach ($all_symptoms as $symptom) {
  echo '<label>';
  echo '<input type="checkbox" name="numbers[]" value="' . $symptom . '"> ' . ucwords($symptom);
  echo '</label>';
}
?>
<input type="submit" name="submit" value="Submit">

</form>
<?php
if (isset($_POST['submit'])) {
    $numbers = $_POST['numbers'];
    $selected_numbers = array();

    foreach ($numbers as $number) {
        $selected_numbers[] = (string) $number;
    }

}
// Define the set of numbers to find

// Loop through each array

echo "<div style='background-color: #f2f2f2; padding: 10px; border: 1px solid #ccc; border-radius: 5px;'>";
foreach($conditions as $name => $array){
  // Check if the array contains all the numbers in the search set
  if(count(array_intersect($array, $selected_numbers)) == count($selected_numbers)){
    // If the array contains all the numbers in the search set, print its name
    echo "<p style='color: #555; font-size: 18px;'>Possible Medical Condition based on your symptoms: " . $name . "</p>";
  }
}
echo "</div>";

?>

</html>