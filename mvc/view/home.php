<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="stylesheet" href="../public/css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>
<body>

<main role="main">

    <section class="jumbotron text-center"">
        <div class="container">
            <h1 class="jumbotron-heading" style="color: white;">NEWS</h1>
            <p class="lead" style="color: white;">Constantly updated with the latest and hottest news</p>
            <p>
<!--                <a href="#" class="btn btn-primary my-2">Main call to action</a>-->
<!--                <a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php
                if (isset($data)) {
                    while($row = mysqli_fetch_array($data["listNews"]))
                    {
                        echo "
                        <div class='col-md-4'>
                    <div class='card mb-4 box-shadow'>
                        <img class='card-img-top' data-src='holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail' alt='Thumbnail [100%x225]' style='height: 225px; width: 100%; display: block;' src='".$row["urlimage"]."' data-holder-rendered='true'>
                        <div class='card-body'>
                            <p class='card-text'>".$row["title"]."</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                    <a class='btn btn-sm btn-outline-secondary' href='http://localhost/PHPAdvanded/News/details/". $row["idnews"]."'>View</a>";
                        if ($_SESSION["Username"] == "admin")
                        {
                            echo "<a class='btn btn-sm btn-outline-secondary'>Edit</a>";
                            echo "<a class='btn btn-sm btn-outline-secondary'>Delete</a>";
                        }
                        echo        "</div>
                                <small class='text-muted'>".$row["timepost"]."</small>
                            </div>
                        </div>
                    </div>
                </div>";
                    }
                }
                ?>
<!--                <div class="col-md-4">-->
<!--                    <div class="card mb-4 box-shadow">-->
<!--                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b9a2c5400%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b9a2c5400%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">-->
<!--                        <div class="card-body">-->
<!--                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
<!--                            <div class="d-flex justify-content-between align-items-center">-->
<!--                                <div class="btn-group">-->
<!--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>-->
<!--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
<!--                                </div>-->
<!--                                <small class="text-muted">9 mins</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
<!--        <p class="float-right">-->
<!--            <a href="">Back to top</a>-->
<!--        </p>-->
        <p>© Nguyen Thai Bao's this website</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body>
</html>