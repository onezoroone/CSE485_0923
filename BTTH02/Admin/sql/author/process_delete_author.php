<?php
include "../Connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tacgia where ma_tgia = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount()){
    header("Location: ../../author.php?response=success");
}else{
    header("Location: ../../author.php?response=error");
}