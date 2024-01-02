<?php
include "dbh-inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["fullname"];
    $Phone_Number = $_POST["Phone_Number"];
    $EMAIL = $_POST["EMAIL"];
    $password = $_POST["password"];
    try {
        $query = "INSERT INTO signup (fullname,Phone_Number,EMAIL,password) VALUES (?,?,?,?);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":fullname	", $fullname);
        $stmt->bindParam(":Phone_Number", $Phone_Number);
        $stmt->bindParam(":EMAIL", $EMAIL);
        $stmt->bindParam(":password", $password);
        $stmt->execute([$fullname, $Phone_Number , $EMAIL, $password]);
        $pdo = null;
        $stmt = null;
        header("location:../login.php");
        die();
    } catch (PDOException $e) {
        die("Query faild123456: " . $e->getMessage());
    }
} else {
    header("location:../login.php");
}
