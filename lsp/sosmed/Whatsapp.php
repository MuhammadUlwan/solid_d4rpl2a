<?php
include_once "SocialMedia.php";
include_once "VideoGroupManager.php";

class WhatsApp implements SocialMedia, VideoGroupManager {
    public function chat(): void {
        echo "Chat di WhatsApp\n";
    }

    public function sendPhotosAndVideos(): void {
        echo "Mengirim foto dan video di WhatsApp\n";
    }

    public function callGroupVideo(): void {
        echo "Telfon dan Video Grup di WhatsApp\n";
    }
}