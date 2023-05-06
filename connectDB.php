<?php
    // username and password need to be replaced by your username and password
    // dbname is the same as your username
    $dbusername = "8212";
    $dbpassword = "8212";
    $dbname = "8212";
    $link = mysqli_connect("mariadbl", $dbusername, $dbpassword, $dbname);
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully<p>';
?>