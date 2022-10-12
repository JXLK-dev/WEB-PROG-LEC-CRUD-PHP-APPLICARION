<?php
 include("model_student.php");
 include("view_student.php");

 class controller_student{
  public static function index(){
   $data['name']= model_student::getName();
   $data['id']= model_student::getId();
   $data['address']= model_student::getAddress();
   view_student::index($data);
  }
 }
?>