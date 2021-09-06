<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Create Post</title>
</head>

<style>
    .add-panel {
        margin-top: 50px;
</style>

<body>

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-success add-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Post News</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Title" name="txtTitle" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Url Thumbnail" name="txtUrlImage" type="text" value="">
                            </div>
                            <label for="select1">Type of news:</label>
                            <select class="form-control" id="select1" name="selectType">
                                <option>Pháp luật</option>
                                <option>Thể thao</option>
                            </select>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Content" name="txtContent" type="text" value=""></textarea>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="POST" name="btnPost" >
                            <a href="../Home" class="btn btn-default btn-block">Cancel</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>