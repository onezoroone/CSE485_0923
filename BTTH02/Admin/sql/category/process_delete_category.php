<?php
include "../Connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM theloai where ma_tloai = $id AND SLBaiViet = 0";
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount()){
    header("Location: ../../category.php?response=success");
}else{
    header("Location: ../../category.php?response=error");
}