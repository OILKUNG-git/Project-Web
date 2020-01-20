<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่ง วิดีโอ โดย HTML</title>
		<link rel="stylesheet" type="text/css" href="css/style_Video.css">
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
            <a href="image.php" style="text-decoration:none"><h2>คำสั่ง Image</h2></a>
             <a href="forms.php" style="text-decoration:none"><h2>คำสั่ง Forms</h2></a>
			 <div class="Media">
           <a href="video.php" style="text-decoration:none"><h2>คำสั่ง Video</h2></a>
			</div>
            <h1>CSS</h1>
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>คำสั่งวิดีโอ HTML</h4>
			<h5>คำสั่งวิดีโอ HTML</h5>
			<h5>องค์ประกอบ <span><</span>video> HTML</h5>
			<h6>ในการแสดงวิดีโอใน HTML ให้ใช้ <span><</span>video> องค์ประกอบ:</h6>
			<div class="box_html">
			<h3>ตัวอย่างแบบการเล่นวิดีโอ แบบควบคุม</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">video</span> <span style="color:red;">width</span><span style="color:blue;">="320"</span> 
				<span style="color:red;">height</span><span style="color:blue;">="240"</span> <span style="color:red;">controls</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">source</span> <span style="color:red;">src</span><span style="color:blue;"></span><span style="color:blue;">="movie.mp4"</span> 
				<span style="color:red;">type</span><span style="color:blue;">="video/mp4"</span>>
				<br>
				<span><</span><span style="color:brown;">/video</span>>
				</div>
				<div class="css-btn">
                <a href="example/example_vediocontrol.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>HTML <span><</span>video> เล่นอัตโนมัติ</h5>
			<div class="box_html">
			<h3>ตัวอย่างแบบการเล่นวิดีโอ แบบอัตโนมัติ</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">video</span> <span style="color:red;">width</span><span style="color:blue;">="320"</span> 
				<span style="color:red;">height</span><span style="color:blue;">="240"</span> <span style="color:red;">autoplay</span>><br>
				&nbsp;
				<span><</span><span style="color:brown;">source</span> <span style="color:red;">src</span><span style="color:blue;"></span><span style="color:blue;">="movie.mp4"</span> 
				<span style="color:red;">type</span><span style="color:blue;">="video/mp4"</span>>
				<br>
				<span><</span><span style="color:brown;">/video</span>>
				</div>
				<div class="css-btn">
                <a href="example/example_vedioauto.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>