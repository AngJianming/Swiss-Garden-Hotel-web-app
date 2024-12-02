<?php
/**
 * Database Configuration
 * 
 * This script establishes a connection to the MySQL database using MySQLi.
 * Ensure that this file is stored securely and not accessible publicly.
 */

// **1. Define Database Credentials**
define('DB_HOST', 'localhost');     // Hostname (usually 'localhost' for XAMPP)
define('DB_USER', 'root');          // MySQL username (default for XAMPP is 'root')
define('DB_PASS', '');              // MySQL password (default for XAMPP is empty)
define('DB_NAME', 'hotel');         // Database name

// **2. Create a Connection**
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// **3. Check the Connection**
if ($mysqli->connect_error) {
    // Log the error message to a file for debugging (optional)
    error_log("Connection failed: " . $mysqli->connect_error);
    
    // Display a user-friendly message
    die("Sorry, we're experiencing technical difficulties. Please try again later.");
}

// **4. Set the Character Set to UTF-8**
if (!$mysqli->set_charset("utf8mb4")) {
    error_log("Error loading character set utf8mb4: " . $mysqli->error);
    // You might choose to handle this error differently
}

// **5. Optional: Define a Function to Close the Connection**
function close_db_connection($mysqli) {
    $mysqli->close();
}

// **6. Example Query (Optional)**
/*
$sql = "SELECT * FROM rooms";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        // Process each row
        echo "Room ID: " . htmlspecialchars($row['id']) . "<br>";
    }
    $result->free();
} else {
    error_log("Query Error: " . $mysqli->error);
    echo "An error occurred while fetching data.";
}

<?php
try {
    $dsn = 'mysql:host=localhost;dbname=hotel;charset=utf8mb4';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
    die("Sorry, we're experiencing technical difficulties. Please try again later.");
}
?>

*/

// **7. Close the Connection When Done**
// close_db_connection($mysqli);
?>
