<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP MYSQL</title>
</head>

<body>
    <h2>CRUD PHP MYSQL</h2>
    <hr>
    <a href="create.php">Create</a> | <a href="read.php">Read</a>
    <h3>Update Product</h3>
    <?php
    // include/require connection file
    require 'db_connect.php';

    // receive data form
    // $id = $_GET['id'];
    $productId = $_GET['id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    // choose file directory location
    $query = "UPDATE product SET name = '$productName', price = '$productPrice' WHERE id = '$productId'";
    mysqli_query($db_connect, $query);
    echo "<p>Update success!</p>";

    // if (isset($_POST['create'])) {
    //     if (file_exists($path)) {
    //         echo "Sorry, file already exists.<br><br>";
    //         echo '<a href="create.php">Back</a>';
    //     } else {            
    //     }
    // }
    ?>
</body>