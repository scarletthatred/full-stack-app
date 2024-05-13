<?php
    $grade1 = filter_input(INPUT_POST, 'grade1', 
            FILTER_VALIDATE_FLOAT);
            $grade2 = filter_input(INPUT_POST, 'grade2', 
            FILTER_VALIDATE_FLOAT);
            $grade3 = filter_input(INPUT_POST, 'grade3', 
            FILTER_VALIDATE_FLOAT);
            $grade4 = filter_input(INPUT_POST, 'grade4', 
            FILTER_VALIDATE_FLOAT);
            $grade5 = filter_input(INPUT_POST, 'grade5', 
            FILTER_VALIDATE_FLOAT);
            $grade6 = filter_input(INPUT_POST, 'grade6', 
            FILTER_VALIDATE_FLOAT);


            $grade1max = filter_input(INPUT_POST, 'grade1max', 
            FILTER_VALIDATE_FLOAT);
            $grade2max = filter_input(INPUT_POST, 'grade2max', 
            FILTER_VALIDATE_FLOAT);
            $grade3max = filter_input(INPUT_POST, 'grade3max', 
            FILTER_VALIDATE_FLOAT);
            $grade4max = filter_input(INPUT_POST, 'grade4max', 
            FILTER_VALIDATE_FLOAT);
            $grade5max = filter_input(INPUT_POST, 'grade5max', 
            FILTER_VALIDATE_FLOAT);
            $grade6max = filter_input(INPUT_POST, 'grade6max', 
            FILTER_VALIDATE_FLOAT);

            
            $finalGrade = $grade1+$grade2+$grade3+$grade4+$grade5+$grade6;
            $finalgrademax = $grade1max+$grade2max+$grade3max+$grade4max+$grade5max+$grade6max;
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <main>
        <h1>Grade Calculator</h1>

        <label>Grade 1:</label>
        <span><?php echo $grade1*100/$grade1max; ?></span><br>
        <label>Grade 2:</label>
        <span><?php echo $grade2*100/$grade2max; ?></span><br>
        <label>Grade 3:</label>
        <span><?php echo $grade3*100/$grade3max; ?></span><br>
        <label>Grade 4:</label>
        <span><?php echo $grade4*100/$grade4max; ?></span><br>
        <label>Grade 5:</label>
        <span><?php echo $grade5*100/$grade5max; ?></span><br>
        <label>Grade 6:</label>
        <span><?php echo $grade6*100/$grade6max; ?></span><br>
        <label>Final Grade:</label>
        <span><?php echo $finalGrade*100/$finalgrademax; ?></span><br>

        
    </main>
</body>
</html>