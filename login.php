<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="login_body">
    <center>
        <div class="form_des">
            <center>
                <h1 class="title_des">Login</h1>
            </center>
            <form class="login_form" action="logincheck.php" method="POST">
                <!-- <h4 class="errorm">
                        <?php 
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        $_SESSION['loginMessage'];
                        ?>
                    </h4> -->
                <div>
                    <label class="label_des">UserName</label>
                    <input class="input_form2" type="text" name="username">
                </div>
                <div>
                    <label class="label_des">Password</label>
                    <input class="input_form2" type="password" name="password">
                </div>
                <div>
                    <input id="login_sub" class="btn btn-warning" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>