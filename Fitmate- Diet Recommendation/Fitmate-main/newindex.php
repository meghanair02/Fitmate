<form method="post" action="food-search.php">
    <input type="checkbox" name="veg" value="1"> Vegetarian
    <input type="checkbox" name="BP" value="1"> High Blood Pressure
    <input type="checkbox" name="diabetes" value="1"> Diabetes
    <input type="checkbox" name="gas" value="1"> Gas
    <input type="checkbox" name="kidneystone" value="1"> Kidney Stones
    <input type="checkbox" name="heartdisease" value="1"> Heart Disease
    <input type="checkbox" name="IBS" value="1"> Irritable Bowel Syndrome
    <input type="submit" value="Search">
</form>

<?php
$veg = isset($_POST['veg']) ? $_POST['veg'] : false;
$BP = isset($_POST['BP']) ? $_POST['BP'] : false;
$diabetes = isset($_POST['diabetes']) ? $_POST['diabetes'] : false;
$gas = isset($_POST['gas']) ? $_POST['gas'] : false;
$kidneystone = isset($_POST['kidneystone']) ? $_POST['kidneystone'] : false;
$heartdisease = isset($_POST['heartdisease']) ? $_POST['heartdisease'] : false;
$IBS = isset($_POST['IBS']) ? $_POST['IBS'] : false;

// Establish database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'diethistory';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL query
$sql = "SELECT name, calories FROM diett WHERE ";
$conditions = array();
if ($veg) {
    $conditions[] = "veg = 1";
}
if ($BP) {
    $conditions[] = "BP = 1";
}
if ($diabetes) {
    $conditions[] = "diabetes = 1";
}
if ($gas) {
    $conditions[] = "gas = 1";
}
if ($kidneystone) {
    $conditions[] = "kidneystone = 1";
}
if ($heartdisease) {
    $conditions[] = "heartdisease = 1";
}
if ($IBS) {
    $conditions[] = "IBS = 1";
}
$sql .= implode(" AND ", $conditions);

// Execute query and fetch results
$result = mysqli_query($conn, $sql);

// Print results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"] . " | Calories: " . $row["calories"] . "<br>";
    }
} else {
    echo "No results found.";
}

// Close database connection
mysqli_close($conn);
?>