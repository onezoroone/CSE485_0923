<?php
include "../Connection.php";
$id = $_POST['matg'];
$ten = $_POST['tentg'];
$hinh = $_POST['hinhtg'];
$check = "SELECT * FROM tacgia where ten_tgia = '$ten' AND ma_tgia != $id";
$result = $conn->prepare($check);
$result->execute();
if ($result->rowCount() > 0) {
    header("Location: ../../edit_author.php?id=$id&response=error");
} else {
    $sql = "UPDATE tacgia SET ten_tgia = '$ten', hinh_tgia = '$hinh' where ma_tgia = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: ../../edit_author.php?id=$id&response=success");
}
$conn = null;