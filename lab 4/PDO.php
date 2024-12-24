<?php
$localhost = "localhost";
$dbname = "nada";
$usernameDB = "root";
$passwordDB ="";


try {
    $dsn="mysql:host=$localhost;dbname=$dbname";
    $conn = new PDO($dsn ,$usernameDB,$passwordDB);
    // تعيين وضع الخطأ في PDO إلى الاستثناءات
    $conn->setAttribute( PDO::ATTR_ERRODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successFully"; 
} catch(Exception $e) {
    echo "Connection failed:" . $e->getMessage();
}

?>
   