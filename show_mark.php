<?php 
require "header.php";?>
<?php error_reporting(0) ?>
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
		<h2 color='red' ><a href="addmark.php">Thêm điểm</a></h2>

	<table align='center' width='800' border='1'>
	<tr>
	<td width='80'>STT</td>
	<td width='80'>Mã Học viên</td>
	<td width='80'>Điểm</td>
	</tr>
	</table>
	<?php
	$mhv = $_GET['mark_id'];
	$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
	$sql="select * from ketqua where MaHV = '".$mhv."' ";
	$query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($query) == " ")
	{
	echo "<tr><td colspan='6' align='center'>Chua co username nao</td></tr>";
	}
	else
	{
	$stt=0;
	while($row=mysqli_fetch_array($query))
	{
	$stt++;
	echo "<table align='center' width='800' border='1'>";
	echo "<tr>";
	echo "<td width='80' >$stt</td>";
	echo "<td width='80' >$row[MaHV]</td>";
	echo "<td width='80' >$row[Diem]</td>";
	echo "</tr>";
	echo "</table>";
	}
	}
	
?>
<?php require "footer.php";?>