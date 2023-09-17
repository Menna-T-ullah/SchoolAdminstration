<?php
error_reporting(0);
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
if($_GET['teacher_id']){
$id=$_GET['teacher_id'];
$sql="SELECT * FROM teacher WHERE id='$id'";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;
    nove_uploaded_file($_FILES['image']['tmp_name'],$dst);
    $query="UPDATE teacher SET name='$name',description='$description',image='$dst_db' WHERE id='$id' ";
    $result2=mysqli_query($data,$query);
    if($result2){
        header('location:admin_view_teacher.php');
        // echo "update success";
    }
    else{
        echo "failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher Data</title>
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
        <h1>Update Teacher Data</h1>
        <br>
        <div class="div_des">
        <form action="admin_view_teacher.php" method="POST"  enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo "{$info['id']}" ?>" hidden>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo "{$info['name']}" ?>">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description"><?php echo "{$info['description']}" ?></textarea>
                </div>
                <div>
                    <label>Old Image</label>
                    <img height="100px" width="100px" src="<?php echo "{$info['image']}" ?>">
                </div>
                <div>
                    <label>Choose new Image</label>
                    <input type="file" name="image" >
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