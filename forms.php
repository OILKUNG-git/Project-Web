<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งฟอร์ม โดย HTML</title>
		<link rel="stylesheet" type="text/css" href="css/style_Fuction1.css">
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
            <div class="Forms">
             <a href="forms.php" style="text-decoration:none"><h2>คำสั่ง Forms</h2></a>
			</div>
            <a href="video.php" style="text-decoration:none"><h2>คำสั่ง Video</h2></a>
            <h1>CSS</h1>
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>คำสั่งฟอร์ม HTML</h4>
			<h5>คำสั่งฟอร์ม HTML</h5>
			<div class="box_html">
			<h3>ตัวอย่างแบบฟอร์ม HTML</h3>
             <div class="box-html">
			<form action="#">
				First name:<br>
				<input type="text" name="firstname" value="Mickey">
				<br>
				Last name:<br>
				<input type="text" name="lastname" value="Mouse">
				<br><br>
				<input type="submit" value="save">
				</form> 
				</div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>องค์ประกอบ <span><</span>form></h5>
			<h6><span><</span>form> องค์ประกอบ HTML กำหนดรูปแบบที่ใช้ในการรวบรวมอินพุตของผู้ใช้:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">form</span>><br><br>
				องค์ประกอบแบบฟอร์ม <br><br>
				<span><</span><span style="color:brown;">/form</span>>
                </div>
            </div>
			<br><br>
			<h6>รูปแบบ HTML มีองค์ประกอบของแบบฟอร์ม</h6>
			<h6>องค์ประกอบของฟอร์มเป็นองค์ประกอบอินพุตที่แตกต่างกันเช่นช่องข้อความช่องทำเครื่องหมายปุ่มตัวเลือกปุ่มส่งและอื่น ๆ</h6>
			<br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>องค์ประกอบ <span><</span>input></h5>
			<h6><span><</span>input> องค์ประกอบเป็นองค์ประกอบที่สำคัญที่สุดฟอร์ม</h6>
			<h6><span><</span>input> องค์ประกอบสามารถแสดงผลในหลายวิธีขึ้นอยู่กับประเภท แอตทริบิวต์</h6>
			<br>
			<h6>ชนิดของ Input </h6>
			<h6><span><</span>input type="text"> คือ กำหนดฟิลด์ป้อนข้อความแบบบรรทัดเดียว</h6>
			<h6><span><</span>input type="radio"> คือ กำหนดปุ่มตัวเลือก (สำหรับการเลือกหนึ่งในตัวเลือกมากมาย)</h6>
			<h6><span><</span>input type="submit"> คือ กำหนดปุ่มส่ง (สำหรับการส่งแบบฟอร์ม)</h6>
			<br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ป้อนข้อความ</h5>
			<h6><span><</span>input type="text">กำหนดฟิลด์อินพุตหนึ่งบรรทัดสำหรับการ ป้อนข้อความ :</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">form</span>><br>
				&nbsp;
				First name:<br>
				&nbsp;
				<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="text"</span> <span style="color:red;">name</span><span style="color:blue;">="firstname"</span>><br>
				&nbsp;
				Last name:<br>
				&nbsp;
				<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="text"</span> <span style="color:red;">name</span><span style="color:blue;">="lastname"</span>><br>
				<span><</span><span style="color:brown;">/form</span>>
                </div>
			<div class="css-btn">
                <a href="example/example_formtext.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>อินพุตปุ่มเรดิโอ</h5>
			<h6><span><</span>input type="radio">กำหนดปุ่มตัวเลือก</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">form</span>><br>
				&nbsp;
					<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="radio"</span> <span style="color:red;">name</span><span style="color:blue;">="gender"</span>
					<span style="color:red;">value</span><span style="color:blue;">="male"</span> <span style="color:red;">checked</span>> Male
					<br>
					&nbsp;
					<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="radio"</span> <span style="color:red;">name</span><span style="color:blue;">="gender"</span>
					<span style="color:red;">value</span><span style="color:blue;">="female""</span>> Female
					<br>
					&nbsp;
					<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="radio"</span> <span style="color:red;">name</span><span style="color:blue;">="gender"</span>
					<span style="color:red;">value</span><span style="color:blue;">="other"</span>> Other
					<br>
				<span><</span><span style="color:brown;">/form</span>>
                </div>
			<div class="css-btn">
                <a href="example/example_formradio.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ปุ่มส่ง</h5>
			<h6><span><</span>input type="submit">กำหนดปุ่มสำหรับ การส่งข้อมูลแบบฟอร์มไปยังรูปแบบจัดการ</h6>
			<h6>form-handler เป็นหน้าเซิร์ฟเวอร์ที่มีสคริปต์สำหรับประมวลผลข้อมูลอินพุต</h6>
			<h6>form-handler ถูกระบุในแอ็ตทริบิวต์actionของฟอร์ม:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">form</span> <span style="color:red;">action</span><span style="color:blue;">="/action_page.php"</span>><br>
				&nbsp;
				First name:<br>
				&nbsp;
				<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="text"</span> <span style="color:red;">name</span><span style="color:blue;">="firstname"</span>
				<span style="color:red;">value</span><span style="color:blue;">="Mickey"</span>>
				<br>
				&nbsp;
				Last name:<br>
				&nbsp;
				<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="text"</span> <span style="color:red;">name</span><span style="color:blue;">="lastname"</span>
				<span style="color:red;">value</span><span style="color:blue;">="Mouse"</span>>
				<br>
				&nbsp;
				<span><</span><span style="color:brown;">input</span> <span style="color:red;">type</span><span style="color:blue;">="submit"</span> <span style="color:red;"> value</span><span style="color:blue;">="save"</span>><br>
				<span><</span><span style="color:brown;">/form</span>>
                </div>
			<div class="css-btn">
                <a href="example/example_formsubmit.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
            </div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>แอตทริบิวต์การกระทำ</h5>
			<h6>actionแอตทริบิวต์กำหนดดำเนินการที่จะดำเนินการเมื่อมีการส่งแบบฟอร์ม</h6>
			<h6>โดยปกติแล้วข้อมูลฟอร์มจะถูกส่งไปยังหน้าเว็บบนเซิร์ฟเวอร์เมื่อผู้ใช้คลิกที่ปุ่มส่ง</h6>
			<h6>ในตัวอย่างข้างต้นข้อมูลแบบฟอร์มจะถูกส่งไปยังหน้าบนเซิร์ฟเวอร์ที่เรียกว่า "/action_page.php" หน้านี้มีสคริปต์ฝั่งเซิร์ฟเวอร์ที่จัดการข้อมูลฟอร์ม:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
             <div class="box-html">
				<span><</span><span style="color:brown;">form</span> <span style="color:red;">action</span><span style="color:blue;">="/action_page.php"</span>><br>
                </div>
			</div>
			<br><br>
			<h6>หากไม่actionระบุแอททริบิวการดำเนินการจะถูกตั้งค่าเป็นหน้าปัจจุบัน</h6>
			<br>
			<center><hr size="1px" width="80%" color="white"></center>
			<br><br>
        </div>
	</body>
</html>