<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'p3rsonn3lp0rt4';
    $db = 'test';
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>




