<?php
include_once 'Whatsapp.php';
include_once 'Instagram.php';

// Case 1: Social Media
echo "======= Case 1: Social Media =======";
echo "<br>";
$whatsapp = new WhatsApp();
$whatsapp->chat();
echo "<br>";
$whatsapp->sendPhotosAndVideos();
echo "<br>";
$whatsapp->callGroupVideo();

echo "<br>";
echo "<br>";

$instagram = new Instagram();
$instagram->chat();
echo "<br>";
$instagram->sendPhotosAndVideos();
echo "<br>";
$instagram->publishPost();