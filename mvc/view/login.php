<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
</style>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="font-weight-bold panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="checkLogin">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="txtUsername" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="txtPassword" type="password" value="">
                            </div>
                            <div>
                                <a href="../Register/enterRegister">Sign up?</a>
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="btnLogin"
                            style="margin-top: 20px;">

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>


<!--//include("database/db_conection.php");-->
<!---->
<!--//    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";-->
<!---->
<!--//    $run=mysqli_query($dbcon,$check_user);-->
<!---->
<!--//    if(mysqli_num_rows($run))-->
<!--//    {-->
<!--//        echo "<script>window.open('welcome.php','_self')</script>";-->
<!--//-->
<!--//        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.-->
<!--//-->
<!--//    }-->
<!--//    else-->
<!--//    {-->
<!--//        echo "<script>alert('Email or password is incorrect!')</script>";-->
<!--//    }-->
<!--}-