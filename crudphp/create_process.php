<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP MYSQL </title>
</head>

<body>
    <h2>CRUD PHP MYSQL</h2>
    <hr>
    <a href="create.php">Create</a> | <a href="read.php">Read</a>
    <h3>Create Product</h3>
    <?php
    // include/require connection file
    require 'db_connect.php';

    // receive data form
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImageName = $_FILES['productImage']['name'];
    $tempLoc = $_FILES['productImage']['tmp_name'];
    // choose file directory location
    $path = "img/" . $productImageName;
    // $data = mysqli_query($db_connect, "SELECT * from product WHERE id = $productId");
    // echo $data['productId'];
    if (isset($_POST['create'])) {
        if (file_exists($path)) {
            echo "Sorry, file already exists.<br><br>";
            echo '<a href="create.php">Back</a>';
        } else {
            // move file
            $uploaded = move_uploaded_file($tempLoc, $path);
            if ($uploaded) {
                // query SQL insert data
                $query = "insert into product value('" . $productId . "','" . $productName . "','" . $productPrice . "','" . $path . "')";
                mysqli_query($db_connect, $query);
                echo "<p>Upload success!</p>";
            } else {
                echo "Upload failed!";
            }
        }
    }
    ?>
</body>

</html>