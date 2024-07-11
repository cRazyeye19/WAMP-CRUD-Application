<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $serverName = "localhost";
    $userName = "root";
    $password = "Frozenthrone081903!!";
    $dbName = "phpcrud";

    $con = new mysqli($serverName, $userName, $password, $dbName);

    $sql = "DELETE FROM inventory WHERE id=$id";

    $result = $con->query($sql);

    if (!$result) {
        die(sprintf("Query failed: %s", $con->error));
    }
}

header("Location: /php-practice/index.php");
exit;