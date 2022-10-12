<?php
 class view_student{
  public static function index($data){
  	echo "<h2>Student List</h2><hr>";
   echo "Name : ".$data['name'];
   echo "<br />";
   echo "Id : ".$data['id'];
   echo "<br />";
   echo "Address : ".$data['address'];
  }
 }
?>