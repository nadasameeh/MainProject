<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج GET</title>
</head>
<body>
    <form method="get" action=" ">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="إرسال">
    </form>
</body>
</html>



<?php

// process_get.php

If (isset($_GET["name"]))
 {
    $name = htmlspecialchars($_GET["name"]); // تأمين البيانات المدخلة
    Echo "مرحبًا، " . $name;
}   
 else 
    {Echo "لم يتم تحديد الاسم.";}


?>







