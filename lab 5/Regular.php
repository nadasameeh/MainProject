<?php

// التحقق من تطابق نمط معين مع نص
$pattern = "/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})$/";
$email = "example@example.com";
if (preg_match($pattern, $email)) {
    echo "البريد الإلكتروني صالح.";
} else {
    echo "البريد الإلكتروني غير صالح.";
}

// استبدال نص بناءً على نمط معين
$pattern = "/\bworld\b/";
$replacement = "PHP";
$text = "Hello world!" ;
echo preg_replace($pattern, $replacement, $text);

// تقسيم نص بناءً على نمط معين
$pattern = "/[\s,]+/" ;
$text = "Hello, world! Welcome to PHP.";
$parts = preg_split($pattern, $text);
print_r($parts);

// استخراج جميع التطابقات لنمط معين
$pattern = "/\d+/";
$text = "There are 123 apples and 456 oranges.";
preg_match_all($pattern, $text, $matches);
print_r($matches);
?>