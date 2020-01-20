<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>การดาวน์โหลดโปรแกรม</title>
		<link rel="stylesheet" type="text/css" href="css/style_download.css">
		<link rel="stylesheet" type="text/css" href="css/style_font.css">
		<link rel="icon" type="image/png" href="pic/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	</head>
	<body>
		<div class="B-TOP">
		<a href="home.php" title="หน้าหลัก">STRIKER<span class="spancolor">.com</span></a>
		<div class="show_data">
		<table>
			<tr>
				<th>
					<div class="background_image">
					</div>
				</th>
				<th><?php if(isset($_SESSION['user'])){?>
			<div class="user">
				<?php
					echo $_SESSION['user'];
				?>
			<?php }?>
			</div>
			</th>
				<th><div class="dropdown">
				<i class="fa fa-bars" style="font-size:25px"></i>
				<div class="dropdown-content">
				<img src="pic/up.png" class="pic">
					<a href="index.php">Log out</a>
					</div>
				</div></th>
			</tr>
		</table>
		</div>
	</div>
		<nav>
			<div class="nav-btn">
			<a href="home.php"  title="หน้าแรก" class="nav-one"><i class="fa fa-home"></i></a>
			<a href="fuction.php"  title="คำสั่งพื้นฐาน" class="nav-one">คำสั่งพื้นฐาน</a>
			<a href="download.php"  title="การดาวน์โหลดโปรแกรม" style="text-decoration:none" class="nav-one">การดาวน์โหลดโปรแกรม</a>
			<a href="install.php"  title="การติดตั้งโปรแกรม" style="text-decoration:none" class="nav-one">การติดตั้งโปรแกรม</a>
			</div>
		</nav>
		<div class="main">
			<h1>โปรแกรมที่เราใช้ เขียนโค้ด HTML จะเป็น โปรแกรม Notepad ++<h1>
					<h2>สามารถดาวน์โหลดได้จาก ลิ้งที่อยู่ตรงนี้ได้เลยนะครับ  ><a href="https://notepad-plus-plus.org/download/v7.7.1.html" target ="_blank"> https://notepad-plus-plus.org/download/v7.7.1.html </a><</h2>
					<h3>ขั้นตอนการ ดาวน์โหลด</h3>
					<h4>1.เมื่อคลิกไปที่ลิ้งแล้ว จะเข้าสู่หน้าเว็บตามนี้นะครับ</h4>
						<img src="pic/notepad++.jpg" width="50%">
					<h4>2.ให้เราเลือกว่า เราจะ ดาวน์โหลด แบบ 32bit (x86) หรือ แบบ 64bit (x64) [ สี่เหลี่ยมสีเหลือง คือ 32bit สีแดง คือ 64 bit ] ในที่นี้ผมจะเลือกโหลด แบบ 64bit นะครับ</h4>
						<img src="pic/notepad++2.jpg" width="50%" height="45%">
					<h4>3.เมื่อโหลดเสร็จแล้ว จะได้ไฟล์ แบบ ติดตั้ง มานะครับ</h4>
						<img src="pic/notepad++3.jpg" width="50%" height="15%" >
					<h2> คลิกที่ตรงนี้ > <a href="install.php">เพิ่อไปยังหน้าสอนการติดตั้งโปรแกรม</a> <</h2>
		</div>
	</body>
</html>