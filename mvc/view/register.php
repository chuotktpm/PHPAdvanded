<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Register</title>
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
                    <h3 class="panel-title">Sign Up</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="checkRegister">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="txtUsername" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="txtPassword" type="password" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="txtConfirmPassword" type="password" value="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="txtName" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="txtEmail" type="email" required>
                            </div>
                            <div>
                                <a href="../Login/enterLogin">You have a account?</a>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="btnRegister"
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