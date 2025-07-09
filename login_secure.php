<?php
require 'db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ✅ Secure: Prepared statements
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        echo "<h2>Welcome, " . htmlspecialchars($row['username']) . "!</h2>";
    } else {
        echo "<h2>Login failed.</h2>";
    }
    $stmt->close();
}
?>

<form method="POST">
    <h2>Secure Login</h2>
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
<a href="index.html">Back to vulnerable version</a>
