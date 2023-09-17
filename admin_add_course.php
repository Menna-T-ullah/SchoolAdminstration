<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif($_SESSION['usertype']=="student" ){
    header('location:login.php');
}
$host='localhost';
$user='root';
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['add_teacher'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'],$dst); 
    $sql="insert into teacher(name,description,image) values('$name','$description','$dst_db')";
    $result=mysqli_query($data,$sql);
    if($result){
        header('location:admin_add_teacher.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <?php
    include 'admin_css.php';
    ?>
    <style>
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_des{
            background-color:#FBEAEB;
            width: 400px;
            padding-top: 50px;
            padding-bottom: 50px;
        }
    </style>
</head>
<body>
    <?php
    include 'sidebar.php';
    ?>
    <div class="content">
        <center>
        <h1>Add Teacher</h1>
        <div class="div_des">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Name</label>
                    <input type="text" name="name">
                </div><br>
                <div>
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>
                <div>
                    <label>image</label>
                    <input type="file" name="image">
                </div><br>
                <div>
                    <input  type="submit" name="add_course" value="Add Course" class="btn btn-warning">
                </div>
            </form>
        </div>
    </center>
    </div>
</body>
</html>