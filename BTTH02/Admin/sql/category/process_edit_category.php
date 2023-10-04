<?php
include "../Connection.php";
$id = $_POST['matl'];
$ten = $_POST['tentl'];
$check = "SELECT * FROM theloai where ten_tloai = '$ten' AND ma_tloai != $id";
$result = $conn->prepare($check);
$result->execute();
if ($result->rowCount() > 0) {
    header("Location: ../../edit_category.php?id=$id&response=error");
} else {
    $sql = "UPDATE theloai SET ten_tloai = '$ten' where ma_tloai = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: ../../edit_category.php?id=$id&response=success");
}
$conn = null;