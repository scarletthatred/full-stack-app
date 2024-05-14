<?php

//This assigns the variables input from the index.php
$assignmentName = filter_input(INPUT_POST, 'assignmentName');
$className = filter_input(INPUT_POST, 'className');
$pointsEarned = filter_input(INPUT_POST, 'pointsEarned', 
FILTER_VALIDATE_FLOAT);
$pointsPossible = filter_input(INPUT_POST, 'pointsPossible', 
FILTER_VALIDATE_FLOAT);

//this if statement checks for null values. I got this from chapter 4 assignment
if ($assignmentName == NULL || $className == NULL || $pointsEarned == NULL || $pointsPossible == NULL) {
    $error = "Invalid Assignment info. Check all fields and try again.";
    //stole this from chapter 4 as well
    include('error.php');
} else {
    //connects the database using the database.php file
    require_once('database.php');

    
//this long list adds the values inserted from the index.php to the database by binding the values to their respective names
    $statement2 = $db->prepare('INSERT INTO assignment(task_name,points_earned,points_possible,class_id) VALUES (:task_name,:points_earned,:points_possible,:class_id)');
    $statement2->bindValue(':class_id', $className);
    $statement2->bindValue(':points_possible', $pointsPossible);
    $statement2->bindValue(':points_earned', $pointsEarned);
    $statement2->bindValue(':task_name', $assignmentName);
    $statement2->execute();
    $statement2->closeCursor();
   
} 

//gets all the rows from the database
$statement = $db->query("SELECT * FROM class");
?>

<!-- Starts the html file. coppied from midterm mostly -->
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Classes</title>
    <link rel="stylesheet" href="main.css" />

</head>

<!-- the body section -->
<body>
<header><h1>Final Project</h1></header>
<!-- This starts the table loop that iterates through the different classes -->
<?php foreach ($statement as $table): ?>
    <!-- for formatting purposes -->
    <div class="box">
        <!-- gives the table a title -->
<h2><?php echo htmlspecialchars($table['course_name']);?></h2>
<!-- this is the table's setup -->
<table>
<tr>
    <!-- headers -->
    <th>Assignment Name</th>
    <th>Points Earned</th>
    <th>Points Possible</th>
</tr>
<!-- this is the creation of the specific data to place in the table. it filters out by classID and uses this to build the data -->
<?php
$classID = $table["class_id"];
$statement2 = $db->query("SELECT * FROM assignment WHERE class_id = $classID");
// default values for good practice
$finalClassGrade = 0;
$finalClassGradePossible = 0;

//the nested foreach loop that gets the data for the table
foreach ($statement2 as $rows){
    //I found it easier to make each of these an echo statement than haing another open 
    //foreach loop that I would have to switch back and forth from 
    echo "<tr>";
    echo "<td>" . htmlspecialchars($rows['task_name']) . "</td>";
    echo "<td>" . htmlspecialchars($rows['points_earned']) . "</td>";
    echo "<td>" . htmlspecialchars($rows['points_possible']) . "</td>";
    echo "</tr>";

    //this is where the grade is calculated
    $finalClassGrade = $finalClassGrade+$rows['points_earned'];
    $finalClassGradePossible= $finalClassGradePossible+$rows['points_possible'];
    $gradetotal = $finalClassGrade*100/$finalClassGradePossible;

}
//end of table
echo "</table>";
//this is where the final grade is displayed in percentages. it is formatted to have 0 decimal places
echo "<h3>Final Grade: " . number_format($gradetotal,0) . "%</h3>";?>
</div>
<?php
//end of the foreach loop for the classes
endforeach;
?>

<!-- good practice to place a footer -->
<footer>
    <p><?php echo date("Y"); ?> Final Project</p>
</footer>
</body>
</html>