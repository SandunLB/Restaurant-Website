<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/restaurant/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'restaurant');
    
    $conn = mysqli_connect('localhost', 'root', '') ; //Database Connection
    $db_select = mysqli_select_db($conn, 'restaurant') ; //SElecting Database


?>