<?php
$mgv=$_GET['teacherid'];
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="delete from giaovien where MaGV='".$mgv."'";
mysqli_query($conn,$sql);
header("location:teacherlist.php");
exit();
?>