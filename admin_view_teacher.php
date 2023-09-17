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
$sql="select * from teacher ";
$result=mysqli_query($data,$sql);
if($_GET['teacher_id']){
    $id=$_GET['teacher_id'];
    $sql2="DELETE FROM teacher WHERE id='$id' ";
    $result2=mysqli_query($data,$sql2);
    if($result2){
        header('location:admin_view_teacher.php');
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
        .table_th{
            padding:20px;
            font-size:20px;
        }
        .table_td{
            padding: 20px;
            background-color:#FBEAEB;
        }
        .glyphicon{
            color:#7A4988;
        }
    </style>
</head>
<body>
    <?php
    include 'sidebar.php';
    ?>
    <div class="content">
        <center>
        <h1>Teacher Data</h1>
        <?php
        if($_SESSION['message']){
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
        <br>
        <table border="1">
            <tr>
                <th class="table_th">Name</th>
                <th class="table_th">Description</th>
                <th class="table_th">Image</th>
                <th class="table_th">Delete</th>
                <th class="table_th">Update</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc()){
            ?>
            <tr>
                <td class="table_td"><?php echo "{$info['name']}" ?></td>
                <td class="table_td"><?php echo "{$info['description']}" ?></td>
                <td class="table_td"><img height="100px" width="100px" src="<?php echo "{$info['image']}" ?>"></td>
                <td class="table_td"><?php echo "<center><a onClick=\"javascript:return confirm ('Are you sure to delete?')\" href='admin_view_teacher.php?teacher_id={$info['id']}'><span class='glyphicon'>&#xe020;</span></a></center>" ?></td>
                <td class="table_td"><?php echo "<a  href='admin_update_teacher.php?teacher_id={$info['id']}'><button type='button' class='btn btn-default btn-sm'>
          <span class='glyphicon glyphicon-refresh'></span> Update
        </button></a>" ?></td>
            </tr>
            <?php } ?>
        </table>
        
    </center>
    </div>
</body>
</html>