<?php

$dbhost='localhost';
$dbname='student1';
$dbusername='root';
$dbpass='';


$mysqli=mysqli_connect($dbhost,$dbname,$dbusername,$dbpass);


if(empty($_POST['name'])){
  $name_error = "Please Enter the Name";
}

?>