<?php
    // username and password need to be replaced by your username and password
    // dbname is the same as your username
    $dbServername = "mariadb"; //mariadbl
    $dbusername = "cs332t25"; 
    $dbpassword = "";
    $dbname = "cs332t25";
    $link = mysqli_connect($dbServername, $dbusername, $dbpassword, $dbname);
    
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully<p>';
?>
