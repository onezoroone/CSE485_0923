<?php
include "../Connection.php";
$ten = $_POST['tentl'];
$check = "SELECT * FROM theloai where ten_tloai = '$ten'";
$result = $conn->prepare($check);
$result->execute();
if($result->rowCount() > 0){
    header("Location: ../../add_category.php?response=error");
}else{
    $sql = "INSERT INTO theloai(ten_tloai) value ('$ten')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: ../../add_category.php?response=success");
}
$conn = null;