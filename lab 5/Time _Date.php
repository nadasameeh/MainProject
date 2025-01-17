<?php
// الحصول على التاريخ والوقت الحالي
echo date('Y-m-d H:i:s');

// إضافة 7 أيام إلى التاريخ الحالي
$date = new DateTime();
$date->modify('+7 day');
echo $date->format('Y-m-d H:i:s');

// تحويل نص تاريخ إلى كائن DateTime

$dateString = '2025-01-14 20:40:00';
$date = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
echo $date->format('Y-m-d H:i:s');

// حساب الفرق بين تاريخين
$date1 = new DateTime('2025-01-14');
$date2 = new DateTime('2025-01-21');
$interval = $date1->diff($date2);
echo $interval->format('%R%a days');
?>