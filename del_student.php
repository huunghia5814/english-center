<?php
$mhv=$_GET['studentid'];
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="delete from hocvien where MaHV='".$mhv."'";
mysqli_query($conn,$sql);
header("location:studentlist.php");
exit();
?>