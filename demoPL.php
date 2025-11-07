<?php
try {
    $connStr = getenv("SQLConnection"); // Name from Azure Connection Strings
    $conn = new PDO($connStr);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>✅ Database connection successful!</p>";
} catch (PDOException $e) {
    echo "<p>❌ Connection failed: " . $e->getMessage() . "</p>";
}
?>
