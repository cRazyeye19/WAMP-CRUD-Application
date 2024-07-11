<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fd3fb1ab44.js" crossorigin="anonymous"></script>
    <title>CRUD App</title>
</head>

<body>
    <div class="container my-5">
        <h2>CRUD Application (PHP + MySQL)</h2>
        <div class="d-flex justify-content-end">
            <a class="btn btn-success" href="/php-practice/create.php" role="button">
                <i class="fa-regular fa-square-plus"></i>
                New Item
            </a>
        </div>
        <br>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $serverName = "localhost";
                $userName = "root";
                $password = "Frozenthrone081903!!";
                $dbName = "phpcrud";

                $con = new mysqli($serverName, $userName, $password, $dbName);

                if ($con->connect_error) {
                    die(sprintf("Connection failed: %s", $con->connect_error));
                }

                $sql = "SELECT * FROM inventory";
                $result = $con->query($sql);

                if (!$result) {
                    die(sprintf("Query failed: %s", $con->error));
                }
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td scope=\"row\">$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[quantity]</td>
                        <td>\${$row['price']}</td>
                        <td>\${$row['total_price']}</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a href=\"/php-practice/edit.php?id=$row[id]\" class=\"btn btn-primary btn-sm\" role=\"button\">
                                <i class=\"fa-regular fa-pen-to-square\"></i>
                                Update
                            </a>
                            <a href=\"/php-practice/delete.php?id=$row[id]\" class=\"btn btn-danger btn-sm\" role=\"button\">
                                <i class=\"fa-regular fa-trash-can\"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>