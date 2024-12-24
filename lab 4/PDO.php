<?php
$localhost = "localhost";
$dbname = "nada";
$usernameDB = "root";
$passwordDB = "";

try {
    $dsn = "mysql:host=$localhost;dbname=$dbname";
    $conn = new PDO($dsn, $usernameDB, $passwordDB);
    // تعيين وضع الخطأ في PDO إلى الاستثناءات
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    Echo "Connected successfully"; 
} catch (Exception $e) {
    Echo "Connection failed:". $e->getMessage();
}
?>
