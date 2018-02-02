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
						$mgv=$_GET['id'];
						$conn=mysqli_connect('localhost','root','','ttta') or die("can't connect this database");
						$sql="select * from lophoc,giaovien where lophoc.MaLop = giaovien.MaLop and giaovien.MaGV = '".	$mgv."'";
						$query=mysqli_query($conn,$sql);
						$row=mysqli_fetch_array($query);
						echo "<li> <a href='classlist_toteach.php?classlistid=$row[MaLop]'>danh sách lớp</a> </li>";
						$sql1="select * from lichsuhd_gv where lichsuhd_gv.MaGV = '".$mgv."' ";
						$query1=mysqli_query($conn,$sql1);
						$row=mysqli_fetch_array($query1);
						echo "<li> <a href='lichsuhd.php?historyid=$row[MaHDGV]'>lịch sử HD</a> </li>";
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
