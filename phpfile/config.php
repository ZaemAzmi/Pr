<?php

$host = "localhost";
$database = "webprogramming";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $database);

if ( mysqli_connect_errno() ) {
  echo "Database connection failed";
   die( mysqli_connect_error() );
    // die() is equivalent to exit()
}

echo "Database connected successfully<br><br>";

//$connMenu = mysqli_connect('localhost', 'root','','menu_db')
?>