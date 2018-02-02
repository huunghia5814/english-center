<?php require "header.php"; ?>
<div id="contentWrapper" > 

      <div id="leftSide" > 
        <div class="group-box" id="danhmuc"> 
            <div class="title">DANH MỤC</div>  
            <div class="group-box-content">
              <ul>                
                <li> <a href="khoa.php"> Khoa - Viện</a> </li>
                <li> <a href="giangvien.php">Giảng Viên</a> </li>
                <li> <a href="sinhvien.php">Sinh Viên</a> </li>
                <li> <a href="nganh.php">Ngành Đào Tạo</a> </li>
                <li> <a href="lopchuyennganh.php">Lớp Chuyên Ngành</a> </li>
                <li> <a href="lophocphan.php">Lớp Học Phần</a> </li>
                <li> <a href="monhoc.php">Môn Học</a> </li>
              </ul>           
            </div>            
        </div>
        <div class="group-box"> 
            <div class="title">Menu</div> 
            <div class="group-box-content">
            <ul>              
              <<li> <a href="teacherlist.php">Danh sách giáo viên</a> </li>
              <li> <a href="classlist.php">Danh sách lớp</a> </li>
              <li> <a href="studentlist.php">Danh sách học sinh</a> </li>
              <li> <a href="contractlist.php">lịch sử HD giáo viên</a> </li>
              <li> <a href="ketqua.php">Nhập điểm</a> </li>
              <li> <a href="uploadfile.php">Thêm giáo viên</a> </li>
              <li> <a href="addstudent.php">Thêm sinh viên</a> </li>
              <li> <a href="index.php">Link 7</a> </li>
            </ul>           
            </div>            
        </div>         
      </div> <!-- End of Left Side -->
      <div id="mainContent">
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
global $mhdgv , $mgv , $bd, $kt, $mlhd;
$mhdgv = $mgv = $bd = $kt = $mlhd = "";
 if(isset($_POST['adduser']))
 {
  if($_POST['mahdgv'] == NULL)
  {
   echo "Vui lòng nhập mã HD giáo viên<br />";
  }
  else
  {
   $mhdgv=$_POST['mahdgv'];
  }
  $mgv=$_POST['level1'];
 if($_POST['ngaybd'] == NULL)
  {
    echo "Vui lòng nhập ngày bắt đầu";
  }else{
  $bd = $_POST['ngaybd'];
  }
  if($_POST['ngaykt'] == NULL)
  {
    echo "Vui lòng nhập ngày kết thúc";
  }else{
    $kt = $_POST['ngaykt'];
  }
  $mlhd = $_POST['level2'];
 }   
  
  if($mhdgv && $mgv && $bd && $kt && $mlhd)
  {
   $connection = mysqli_connect('localhost', 'root', '', 'ttta') or die("can't connect this database");
   $sql="select * from lichsuhd_gv where MaHDGV='".$mhdgv."'";
   $query=mysqli_query($connection,$sql);
   if(mysqli_num_rows($query) != " " )
   {
    echo "hợp đồng này đã tồn tại rồi<br />";
   }
   else
   {
    $sql2="insert into lichsuhd_gv(MaHDGV,MaGV,NgayBD,NgayKT,MaLoaiHD) 
    values ('".$mhdgv."','".$mgv."','".$bd."','".$kt."','".$mlhd."')";
    $query2=mysqli_query($connection,$sql2);
    echo "Đã thêm hợp đồng mới thành công";
   }
  }
?>
<form method='POST'>
</select><br />
Mã HD giáo viên:   <input type='text' name='mahdgv' size='25' /><br />
<?php
echo "</select><br />";
echo "Mã giáo viên: <select name='level1'>";
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="select MaGV from giaovien";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{ 
echo "<option>$row[MaGV]</option>";
}
echo "</select><br />";
?>
Ngày bắt đầu:         <input type="date" name="ngaybd" size='25'/><br />  
Ngày kết thúc:        <input type="date" name="ngaykt" size='25'/><br />
<?php
echo "</select><br />";
echo "Mã loại HD: <select name='level2'>";
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="select MaLoaiDH from loaihopdong";
$query=mysqli_query($conn,$sql);
while($row1=mysqli_fetch_array($query))
{
echo "<option>$row1[MaLoaiDH]</option>";
}
echo "</select><br />";
?>  
<input type='submit' name='adduser' value='Thêm hợp đồng' />
</form>
<?php require "footer.php";?>