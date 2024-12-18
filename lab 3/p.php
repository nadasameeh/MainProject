 <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج POST</title>
</head>
<body>
    <form method="post" action=" ">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="إرسال">
    </form>
</body>
</html>

<?php
// process_post.php

If (isset($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"]); // تأمين البيانات المدخلة
    Echo "مرحبًا، " . $name;
}
 else {
    Echo "لم يتم تحديد الاسم.";
}
?>
