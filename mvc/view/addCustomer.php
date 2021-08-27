<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Add Customer</title>
</head>

<style>
    .add-panel {
        margin-top: 150px;
</style>

<body>

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-success add-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add Customer</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="addCustomer">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="txtName" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="txtEmail" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Create Date" name="txtCreateDate" type="date" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Update Date" name="txtUpdatedDate" type="date" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD" name="btnAdd" >
                            <a href="./showList" class="btn btn-default btn-block">Cancel</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>