<?php

$connMenu = mysqli_connect('localhost', 'root','','webprogramming');

if ( mysqli_connect_errno() ) {
  echo "Database connection failed";
   die( mysqli_connect_error() );
    // die() is equivalent to exit()
}

echo "Database connected successfully<br><br>";
?>