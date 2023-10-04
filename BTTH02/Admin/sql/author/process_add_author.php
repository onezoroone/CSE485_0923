<?php
include "../Connection.php";
$ten = $_POST['tentg'];
$hinh = $_POST['hinhtg'];
$check = "SELECT * FROM tacgia where ten_tgia = '$ten'";
$result = $conn->prepare($check);
$result->execute();
if ($result->rowCount() > 0) {
    header("Location: ../../add_author.php?response=error");
} else {
    $sql = "INSERT INTO tacgia(ten_tgia, hinh_tgia) value ('$ten','$hinh')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: ../../add_author.php?response=success");
}
$conn = null;