<?php
$mhdgv=$_GET['contractid'];
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="delete from lichsuhd_gv where MaHDGV='".$mhdgv."'";
mysqli_query($conn,$sql);
header("location:contractlist.php");
exit();
?>