
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css.map">
</head>
<body>
<form  method="post" class="form border p-2 my-5">
                <input type="text" name="task" placeholder="update the task" class="form-control my-3 border border-success">
                </div>
                <input class="form-control btn btn-primary my-3" type="submit" name="save" value="update task" placeholder="enter the task">
            </form>  
</body>
</html>
<?php
$con= mysqli_connect("localhost","root","","php814");
$new_task=$_POST['task'];
$id=$_GET['id'];
$sql=mysqli_query($con,"UPDATE `tasks` set task = '$new_task' WHERE id = $id ");
if ($_POST['save'] == TRUE) {
    header("location:index.php");
}
