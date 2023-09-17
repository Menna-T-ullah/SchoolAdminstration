<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif($_SESSION['usertype']=="admin" ){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <?php
    include 'student_css.php';
    ?>
</head>
<body>
<?php
    include 'student_sidebar.php';
    ?>
    <div class="content">
        <h1>Student Control:</h1>
        <p>VIEW Courses,VIEW Results.</p>
    </div>
</body>
</html>