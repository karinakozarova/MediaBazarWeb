<?php
include'credentials.php';
try {
$conn = new PDO("mysql:host=$server;dbname=$db", "$user", "$pass");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;
} catch (PDOException $e) {
echo "<br /> connect file " . $e->getMessage();
}
