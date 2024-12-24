<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nada";

// إنشاء اتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
If (!$conn) {
    Die("Connection failed: " . mysqli_connect_error());
}
Echo "Connected successfully";

// إغلاق الاتصال
Mysqli_close($conn);
?>
