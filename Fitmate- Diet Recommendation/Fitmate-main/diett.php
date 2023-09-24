<?php

session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
  
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
  <link href="assets/css/BMI.CSS" type="text/css" rel="stylesheet" />

</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
		</div>
	</div>
</BODY>
</HTML>
<?php
if($_POST!=null)
{
    $h=empty($_POST["height"]) ? 0 : $_POST["height"];
    $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $decision=empty($_POST["decision"])?0:$_POST["decision"];
    $age=empty($_POST["age"])?0:$_POST["age"];
    $gender=empty(($_POST["gender"]))?0:$_POST["gender"];
    $index =0;
    $obese='obese - BMI :';
    $suggest;
    if($h !=0 && $w !=0)
        $index = round($w/($h*$h));
    
    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="Underweight - BMI : " . $index;
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25) {
        $bmi="Normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
        $bmi="Overweight - BMI : " . $index;  
        $bmiStyle="alert alert-warning";
    } else {
        $bmi='obese - BMI :' .$index;  
        $bmiStyle="alert alert-danger";
    }
    // #calculating sweight based on category
    // if($decision=="decrease")
    //    if($bmiStyle=="")

    /////////////////////////////////
    // if($decision=="decrease" && $bmi=='obese - BMI')
    // { 
    //    $s=(25*($h*$h));
    //    echo $s;
        
   //}
    // if($decision=="decrease" && $bmi='obese - BMI:')
    // { 
    //    $s=(27*($h*$h));     //BMI=25: obese to overweight  
        
    // }
    
    
       

}

 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> FITMATE </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
 
	<body>
        <div class="container">

        <h1>Diet Plan Generator</h1>
            <form method="post">
            <style>
  .bg-blue {background-color:lightblue;padding:30px;}
</style>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="form-group">
                  <label for="age">Please Enter your age in years :</label>
                  <input type="text" class="form-control" name="age" placeholder="20">
                </div>
                <div class="form-group">
                  <label for="height">Please Enter your Height in meters :</label>
                  <input type="text" class="form-control" name="height" placeholder="180">
                </div>
                <div class="form-group">
                  <label for="weight">Please Enter your weight in Kgs :</label>
                  <input type="text" class="form-control"  name="weight" placeholder="150">
                </div>
                <div>
                Gender:
		<Select name="gender" ><br>
		<option>Male</option>
		<option>Female</option><&nbsp;><br>
		</select><br></div>
                <div class="form-group">
                  <label for="decision">Increase or decrease weight?</label>
                  <input type="text" class="form-control"  name="decision" placeholder="decision?">
                </div>
		<p><input type="checkbox" name="veg" value="1">Vegetarian</p>
    <h2>Select your dietary preferences:</h2>

		<p><input type="checkbox" name="BP" value="1">High Blood Pressure</p>
		<p><input type="checkbox" name="diabetes" value="1">Diabetes</p>
		<p><input type="checkbox" name="gas" value="1">Gas/Indigestion</p>
		<p><input type="checkbox" name="kidneystone" value="1">Kidney Stones</p>
		<p><input type="checkbox" name="heartdisease" value="1">Heart Disease</p>
		<p><input type="checkbox" name="IBS" value="1">Irritable Bowel Syndrome (IBS)</p>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Calculate</button>
                  
                </div>
</form>
                <!DOCTYPE html>
<html>
<head>
	<title>Diet Plan</title>
