<?php
require APP_ROOT.'/services/CategoryService.php';
class CategoryController{
    public function index(){
        $musicService = new CategoryService();
        $Cates = $musicService->getCate();
        require APP_ROOT.'/views/category.php';
    }
    public function Remove(){
        $musicService = new MusicService();
        $musicService->RemoveSong();
    }
}