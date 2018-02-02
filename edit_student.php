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
              <li> <a href="teacherlist.php">Danh sách giáo viên</a> </li>
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
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$mhv=$_GET['studentid'];
 if(isset($_POST['changeuser']))
 {
  if($_POST['TenHV'] == NULL)
    {
      echo "Vui lòng nhập tên học viên";
    }else{
      $thv = $_POST['TenHV'];
    }
    $ml=$_POST['level'];
    if($_POST['NgaySinh'] == NULL)
    {
      echo "Vui lòng nhập ngày sinh học viên";
    }else{
      $ngs = $_POST['NgaySinh'];
    }
    if($_POST['DiaChi'] == NULL)
    {
      echo "Vui lòng nhập địa chỉ học viên";
    }else{
      $dchi = $_POST['DiaChi'];
    }
    if($_POST['DienThoai'] == NULL)
    {
      echo "Vui lòng nhập điện thoại học viên";
    }else{
      $dt = $_POST['DienThoai'];
    }
    if($_POST['QueQuan'] == NULL)
    {
      echo "Vui lòng nhập quê quán học viên";
    }else{
      $qq = $_POST['QueQuan'];
    }  
  if($_POST['password'] == NULL)
   {
    echo "Vui lòng nhập password<br />";
   }
   else
   {
    $p=$_POST['password'];
   }
   if($_POST['re-password'] == NULL)
   {
    echo "Vui long nhap re-password<br />";
   }
   else
   {
    $r=$_POST['re-password'];
   }
  if($_POST['password'] != $_POST['re-password'])
  {
   echo "Password va re-password khong chinh xac<br />";
  }
  }
  
  if($thv && $ml && $ngs && $dchi && $dt && $qq && $p && $r)
  {
  $sql="update hocvien set TenHV='".$thv."', MaLop='".$ml."', NgaySinh='".$ngs."', DiaChi='".$dchi."', DienThoai='".$dt."', QueQuan='".$qq."', Password='".$p."' where MaHV='".$mhv."'";
  mysqli_query($conn,$sql);
  header("location:studentlist.php");
  exit();
  }
 
?>
<form method='POST'>
</select><br />
Tên học viên:  <input type='text' name='TenHV' size='25' /><br />
<?php
echo "</select><br />";
echo "Mã lớp: <select name='level'>";
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="select MaLop from lophoc";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{ 
echo "<option>$row[MaLop]</option>";
}
echo "</select><br />";
?>
Ngày sinh:      <input type="date" name="NgaySinh" size='25'/><br />               
Địa chỉ:      <input type='text' name='DiaChi' size='25' /><br />
Điện thoại:     <input type='text' name='DienThoai' size='25' /><br />
Quê quán:        <input type='text' name='QueQuan' size='25' /><br />
Password:       <input type='password' name='password' size='25' /> <br />
Re-Password:    <input type='password' name='re-password' size='25' /><br />
<input type='submit' name='changeuser' value='Sửa thông tin' />
</form>
<?php require "footer.php";?>