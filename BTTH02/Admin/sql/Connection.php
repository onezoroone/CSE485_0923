<?php
try {
    $conn = new PDO("mysql:host=localhost; dbname=test_demo",'root','123');
}catch (PDOException $e){
    echo $e->getMessage();
}