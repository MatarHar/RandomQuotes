<!--
 Ra'ndom,
 Piotr Tryfon
-->
<?php

session_start();
$array= array('0','',''); //connection,quote,author
$_SESSION['info'] = $array; 
require_once('roll.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RandomQuotes,</title>
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class = "main_container">
    <div class = "shadow">
    </div>
        <div class = "quote">
        <?php 
                if($_SESSION['info'][0]==='1') {
                echo $_SESSION['info'][1];
                }
                else echo "ERROR";
                ?>
        </div>
        <div class = "author">
            -<?php 
                if($_SESSION['info'][0]==='1') {
                echo $_SESSION['info'][2];
                }
                else echo "404";
                ?>
        </div>
    </div>
    <div class = "f5">
        <a href = "index.php" >MORE</a>
    </div>
</body>
</html>