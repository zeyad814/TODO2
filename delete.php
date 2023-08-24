<?php 
session_start();
$conn = mysqli_connect("localhost","root","","php814");
$id=$_GET["id"];
$sql= "DELETE FROM `tasks` WHERE id =$id";
$res=$conn->query($sql);
if(mysqli_affected_rows($conn) == 1){
    $_SESSION['success']="your task has been deleted";
}
header("Location:index.php");