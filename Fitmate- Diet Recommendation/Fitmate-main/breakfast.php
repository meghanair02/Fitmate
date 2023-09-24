<?php 
include('diett.php');
$numbers = array(215,220,210,240,420,240,330,340,210,285,270,145,270,460,300);

$breakfast=array(  
 ' Egg bhurji 2 eggs','Chicken tikka - ( chicken breast with onions and garlic/masala paste)','Masala omelette ','Fish curry ','Grilled chicken sandwich','Oatmeal with milk berries 
','Greek yoghurt with fruit and nuts ','Avocado toast ','Vegetable omelette ','Smoothie bowl - (banana, berries,dry fruit, milk) ','Overnight oats
','Tofu and vegetable stir fry - (tofu, brocolli mushroom,oil) ','Smoked salmon - cream cheese toast ','Breakfast burrito','Egg and sausage muffins');

// The target sum we want to achieve
$targetB;
// Initialize a variable to hold the current sum
$currentSum = 0;

// Initialize an empty array to hold the index values of the numbers used to achieve the target sum
$usedIndexes = array();

// Keep adding random numbers from the array until we reach the target sum
while ($currentSum < $targetB) {
    // Choose a random index from the array
    $randIndex = array_rand($numbers);

    // Get the number at the random index
    $randNum = $numbers[$randIndex];

    // Add the random number to the current sum and the used indexes array
    $currentSum += $randNum;
    $usedIndexes[] = $randIndex;
}

// Output the final sum and the index values of the numbers used to achieve it
echo "<br>"."\n"."The amount of calories for breakfast should be: " . $targetB . "<br>";

echo "<br>"."\n"."The amount of calories for breakfast is: " . $currentSum . "<br>";

foreach ($usedIndexes as $index) {
    echo $breakfast[$index] . "\n".",";
}
$extra=$currentSum-$targetB;
if($extra<=50) {
  "light ups and downs are okay";
} else {header("refresh:2");
}
    // if($extra>=400)
    // {
      
    // }
    {echo "\n".'warning:try better input'."\n";}
echo "\n Extra=>".$extra;
                
                ?>