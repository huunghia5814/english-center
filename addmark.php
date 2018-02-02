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
global $mhv , $diem;
$mhv = $diem = "";
 if(isset($_POST['adduser']))
 {
  $mhv=$_POST['level1'];
  if($_POST['diemso'] == NULL)
  {
   echo "Vui lòng nhập điểm số <br />";
  }
  else
  {
   $diem=$_POST['diemso'];
  }
 }   
  
  if($mhv && $diem)
  {
   $connection = mysqli_connect('localhost', 'root', '', 'ttta') or die("can't connect this database");
   $sql="select * from ketqua where MaHV='".$mhv."'";
   $query=mysqli_query($connection,$sql);
   if(mysqli_num_rows($query) != " " )
   {
    echo "Điểm cho học viên này đã nhập rồi<br />";
   }
   else
   {
    $sql2="insert into ketqua(MaHV,Diem) 
    values ('".$mhv."','".$diem."')";
    $query2=mysqli_query($connection,$sql2);
    echo "Đã thêm điểm thành công";
   }
  }
?>
<form method='POST'>
</select><br />
<?php
echo "</select><br />";
echo "Mã học viên: <select name='level1'>";
$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
$sql="select MaHV from hocvien";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{ 
echo "<option>$row[MaHV]</option>";
}
echo "</select><br />";
?>
Điểm số:         <input type="text" name="diemso" size='25'/><br />  
<input type='submit' name='adduser' value='Thêm kết quả' />
</form>
<?php require "footer.php";?>