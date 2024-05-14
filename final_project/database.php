<!-- All stolen from chapter 4 and changed to the correct database-->
<?php
//connects to the database using localhost
    $dsn = 'mysql:host=localhost;dbname=grades';
    //the credencials for the database
    $username = 'mgs_user';
    $password = 'pa55word';

    //a try catch statement to stop it if it can't connect
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>