</head>
<body>
	
	</form>
              </form>
              <br>
              <br>
              <div class="<?=$bmiStyle?>" role="alert" id="bmi">
                <?php 
                echo $bmi."<br>";
                ?>


            </div>
            <div class="<?=$bmiStyle?>" role="alert" id="bmi">

            
                <?php 
                if($decision=="decrease" && ($index>30))
                { 
                   $s=(rand(25.1,29.9)*($h*$h));     //BMI=25: obese to overweight  
                    echo "we suggest you to decrease your weight to ".$s ." kgs \n";
                }
                else if($decision=="decrease" && ($index>25 && $index<30) )
                { 
                   $s=(rand(18.5,24.9)*($h*$h));     //BMI=25: overweight to normal  
                   echo "we suggest you to decrease your weight to ".$s ." kgs \n";
                }
                else if($decision=="decrease" && ($index>18.5 && $index<24.9) )
                { 
                   $s=(rand(15,18.4)*($h*$h));     //BMI=25: normal to underweight   
                   echo "we suggest you to decrease your weight to ".$s ." kgs \n";

                }          
                /////////////////////////////////// 
                //increase 
                if($decision=="increase" && ($index>30))
                { 
                   //$s=(27*($h*$h));     //BMI=25: obese to overweight  
                    //echo "we suggest you to decrease your weight to ".$s ." kgs";
                    //kyakarna hai iska?//
                }
                else if($decision=="increase" && ($index>25 && $index<30) )
                { 
                   $s=(31*($h*$h));     //BMI=31: overweight to obese  
                   echo "we suggest you to increase your weight to ".$s ." kgs \n";
                }
                else if($decision=="increase" && ($index>18.5 && $index<24.9) )
                { 
                   $s=(rand(25,29.9)*($h*$h));     //BMI=27: normal to overweight   
                   echo "we suggest you to increase your weight to ".$s ." kgs \n";

                }
                else if($decision=="increase" && ($index<18.5) )
                {    
                   $s=(rand(15,18.4)*($h*$h));     //BMI=22: underweight to normal
                   echo "we suggest you to increase your weight to ".$s ." kgs \n";

                }

                //calorie counter
                $calories;
		             
                switch ($gender){
                  case 'Female':
                    $calories= (655 + (9.6 * $s ) + (1.8 * $h) - (4.7 * $age));
                    echo "<p>Your estimated daily metabolic rate is $calories </p>";
        
                    break;
                    case 'Male':
                      $calories=(66 + (13.7 *$s) + (5 * $h) - (6.8 * $age));
                      echo "<p>Your estimated daily metabolic rate should be $calories calories </p>";
                      
                }
                
                // if($s>=95 && $s<=96 )
                //   {
                //      $target=400;
                //   }
                // elseif($s>=99 && $s<=100 )
                // {
                //   $target=350;
                // } 
                // elseif($s>=88 && $s<=89)
                // {
                //   $target=600;
                // }  
                  // Sample array of numbers
                  ?>
                  </div>
                <div class="bg-blue" role="alert" id="bmi">
                <?php

$targetB=((25*$calories)/100);
echo "target calories for breakfast should be ".$targetB;
$targetl=((35*$calories)/100);
echo "<br>"."target calories for lunch should be ".$targetl;
$targets=((15*$calories)/100);
echo "<br>"."target calories for snacks should be ".$targets;
$targetd=((25*$calories)/100);
echo "<br>"."target calories for dinner should be ".$targetd."<br>"."<br>";
// Define an array of numbers

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Get user inputs
		$veg = isset($_POST['veg']) ? $_POST['veg'] : false;
		$BP = isset($_POST['BP']) ? $_POST['BP'] : false;
		$diabetes = isset($_POST['diabetes']) ? $_POST['diabetes'] : false;
		$gas = isset($_POST['gas']) ? $_POST['gas'] : false;
		$kidneystone = isset($_POST['kidneystone']) ? $_POST['kidneystone'] : false;
		$heartdisease = isset($_POST['heartdisease']) ? $_POST['heartdisease'] : false;
		$IBS = isset($_POST['IBS']) ? $_POST['IBS'] : false;
		$calories = isset($_POST['calories']) ? $_POST['calories'] : false;
    }
	// Establish database connection
	$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'diett';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL queries
$tables = array('breakfast', 'lunch', 'snacks', 'dinner');
$sqls = array();
foreach ($tables as $table) {
    $sql = "SELECT name FROM $table WHERE ";

    $conditions = array();

    if ($veg) {
        $conditions[] = "veg != 1";
    }
    if ($BP) {
        $conditions[] = "BP != 1";
    }
    if ($diabetes) {
        $conditions[] = "diabetes != 1";
    }
    if ($gas) {
        $conditions[] = "gas != 1";
    }
    if ($kidneystone) {
        $conditions[] = "kidneystone != 1";
    }
    if ($heartdisease) {
        $conditions[] = "heartdisease != 1";
    }
    if ($IBS) {
        $conditions[] = "IBS != 1";
    }
    if ($calories) {
        $conditions[] = "calories BETWEEN " . ($calories - 50) . " AND " . ($calories + 50);
    }

    if (count($conditions) == 0) {
        echo "Please select at least one symptom.";
        exit;
    }

    $sql .= implode(" AND ", $conditions);

    $sqls[] = $sql;
}

// Execute queries and fetch results
for ($i = 0; $i < count($tables); $i++) {
    $result = mysqli_query($conn, $sqls[$i]);

    // Print results
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>" . ucfirst($tables[$i]) . " Options:</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["name"] . "<br>";
        }
    } else {
        echo "<h2>No " . $tables[$i] . " options found.</h2>";
    }
}

// Close database connection
mysqli_close($conn);





///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$breakfastt_sr=base64_encode(serialize($breakfastt));
$brkfast=json_encode($breakfastt);
$lunchh_sr=base64_encode(serialize($lunchh));
$lch=json_encode($lunchh);
$sncks=json_encode($snackss);
$diner=json_encode($dinner);

// Set up database connection variables
$servername = "";
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
$sql = "INSERT INTO diethistory (username, height, weight,age,breakfast,lunch,snacks,dinner) VALUES ('$username', '$h', '$w','$age','$brkfast','$lch','$sncks','$diner')";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);

?>



                  
           
          </div>  
    
          

          
</body>
</html>