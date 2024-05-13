<?php 
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = '10000'; } 
    if (!isset($interest_rate)) { $interest_rate = '5'; } 
    if (!isset($years)) { $years = '5'; } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <select id="dropdown1" name="investment">
             
            </select>
            <br>

            <label for="dropdown2">Yearly Interest Rate:</label>
            <select id="dropdown2" name="interest_rate">
                
            
            </select>
           <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    <script>
                    var select =document.getElementById("dropdown2")
                    var select2 = document.getElementById("dropdown1")
                    for(var i=4; i<=12;i = i+0.5){
                        var option = document.createElement("option");
                        option.value = i;
                        option.text = i;
                        select.appendChild(option);
                    }
                    for(var j=10;j<=50;j = j+5){
                        var option2 = document.createElement("option");
                        option2.value = j*1000;
                        option2.text = j*1000;
                        select2.appendChild(option2);
                    }
                </script>
    </main>
</body>
</html>