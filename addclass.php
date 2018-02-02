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
global $ml , $tl , $mll, $mc, $mp, $bd, $kt;
$ml = $tl = $mll = $mc = $mp = $bd = $kt = "";
 if(isset($_POST['adduser']))
 {
  if($_POST['malop'] == NULL)
  {
   echo "Vui lòng nhập mã lớp<br />";
  }
  else
  {
   $ml=$_POST['malop'];
  }
  if($_POST['tenlop'] == NULL)
    {
      echo "Vui lòng nhập tên lớp";
    }else{
      $tl = $_POST['tenlop'];
    }
  if($_POST['maloailop'] == NULL)
    {
      echo "Vui lòng nhập mã loại lớp";
    }else{
      $mll = $_POST['maloailop'];
    }
    if($_POST['macahoc'] == NULL)
    {
      echo "Vui lòng nhập mã ca học";
    }else{
      $mc = $_POST['macahoc'];
    }
    if($_POST['maphong'] == NULL)
    {
      echo "Vui lòng nhập mã phòng";
    }else{
      $mp = $_POST['maphong'];
    }
    if($_POST['ngaybd'] == NULL)
    {
      echo "Vui lòng nhập ngày bắt đầu";
    }else{
    $bd = $_POST['ngaybd'];
    }
    if($_POST['ngaykt'] == NULL)
    {
      echo "Vui lòng nhập địa ngày kết thúc";
    }else{
      $kt = $_POST['ngaykt'];
    }
 }   
  
  if($ml && $tl && $mll && $mc && $mp && $bd && $kt)
  {
   $connection = mysqli_connect('localhost', 'root', '', 'ttta') or die("can't connect this database");
   $sql="select * from lophoc where MaLop='".$ml."'";
   $query=mysqli_query($connection,$sql);
   if(mysqli_num_rows($query) != " " )
   {
    echo "Lớp học này đã tồn tại rồi<br />";
   }
   else
   {
    $sql2="insert into lophoc(MaLop, TenLop, MaLoaiLop, MaCaHoc, MaPhong, NgayBD, NgayKT) 
    values ('".$ml."','".$tl."','".$mll."','".$mc."','".$mp."','".$bd."','".$kt."')";
    $query2=mysqli_query($connection,$sql2);
    echo "Đã thêm lớp mới thành công";
   }
  }
 
?>
<form method='POST'>
</select><br />
Mã lớp:   <input type='text' name='malop' size='25' /><br />
Tên lớp:   <input type='text' name='tenlop' size='25' /><br />
Mã loại lớp:  <input type='text' name='maloailop' size='25' /><br />
Mã ca học:      <input type='text' name='macahoc' size='25' /><br />             
Mã Phòng:      <input type='text' name='maphong' size='25' /><br />
Ngày bắt đầu:          <input type="date" name="ngaybd" size='25'/><br />  
Ngày kết thúc:        <input type="date" name="ngaykt" size='25'/><br />  
<input type='submit' name='adduser' value='Thêm lớp' />
</form>
<?php require "footer.php";?>