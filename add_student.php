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
if(isset($_POST['add_student'])){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $usertype="student";
    $check="select * from student WHERE username='$username' ";
    $check_user=mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);
    if(!empty($username)){
    if($row_count == 1){
        echo "<script type='text/javascript'>
    alert('Username already exist.');
     </script>";
    }
    else{
    $sql="insert into student(username,email,password,phone,usertype) values('$username','$email','$password','$phone','$usertype')";
$result=mysqli_query($data,$sql);
if($result){
    echo "<script type='text/javascript'>
    alert('Data uploaded successfully');
     </script>";
}
else{ 
    echo "<script type='text/javascript'>
    alert('Upload Failed');
     </script>";}
}
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
        <h1>Add Students</h1>
        <div class="div_des">
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input  type="submit" name="add_student" value="Add Student" class="btn btn-warning">
                </div>
            </form>
        </div>
    </center>
    </div>
</body>
</html>