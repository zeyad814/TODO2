<?php
session_start();
$conn = mysqli_connect("localhost","root","","php814");

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['task'])){
    $task =trim(htmlspecialchars(htmlentities($_POST['task']))) ;
    $erorrs=[];
    $sql = "INSERT INTO `tasks` (`task`) VALUES ('$task')";
    $result=mysqli_query($conn,$sql);
    if (mysqli_affected_rows($conn) == 1) {
        $_SESSION['success']="data inserted successfully";
    }
    header("location:index.php");
}else{
    echo "not supported method";
}
