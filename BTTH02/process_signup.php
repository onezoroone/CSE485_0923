<?php
include "Admin/sql/Connection.php";
    $user = $_POST['user'];
    $pass = $_POST['cpass'];
    $email = $_POST['email'];
        $updateQuery = "INSERT INTO nguoidung(username, password,email) values( :user, :pass, :email)";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: loadingactive.php?user=$user&mail=$email");
