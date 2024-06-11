<?php
session_start();

// Generate a random string for the captcha
$captcha_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 6);
$_SESSION['captcha'] = $captcha_code;

// Create the captcha image
header('Content-type: image/png');
$image = imagecreate(100, 40);
$bg_color = imagecolorallocate($image, 255, 255, 255); // white background
$text_color = imagecolorallocate($image, 0, 0, 0); // black text
imagestring($image, 5, 10, 10, $captcha_code, $text_color);
imagepng($image);
imagedestroy($image);
?>