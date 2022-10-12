<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP MYSQL</title>
    </head>
    <body>
        <h2>CRUD PHP MYSQL</h2>
        <hr>
        <a href="create.php">Create</a> | <a href="read.php">Read</a>
        <h3>Delete Product</h3>
<?php
require 'db_connect.php';
// get form data
$id = $_GET['id'];

// query SQL delete file
$query1 = "select img from product";
$select = mysqli_query($db_connect,$query1);
$row = mysqli_fetch_array($select);
$deleteFile = $row['img'];
unlink($deleteFile);

// query SQL delete file
$query2 = "delete from product where id='$id'";
$delete = mysqli_query($db_connect, $query2);

if ($delete){
	echo "Delete success!";
	}else
		{ echo "Delete failed!"; }
?>
    </body>
</html>