<?php
include "../Connection.php";
$tieude = $_POST['tieude'];
$tenbh = $_POST['tenbh'];
$matl = $_POST['matl'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$matg = $_POST['matg'];
$hinhanh = $_POST['hinhanh'];
$check = "SELECT * FROM baiviet where tieude = '$tieude'";
$result = $conn->prepare($check);
$result->execute();
if($result->rowCount() > 0){
    header("Location: ../../add_post.php?response=error");
}else{
    $sql = "INSERT INTO baiviet(tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) values (:tieude,:tenbh, :matl,:tomtat, :noidung, :matg, :hinhanh)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tieude",$tieude);
    $stmt->bindParam(":tenbh",$tenbh);
    $stmt->bindParam(":matl",$matl);
    $stmt->bindParam(":tomtat",$tomtat);
    $stmt->bindParam(":noidung",$noidung);
    $stmt->bindParam(":matg",$matg);
    $stmt->bindParam(":hinhanh",$hinhanh);
    if($stmt->execute()){
        header("Location: ../../add_post.php?response=success");
    }else{
        header("Location: ../../add_post.php?response=error");
    }
}
$conn = null;