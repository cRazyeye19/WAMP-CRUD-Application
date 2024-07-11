<?php

$serverName = "localhost";
$userName = "root";
$password = "Frozenthrone081903!!";
$dbName = "phpcrud";

$con = new mysqli($serverName, $userName, $password, $dbName);

$name = "";
$quantity = "";
$price = "";
$total_price = "";
$errorMessage = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total_price = $_POST['total_price'];

    do {
        if (empty($name) || empty($quantity) || empty($price) || empty($total_price)) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "INSERT INTO inventory (name, quantity, price, total_price)"
            . " VALUES ('$name', '$quantity', '$price', '$total_price')";
        $result = $con->query($sql);
        if (!$result) {
            $errorMessage = "Invalid query: " . $con->error;
            break;
        }

        $name = "";
        $quantity = "";
        $price = "";
        $total_price = "";

        $success = "Client added successfully!";

        header("location: /php-practice/index.php");
        exit;
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Inventory</title>
</head>

<body>
    <div class="container my-5">
        <h2>Add New Item</h2>

        <?php
        if(!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-6">
                    <input type="text" name="quantity" class="form-control" value="<?php echo $quantity; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="total_price" class="col-sm-3 col-form-label">Total Price</label>
                <div class="col-sm-6">
                    <input type="text" name="total_price" class="form-control" value="<?php echo $total_price; ?>">
                </div>
            </div>

            <?php
            if(!empty($success)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$success</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="/php-practice/index.php" class="btn btn-sm btn-outline-danger" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>