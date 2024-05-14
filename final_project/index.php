<?php require_once("database.php");
//connection to the database via database.php
$statement = $db->query("SELECT * FROM class");
?>
<!-- start of html -->
<!DOCTYPE html>
<html>
<head>
    <title>Final Project</title>
    <!-- connected to main.css -->
    <link rel="stylesheet" href="main.css"/>
</head>

<body>
    <main>
        <!-- main title for the application -->
    <h1>Final Project</h1>
    <form action="results.php" method="post">
<!-- for data handeling purposes -->
        <div id="data">
            <!-- got to lable the input boxes for the user -->
            <label>Assignment Name</label>
            <!-- makes a text box -->
            <input type="text" id="box1" name="assignmentName"></input>
            <!-- nl -->
            <br>
<!-- label -->
            <label>Class</label>
            <!-- dropdown box is dropdown box ID is used for later-->
            <select id="dropdown3" name="className"></select>
            <!-- nl -->
             <br>
             <!-- label -->
             <label>Points Earned</label>
             <!-- different dropdown box -->
             <select id="dropdown1" name="pointsEarned"></select>
             <!-- nl -->
             <br>
             <!-- same as before label -->
             <label>Points Possible</label>
             <!-- dropdown box number 3 -->
             <select id="dropdown2" name="pointsPossible"></select>
             <!-- nl -->
             <br>
             <!-- submission button from midterm I think -->
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit"/><br>
        </div>
    </form>
    <!-- this script is the setup for the dropdown lists. 
    It is crucial this is done correctly -->
    <script>
//seting up the variables to connect to the select menus
                    var select = document.getElementById("dropdown1")
                    var select2 =document.getElementById("dropdown2")
                    var select3 =document.getElementById("dropdown3")

                    //set a loop for the first dropdown to be 100 long
                    for(var i=0; i<=100;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select.appendChild(option);
                    }
                    //set the loop to be 100 long
                    for(var i=0; i<=100;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select2.appendChild(option);
                    }
                    //this is the php foreach loop used to create the last 
                    //dropdown based on the classes in the database
                    <?php
                    foreach ($statement as $className):?>
                    //went back to js to make scripting easier
                        var option = document.createElement("option");
                        option.value = "<?php echo $className["class_id"]?>";
                        option.text =  "<?php echo $className["course_name"]?>";
                        select3.appendChild(option);
                        // ended the loop
                    <?php endforeach?>
                    // ended the script
                </script>
    </main>
</body>
</html>