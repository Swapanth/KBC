<?php
include 'connect.php';

$id=$_GET['id'];

$sql="UPDATE users SET button2=1 WHERE pid=$id";
mysqli_query($conn,$sql);





?>
