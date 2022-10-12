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
    <?php $id = $_GET['id']; ?>
    <form action="update_process.php?id=<?= $id ?>" method="post">
        Product ID : <input type="text" name="productId" value="<?= $id ?>" disabled /><br /><br />
        Product Name : <input type="text" name="productName" /><br /><br />
        Product Price : <input type=" text" name="productPrice" /><br /><br />
        <input type="submit" value="update" name="submit" />
    </form>
</body>

</html>