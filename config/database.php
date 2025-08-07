<?php

$HOST = "localhost";
$DBNAME = "exampilot";
$DBUSER = "root";
$DBPASS = ""; // No password

try {
    $conn = new PDO("mysql:host=" . $HOST . ";dbname=" . $DBNAME, $DBUSER, $DBPASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Now you can use $conn for your PDO operations
// Example:
// $stmt = $conn->prepare("SELECT * FROM your_table");
// $stmt->execute();
// $results = $stmt->fetchAll();
// ...

// PDO connection closes automatically when the script ends
// To close explicitly:
// $conn = null;

?>