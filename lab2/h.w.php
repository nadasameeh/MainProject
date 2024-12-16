<?php
// إنشاء مصفوفة من الأرقام
$numbers = array(1, 2, 3, 4, 5);

// الدالة count: تعطي عدد العناصر في المصفوفة
echo count($numbers); 

// الدالة array_push: تضيف عنصراً جديداً إلى نهاية المصفوفة
array_push($numbers, 6);
print_r($numbers);
 echo"<br>"; 

// الدالة array_pop: تزيل العنصر الأخير من المصفوفة وتعيده
array_pop($numbers);
print_r($numbers); 
echo"<br>"; 

// الدالة array_shift: تزيل العنصر الأول من المصفوفة وتعيده
array_shift($numbers);
print_r($numbers);
echo"<br>"; 

// الدالة array_unshift: تضيف عنصراً جديداً إلى بداية المصفوفة
array_unshift($numbers, 0);
print_r($numbers); 
echo"<br>"; 

// الدالة sort: ترتب عناصر المصفوفة بترتيب تصاعدي
sort($numbers);
print_r($numbers); 
echo"<br>"; 

// الدالة array_merge: تدمج مصفوفتين
$moreNumbers = array(6, 7, 8);
$allNumbers = array_merge($numbers, $moreNumbers);
print_r($allNumbers);
echo"<br>"; 

// الدالة array_reverse: تعكس ترتيب عناصر المصفوفة
$reversedNumbers = array_reverse($numbers);
print_r($reversedNumbers); 
echo"<br>"; 

// الدالة in_array: تتحقق من وجود عنصر في المصفوفة
if (in_array(3, $numbers)) {
    echo "3 is in the array","<br>"; 
}

// الدالة array_slice: تقتطع جزءاً من المصفوفة
$slicedNumbers = array_slice($numbers, 1, 3);
print_r($slicedNumbers); 
echo"<br>";


echo"<hr>";
echo"<hr>";
//سلاسل النصية

//strlen تستخدم لحساب طول السلسلة النصية.
$string = "Hello, World!";
echo strlen($string),"<br>"; 


//strposتستخدم للعثور على موضع أول ظهور لجزء معين من السلسلة النصية

$string = "Hello, World!";
echo strpos($string, "World"),"<br>";


//substrتستخدم لاستخراج جزء من السلسلة النصية

$string = "Hello, World!";
echo substr($string, 7, 5),"<br>";

//str_replaceتستخدم لاستبدال جزء من السلسلة النصية بجزء آخر
$string = "Hello, World!";
echo str_replace("World", "PHP", $string),"<br>"; 

//strtolowerتستخدم لتحويل السلسلة النصية إلى حروف صغيرة.
$string = "Hello, World!";
echo strtolower($string),"<br>"; 

//strtoupperتستخدم لتحويل السلسلة النصية إلى حروف كبيرة 
$string = "Hello, World!";
echo strtoupper($string),"<br>";

//trim تستخدم لإزالة المسافات البيضاء من بداية ونهاية السلسلة النصية
$stringWithSpaces = "  Hello, World!  ";
echo trim($stringWithSpaces),"<br>"; 

//explodeتستخدم لتقسيم السلسلة النصية إلى مصفوفة بناءً على فاصل معين.
$date = "2024-12-15";
$dateArray = explode("-", $date);
print_r($dateArray);
echo"<br>"; 

//implodeتستخدم لجمع عناصر المصفوفة إلى سلسلة نصية بفاصل معين.
$dateArray = array("2024", "12", "15");
$dateString = implode("/", $dateArray);
echo $dateString,"<br>"; 


//str_repeatتستخدم لتكرار السلسلة النصية عدد معين من المرات.
echo str_repeat("PHP ", 3),"<br>";


//strcmpتستخدم لمقارنة سلسلتين نصيتين
echo strcmp("Hello", "hello"),"<br>"; 


//strrev تستخدم لعكس السلسلة النصية.
$string = "Hello, World!";
echo strrev($string),"<br>";
 
?>


