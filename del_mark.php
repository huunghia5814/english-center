<?php
$mhv=$_GET['markid'];
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="delete from ketqua where MaHV='".$mhv."'";
mysqli_query($conn,$sql);
header("location:ketqua.php");
exit();
?>