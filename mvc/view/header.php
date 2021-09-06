<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/header.css">
</head>

<body>
    <ul>
        <li><a class="active" href='http://localhost/PHPAdvanded/Home/page'>Home</a></li>
<!--        <li><a href="">News</a></li>-->
        <?php
        if ($_SESSION["Username"] == "admin")
        {
            echo "<li><a href='http://localhost/PHPAdvanded/Customer/showList'>Customer</a></li>";
            echo "<li><a href='http://localhost/PHPAdvanded/News/newPost'>New Post</a></li>";
        }
        ?>

<!--        <li><a href="">About</a></li>-->
        <?php
            if ($_SESSION["Username"])
            {
                echo "<li style='float:right'><a href='http://localhost/PHPAdvanded/Login/logout'>Logout</a></li>";
                echo "<li style='float:right'><a href='' class='active'>"  .$_SESSION["Username"] ."</a></li>";

            }
            else
            {
                echo "
                    <li style='float:right'><a href='http://localhost/PHPAdvanded/Login/enterLogin' class='active'>Login</a></li>
                    <li style='float:right'><a href='http://localhost/PHPAdvanded/Register/enterRegister'>Register</a></li>
                ";
            }
        ?>
    </ul>
</body>
</html>
