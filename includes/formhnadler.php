<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $fullname=$_POST["fullname"];
    $phonenum=$_post["phonenum"]
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    try {
        require_once "dbh.inc.php";
        $query="INSERT INTO users (fullname,phonenum,email,pwd) VALUES (:fullname,:phonenum,:email,:pwd);";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":fullname",$fullname);
        $stmt->bindParam(":fullname",$phonenum);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pwd",$pwd);
        $stmt->execute();
        $pdo=null;
        $stmt=null;
        header("location:../login.php");
        die();
    } catch (PDOException $e) {
        die("Query faild: ".$e->getMessage());
    }
}else{
    header("location:../login.php");
}