<?php
$host = 'mysql'; // MySQL service name in Kubernetes
$db = 'studentdb';
$user = 'root';  // Use 'root' if you're connecting as root user
$pass = 'password';  // Password should match MYSQL_ROOT_PASSWORD from Dockerfile

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
