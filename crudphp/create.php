<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP MYSQL</title>
    </head>
    <body>
        <h2>CRUD PHP MYSQL</h2>
        <hr>
        <a href="create.php">Create</a> | <a href="read.php">Read</a>
        <h3>Create Product</h3>
        <form action="create_process.php" method="post" enctype="multipart/form-data">
        Product ID : <input type="text" name="productId" /><br /><br />
        Product Name : <input type="text" name="productName" /><br /><br />
        Product Price : <input type="text" name="productPrice" /><br /><br />
        Product Image: <input type="file" name="productImage" /><br><br>
        <input type="submit" value="Create" name="create" />
        </form>
    </body>
</html>