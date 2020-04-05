<?php
Include'credentials.php';
$login = 0;
try {
$conn = new PDO("mysql:host=$server;dbname=$db", "$user", "$pass");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_COOKIE["logedin"])) {
  $login = 1;
}else{
  $login = 0;
}
return $conn;
} catch (PDOException $e) {
echo "<br /> connect file " . $e->getMessage();
}