<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Customer</title>
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
                    <form role="form" method="post" action="../saveInfoCustomer/<?php if (isset($data)) echo $data["info"][0]; ?>">
                        <fieldset>
<!--                            Field ID-->
                            <div class='form-group'>
                                <input class='form-control' placeholder='ID' name='txtName' type='text'
                                       value='<?php if (isset($data)) echo $data["info"][0]; ?>'
                                       readonly autofocus>
                            </div>
<!--                            Field Name-->
                            <div class='form-group'>
                                <input class='form-control' placeholder='Name' name='txtName' type='text'
                                       value='<?php if (isset($data)) echo $data["info"][1]; ?>'
                                       autofocus>
                            </div>
<!--                            Field Email-->
                            <div class='form-group'>
                                <input class='form-control' placeholder='Email' name='txtEmail' type='text'
                                       value='<?php if (isset($data)) echo $data["info"][2]; ?>'>
                            </div>
<!--                            Field CreateDate-->
                            <div class='form-group'>
                                <input class='form-control' placeholder='Create Date' name='txtCreateDate' type='date'
                                       value='<?php if (isset($data)) echo $data["info"][3]; ?>'>
                            </div>
<!--                            Field UpdatedDate-->
                            <div class='form-group'>
                                <input class='form-control' placeholder='Update Date' name='txtUpdatedDate' type='date'
                                       value='<?php if (isset($data)) echo $data["info"][4]; ?>'>
                            </div>

<!--                            Button Save-->
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Save" name="btnEdit" >
<!--                            Button Cancel-->
                            <a href="../showList" class="btn btn-default btn-block">Cancel</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>