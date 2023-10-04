<?php
include "../Connection.php";
$id = $_POST['id'];
$tieude = $_POST['tieude'];
$tenbh = $_POST['tenbh'];
$matl = $_POST['matl'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$matg = $_POST['matg'];
$hinhanh = $_POST['hinhanh'];
$check = "SELECT * FROM baiviet where tieude = '$tieude' AND ma_bviet != $id";
$result = $conn->prepare($check);
$result->execute();
if($result->rowCount() > 0){
    header("Location: ../../edit_post.php?id=$id&response=error");
}else{
    $sql = "UPDATE baiviet SET tieude=:tieude, ten_bhat=:tenbh, ma_tloai=:matl, tomtat=:tomtat, noidung=:noidung, ma_tgia=:matg, hinhanh=:hinhanh where ma_bviet = $id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":tieude",$tieude);
    $stmt->bindParam(":tenbh",$tenbh);
    $stmt->bindParam(":matl",$matl);
    $stmt->bindParam(":tomtat",$tomtat);
    $stmt->bindParam(":noidung",$noidung);
    $stmt->bindParam(":matg",$matg);
    $stmt->bindParam(":hinhanh",$hinhanh);
    if($stmt->execute()){
        header("Location: ../../edit_post.php?id=$id&response=success");
    }else{
        header("Location: ../../edit_post.php?id=$id&response=error");
    }
}
$conn = null;