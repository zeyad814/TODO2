<?php
session_start();
$con= mysqli_connect("localhost","root","","php814");
$sql=mysqli_query($con,"SELECT * FROM tasks");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">PHP Project Todo list</h1>
        <div class="row">
            <form action="add.php" method="post" class="form border p-2 my-5">
                <input type="text" name="task" placeholder="enter the task" class="form-control my-3 border border-success">
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center">
                    <?php
                     echo $_SESSION['success'];
                     unset($_SESSION['success']);
                     ?>
                </div>
            <?php endif; ?>
                <input class="form-control btn btn-primary my-3" type="submit" name="save" value="save task" placeholder="enter the task">
            </form>
            <div class="col-12">
                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>ID</th>
                        <th>Task</th>
                        <th>actions</th>

                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($sql)) : ?>
                      <tr>
                       <?php echo "<td>".$row['id']."</td>"; ?>
                        <?php echo "<td>".$row['task']."</td>";?>
                        <td>
                        <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">delete</a>
                        <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">update</a>
                        </td>
                     </tr>            
                       <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>