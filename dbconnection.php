<?php

// Establish a database connection to MySQL Database Server
$conn= mysqli_connect("localhost","root","","ohmsphp");

// Checking whether the database connection exists
if(!$conn){
    die("Database connection error : " . mysqli_connect_error());
}