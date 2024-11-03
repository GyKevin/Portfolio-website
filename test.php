<?php
// Database credentials
$host = 'localhost'; // Your database host
$db = 'portfolio'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password
$charset = 'utf8mb4';

// Set up the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Prepare and execute the SQL query
    $stmt = $pdo->query('SELECT * FROM projects');

    // Fetch all results
    while ($row = $stmt->fetch()) {
        echo $row['Title'];
    }
} catch (\PDOException $e) {
    // Handle connection errors
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
