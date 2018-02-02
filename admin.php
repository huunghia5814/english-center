<?php 
require "header.php";?>
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
		<font color='red' >Welcome to, admin</font>	
<?php error_reporting(0) ?>

<?php require "footer.php";?>