<?php
require APP_ROOT.'/models/Music.php';
class MusicService{
    public function getSong(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $sql = "SELECT * FROM baihat";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch()){
            $song = new Music($row['id'], $row['tenBaiHat'], $row['caSi'], $row['idtheloai']);
            $data[] = $song;
        }
        return $data;
    }
    public function getTL(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $sql = "SELECT * FROM theloai";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }
    public function AddSong(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $tenbh = $_POST['tenbh'];
        $casi = $_POST['casi'];
        $idtl = $_POST['idtheloai'];
        $check = "SELECT * FROM baihat where tenBaiHat = '$tenbh'";
        $result = $conn->query($check);
        if($result->rowCount() > 0){
            header("Location: .?c=music&a=index&d=error");
        }else{
            $sql = "INSERT INTO baihat(tenBaiHat, caSi, idtheloai) values (:ten, :casi, :idtl)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":ten", $tenbh);
            $stmt->bindParam(":casi",$casi);
            $stmt->bindParam(":idtl",$idtl);
            $stmt->execute();
            header("Location: .?c=music&a=index&d=success");
        }
    }
    public function RemoveSong(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $id = $_GET['id'];
        $check = "DELETE FROM baihat where id = $id";
        $result = $conn->query($check);
        header("Location: .?c=music&a=index");
    }
    public function EditSong(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $id = $_POST['id'];
        $tenbh = $_POST['tenbh'];
        $casi = $_POST['casi'];
        $idtl = $_POST['idtheloai'];
        $check = "SELECT * FROM baihat where tenBaiHat = '$tenbh'";
        $result = $conn->query($check);
        if($result->rowCount() > 0){
            header("Location: .?c=music&a=index&b=error");
        }else{
            $sql = "UPDATE baihat SET tenBaiHat=:ten, caSi=:casi, idtheloai=:idtl where id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":ten", $tenbh);
            $stmt->bindParam(":casi",$casi);
            $stmt->bindParam(":idtl",$idtl);
            $stmt->execute();
            header("Location: .?c=music&a=index&b=success");
        }
    }
}