<?php

// Establish a database connection to MySQL Database Server
$conn= mysqli_connect("localhost","root","","ohmsphp");

// Checking whether the database connection exists
if(!$conn){
    die("Database connection error : " . mysqli_connect_error());
}

//If the database connection is valid, display a success message
print "Database Connection successful";

// Closing the database connection
mysqli_close($conn);