<?php

// //dbhost connection

// try {
//     //host
//     $HOST = "localhost";

//     //dbname
//     $DBNAME = "exampilot";

//     //dbuser
//     $DBUSER = "root";

//     //dbpassword
//     $DBPASS = "";

//     $conn = new PDO("mysql:host=" . $HOST . "; dbname=" . $DBNAME . "", $DBUSER, $DBPASS);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {

//     echo $e->getMessage();
// }


$host = "localhost";
$username = "root";
$password = "";
$dbname = "exampilot";

//bind connection
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    // code...
    die("connection is not successful" . mysqli_connect_error());
    
}

?>