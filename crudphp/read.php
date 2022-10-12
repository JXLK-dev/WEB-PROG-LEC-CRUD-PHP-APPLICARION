<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP MYSQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>CRUD PHP MYSQL</h2>
    <hr>
    <a class="btn" href="create.php">Create</a> | <a class="btn" href="read.php">Read</a>
    <h3>Read Product</h3>
    <a href="create.php">Create Product</a>
    <table class="table-style">
        <thead>
            <tr bgcolor="lightgrey">
                <th>NO</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <?php
        require 'db_connect.php';
        $data = mysqli_query($db_connect, "SELECT * from product");
        $no = 1;
        while ($row = mysqli_fetch_array($data)) {
            echo "<tr><td>$no.</td>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo '<td><img src="' . $row['img'] . '" width="200px" height="200px"></td>';
            echo '<td><a class="btn" href="update.php?id=' . $row['id'] . '">Update</a> ';
            echo '<a class="btn" href="delete.php?id=' . $row['id'] . '"' . ' onclick="' . "return confirm('Delete data?');" . '"' . ">Delete</a></td></tr>";
            $no++;
        }
        ?>
    </table>

</body>

</html>