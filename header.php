<?php session_start();?>
<!doctype html>
<html>
<head>
	
	<?php require_once("config.php");?>
		
	<?php 
		if (!isset($_SESSION["loggedin"])){
			auto_login();
		}
	
	?>
	
	<title><?php echo $page_title; ?></title>
	<meta charset="utf-8"> 
	<meta name="keywords" content="<?php echo $page_keywords; ?>" />
	<meta name="description" content="<?php echo $page_description; ?>" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.js"></script>
	<link rel="stylesheet" 	href="css/ui-lightness/jquery-ui-1.10.2.custom.css" />
<!-- 	<link rel="stylesheet" 	href="css/jmetro/jquery-ui-1.10.2.custom.css" /> -->
    
</head>
<body>
	<div id="pageWrapper">
		<div id="header">
			<a href="index.php">
			<img id="logo" src="<?php echo IMAGES_DIR;?>/yourfur.png" alt="Khoa Khoa Học Tự Nhiên" />
			</a>
			<h1 id="siteTitle"> Trung tâm anh ngữ YourFur </h1>
			<img id="logo2" src="<?php echo IMAGES_DIR;?>/logo2.png" />		
		</div> <!-- End of header -->
		
		<div id="nav"> 
		<div  id="menu" > 
			<a href="index.php">Trang chủ</a> |  
			<a href="video.php">Video</a>	|
			<a href="gioithieu.php">Giới thiệu</a>|
			<a href="tailieu.php">Tài liệu</a>	|		 
		</div>		 
		<div  id="login" > 
			<?php 
				// lấy cookie đăng nhập tự động
				 
				if (isset($_SESSION["loggedin"])){
					echo "Xin chào ". $_SESSION["HoTen"];
					echo " | <a href='login.php?logut' id='aLogout'>Thoát</a>";	
				}else {
					
					echo "<a href='login.php'>Đăng nhập</a>";
				}
			?>
		</div>
		</div> <!-- End of Navigation menu --> 
		
	
				
