<?php
if($_POST){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = "سفارش جدید: $name, شماره: $phone";

    $apiKey = "776B6B7A764837414A386A6F61714174613249744674674B494C3866734258704870794465576B616B4A773D";
    $receiver = "09231091293";
    $url = "https://api.kavenegar.com/v1/$apiKey/sms/send.json?receptor=$receiver&message=".urlencode($message);
    $response = file_get_contents($url);
}
?>

