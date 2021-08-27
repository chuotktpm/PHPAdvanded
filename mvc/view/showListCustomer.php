<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Show List Customer</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h2>Danh sách khách hàng</h2>
        </div>
    <a href="./newCustomer" class="btn btn-lg btn-success">Add Customer</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Create Date</th>
            <th>Updated Date</th>
        </tr>
        </thead>
        <tbody>
    <?php
        if (isset($data)) {
            while($row = mysqli_fetch_array($data["ListCustomer"]))
            {
                echo "<tr><td>" .$row["id"] ."</td>"
                . "<td>". $row["name"] ."</td>"
                . "<td>". $row["email"] ."</td>"
                . "<td>". $row["create_date"] ."</td>"
                . "<td>". $row["updated_date"] ."</td>"
                . "<td><a href='editCustomer/" .$row["id"] ."'>Edit</a> | <a href='#'>Delete</a></td></tr>";
            }
        }
    ?>
        </tbody>
    </table>
    </div>

    <br>
    <div class="text-center">
        <h3><a href="../">Log Out</a></h3>
    </div>
    
</body>
</html>