<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/libs/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/libs/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/libs/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/libs/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
    
    include 'connect.php';
    if(isset($_SESSION['login'])){
        header("Location: index.php");
    }
    if(isset($_POST['submit'])){
       $username   = $_POST['username'];
       $password   = md5($_POST['password']);
       $sqlLogin   = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
       $resultLogin = $conn_php09_basic->query($sqlLogin);
       if ($resultLogin->num_rows > 0) {
            $_SESSION['login'] = $username;
            $_SESSION['role'] = $role;
            header("Location: index.php");
       }else{
            echo "Username/Password is not matching";
       }
    }

?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Login" class="btn btn-lg btn-success btn-block" name = "submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>


</body>

</html>
