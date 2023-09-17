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
$id=$_GET['student_id'];
$sql="SELECT * FROM student WHERE id='$id'";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $query="UPDATE student SET username='$name',email='$email',password='$password',phone='$phone' WHERE id='$id' ";
    $result2=mysqli_query($data,$query);
    if($result2){
        header('location:view_student.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Data</title>
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
        <h1>Update Student Data</h1>
        <br>
        <div class="div_des">
        <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name" value="<?php echo "{$info['username']}" ?>">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo "{$info['email']}" ?>">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password" value="<?php echo "{$info['password']}" ?>">
                </div>
                <div>
                    <input  type="submit" name="update" value="Update" class="btn btn-warning">
                </div>
            </form>
    </div>
            </center>
    </div>
    
</body>
</html>