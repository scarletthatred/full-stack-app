<?php 
    
    if (!isset($grade1)) { $grade1 = '25'; } 
    if (!isset($grade2)) { $grade2 = '25'; } 
    if (!isset($grade3)) { $grade3 = '25'; } 
    if (!isset($grade4)) { $grade4 = '25'; } 
    if (!isset($grade5)) { $grade5 = '25'; } 
    if (!isset($grade6)) { $grade6 = '50'; } 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Midterm Grading Project</title>
    <link rel="stylesheet" href="main.css"/>
</head>

<body>
    <main>
    <h1>Midterm Grading Project</h1>
    <form action="capture_grades.php" method="post">

        <div id="data">
            <label>Grade 1</label>
            <select id="dropdown1" name="grade1">
            </select>
            <input type="hidden" name="grade1max" value="25">
            <br>
            <label>Grade 2</label>
            <select id="dropdown2" name="grade2"></select>
             <br>
             <input type="hidden" name="grade2max" value="25">
             <label>Grade 3</label>
             <select id="dropdown3" name="grade3">
             
             </select>
             <input type="hidden" name="grade3max" value="25">
             <br>
             <label>Grade 4</label>
             <select id="dropdown4" name="grade4">
             
             </select>
             <input type="hidden" name="grade4max" value="25">
             <br>
             <label>Grade 5</label>
             <select id="dropdown5" name="grade5">
             
             </select>
             <input type="hidden" name="grade5max" value="25">
             <br>
             <label>Grade 6</label>
             <select id="dropdown6" name="grade6">
             
             </select>
             <input type="hidden" name="grade6max" value="50">
             <br>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Grade"/><br>
        </div>

    </form>
    <script>
                    var select = document.getElementById("dropdown1")
                    var select2 =document.getElementById("dropdown2")
                    var select3 =document.getElementById("dropdown3")
                    var select4 =document.getElementById("dropdown4")
                    var select5 =document.getElementById("dropdown5")
                    var select6 =document.getElementById("dropdown6")
                    for(var i=0; i<=25;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select.appendChild(option);
                    }
                    for(var i=0; i<=25;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select2.appendChild(option);
                    }
                    for(var i=0; i<=25;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select3.appendChild(option);
                    }
                    for(var i=0; i<=25;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select4.appendChild(option);
                    }
                    for(var i=0; i<=25;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select5.appendChild(option);
                    }
                    for(var i=0; i<=50;i++){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select6.appendChild(option);
                    }
                   
                </script>
    </main>
</body>
</html>