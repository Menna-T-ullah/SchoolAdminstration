<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message']){
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
    </head>
    <body>
        <nav>
            <label class="logo">Modern School</label>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="login.php" class="btn btn-warning">Login</a></li>
            </ul>
        </nav>

        <div class="section1">
            <label class="img_text">Welcome Back To School</label>
            <img class="main_img" src="anime.png">
        </div>   
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img Class="welcome_img" src="school1.png">
                </div>
                <div class="col-md-8">
                    <h1>Welcome to Our School</h1>
                    <p> Hope you having amazing time. When you enter  this loving school consider yourself one of the special members of extraordinary family. Never forget, little minds are capable of very big things.  Today is a great day to grow, little one. On this special day, remember that while you may be small, you are so mighty. All love and support to our wonderful students.</p>
                </div>
            </div>
        </div>
        <center>
            <h1>Our Teachers</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img Class="teacher" src="teacher1.png">
                        <p>We will always have STEM with us. Some things will drop out of the public eye and go away, but there will always be science, engineering, and technology. And there will always, always be mathematics.</p>
                    </div>
                    <div class="col-md-4">
                        <img Class="teacher" src="teacher2.png">
                        <p>I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                    <div class="col-md-4">
                        <img Class="teacher" src="teacher4.png">
                        <p>I have come to believe that a great teacher is a great artist and that there are as few as there are any other great artists. Teaching might even be the greatest of the arts since the medium is the human mind and spirit.</P>
                    </div>
                </div>
            </div>
        </center>
        <center>
            <h1>Our Courses</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img Class="teacher" src="course1.png">
                        <h1>Math Course<h1>
                    </div>
                    <div class="col-md-4">
                        <img Class="teacher" src="course4.png">
                        <h1>Science Course<h1>
                    </div>
                    <div class="col-md-4">
                        <img Class="teacher" src="course3.png">
                        <h1>Art Course<h1>
                    </div>
                </div>
            </div>
        </center> 
        <center>
            <h1>Admission Form</h1>
        </center>   
        <div align="center" class="admin">
            <form class="adm_form" action="datacheck.php" method="POST">
                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="input_form"type="text" name="name">
                </div>
                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_form" type="text" name="email">
                </div>
                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_form" type="number" name="phone">
                </div>
                <div class="adm_int">
                    <label class="label_text">Message</label>
                    <textarea class="input_text" name="message"></textarea>
                </div>
                <div class="adm_int">
                    <input id="submit" class="btn btn-warning" type="Submit" name="submit">
                </div>
            </form>
            <footer>
                <p>Copyright</p>
            </footer>
        </div>     
    </body>        
</html>