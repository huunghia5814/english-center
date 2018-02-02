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
							<?php
							$mhv=$_GET['id'];
							$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
							$result = mysqli_query($conn,"select MaLop from hocvien where MaHV = '".$mhv."'");
							$rows = mysqli_fetch_row($result);
							$sql="select * from hocvien where MaLop = '".$rows[0]."'";
							$query=mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($query);
							echo "<li> <a href='studentlist_onclass.php?class_id=$row[MaLop]'>Danh sách trong lớp</a> </li>";
							$sql1="select * from ketqua where MaHV = '".$mhv."'";
							$query1=mysqli_query($conn,$sql1);
							$row1=mysqli_fetch_array($query1);
							echo "<li> <a href='show_mark.php?mark_id=$row1[MaHV]'>Xem điểm</a> </li>";
							?>							
							
							<li> <a href="index.php">Link 3</a> </li>
							<li> <a href="index.php">Link 4</a> </li>
							<li> <a href="index.php">Link 5</a> </li>
							<li> <a href="index.php">Link 6</a> </li>
							<li> <a href="index.php">Link 7</a> </li>
						</ul>						
						</div>						
				</div>				 
			</div> <!-- End of Left Side -->
		<div id="mainContent">
<div class="group-box">
	<div align="center">
	<div class="title">Thông báo</div>
	
	 <h3>Chào mừng bạn đến với Hệ thống quản lý đào tạo.</h3> 
	 
	 Các chức năng đang được cập nhật, xin vui lòng quay lại sau. 
	 <p>
	 </div>
</div>

<div class="group-box">
	<div align="center">
	<div class="title">Thông báo</div>
	
	 <h3>Chào mừng bạn đến với Hệ thống quản lý đào tạo.</h3> 
	 
	 Các chức năng đang được cập nhật, xin vui lòng quay lại sau. 
	 
	 
	 <p>
	 </div>
</div>

<div id="hello">
	<div class="group-box">
	<div align="center">
	<div class="title">Thông báo </div>
	
	 <h3>Chào mừng bạn đến với Hệ thống quản lý đào tạo.</h3> 
	 
	 Các chức năng đang được cập nhật, xin vui lòng quay lại sau. 
	 <p>
	 </div>
</div>
	
</div>
<?php require "footer.php"; ?>
