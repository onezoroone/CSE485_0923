<?php
require APP_ROOT.'/services/MusicService.php';
class MusicController{
    public function index(){
        $musicService = new MusicService();
        $Songs = $musicService->getSong();
        $theloai = $musicService->getTL();
        if(isset($_POST['save'])){
            $musicService->AddSong();
        }
        else if(isset($_POST['edit'])){
            $musicService->EditSong();
        }
        require APP_ROOT.'/views/index.php';
    }
    public function Remove(){
        $musicService = new MusicService();
        $musicService->RemoveSong();
    }
}