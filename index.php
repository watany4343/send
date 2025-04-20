<?php
// chat.php

// استلام البيانات من ManyChat
$data = json_decode(file_get_contents("php://input"), true);

$message = $data['message'] ?? 'رسالة غير معروفة';
$phone = $data['phone'] ?? 'رقم غير معروف';

// تنسيق الرد (رد ثابت حاليًا، ممكن نغيره لاحقًا بـ GPT)
$reply = "شكرًا لتواصلك! استلمنا رسالتك: \"$message\" وسنقوم بالرد على الرقم: $phone";

// إرجاع الرد بصيغة JSON
echo json_encode([
  "reply" => $reply
]);
