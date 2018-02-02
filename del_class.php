<?php
$mhv=$_GET['classid'];
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="delete from lophoc where MaLop='".$ml."'";
mysqli_query($conn,$sql);
header("location:classlist.php");
exit();
?>