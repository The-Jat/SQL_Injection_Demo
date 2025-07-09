<?php
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable: direct string interpolation
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
// echo "<pre>SQL Query: $sql</pre>";  // Show query for debugging

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Welcome, " . htmlspecialchars($row['username']) . "!</h2>";
} else {
    echo "<h2>Login failed.</h2>";
}
?>
