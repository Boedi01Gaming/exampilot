<?php
require "database.php";
// --- Your Query Snippet (Rewritten for PDO) ---

try {
    // Prepare a SELECT query
    $sql = "SELECT * FROM home_page LIMIT 1"; // Example: fetch one row from home_page
    $stmt = $conn->prepare($sql);

    // Execute the query
    $stmt->execute();

    // Fetch the data as an associative array
    $home_page_data = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if data was found
    if ($home_page_data) {
        // Now you can access the data using column names
        $banner_image = $home_page_data['banner_image'];
        $slide_title = $home_page_data['slide_title'];
        // ... access other columns

        // You can then use this data to populate your HTML
        echo "<h1>" . $slide_title . "</h1>";
        echo "<img src='" . $banner_image . "' alt='Banner Image'>";
        // ... display other data
    } else {
        echo "No data found in home_page table.";
    }

} catch(PDOException $e) {
    echo "Error fetching data: " . $e->getMessage();
}


// PDO connection closes automatically when the script ends
// To close explicitly:
// $conn = null;

?>
