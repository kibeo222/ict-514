<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
*/

 // Database Variables (edit with your own server information)

function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
        $connection = mysqli_connect("localhost", "root","","ict 514");
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection; 
}
?>

