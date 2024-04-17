<?php
include_once "SocialMedia.php";
include_once "PostMediaManager.php";

class Instagram implements SocialMedia, PostMediaManager {
    public function chat(): void {
        echo "Chat di Instagram\n";
    }

    public function sendPhotosAndVideos(): void {
        echo "Mengirim foto dan video di Instagram\n";
    }

    public function publishPost(): void {
        echo "Publikasi posting di Instagram\n";
    }
}