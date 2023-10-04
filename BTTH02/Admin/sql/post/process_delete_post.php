<?php
include "../Connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM baiviet where ma_bviet = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount()){
    header("Location: ../../post.php?response=success");
}else{
    header("Location: ../../post.php?response=error");
}