<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งรูปภาพ โดย HTML</title>
		<link rel="stylesheet" type="text/css" href="css/style_Imag.css">
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
		<div class="side">
            <h1>HTML</h1>
            <a href="fuction.php" style="text-decoration:none"><h2>คำสั่ง Basic</h2></a>
            <div class="image">
            <a href="image.php" style="text-decoration:none"><h2>คำสั่ง Image</h2></a>
            </div>
             <a href="forms.php" style="text-decoration:none"><h2>คำสั่ง Forms</h2></a>
            <a href="video.php" style="text-decoration:none"><h2>คำสั่ง Video</h2></a>
            <h1>CSS</h1>
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>คำสั่งรูปภาพ HTML</h4>
			<h5>คำสั่งรูปภาพ HTML</h5>
			<h6>ใน HTML รูปภาพจะถูกกำหนดด้วย <span><</span>img></h6>
			<h6><span><</span>img> แท็กเป็นที่ว่างเปล่ามันมีคุณลักษณะเฉพาะและไม่ได้มีแท็กปิด</h6>
			<h6>src=ระบุURL ("ที่อยู่เว็บ") ของภาพ</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">img</span> <span style="color:red;">src</span><span style="color:blue;">="sea.jpg"</span> <span style="color:red;">alt</span><span style="color:blue;">="sea"</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_img.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h6>alt เป็นคำสั่งที่จะแสดงข้อความสำหรับรูปภาพ หากผู้ใช้ไม่สามารถดูรูปภาพได้</h6>
			<h6>หากเบราว์เซอร์ไม่พบภาพก็จะแสดงค่าของ alt</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">img</span> <span style="color:red;">src</span><span style="color:blue;">="se.jpg"</span> <span style="color:red;">alt</span><span style="color:blue;">="sea"</span>>
                </div>
                <div class="css-btn">
                <a href="example/example_Noimg.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>