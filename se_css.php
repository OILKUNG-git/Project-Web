<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งรูปภาพ โดย HTML</title>
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
             <a href="forms.php" style="text-decoration:none"><h2>คำสั่ง Forms</h2></a>
            <a href="video.php" style="text-decoration:none"><h2>คำสั่ง Video</h2></a>
            <h1>CSS</h1>
            <a href="css.php" style="text-decoration:none"><h2>คำสั่ง เรียกใช้ CSS</h2></a>
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
			<div class="seCSS">
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
			</div>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>CSS Shadow Effects</h4>
			<h5>CSS Shadow Effects</h5>
			<h6>ด้วย CSS คุณสามารถเพิ่มเงาให้กับข้อความและองค์ประกอบ<br>
			ในบทนี้คุณจะได้เรียนรู้เกี่ยวกับคุณสมบัติต่อไปนี้:<br>
			&nbsp;&nbsp;&nbsp;
			๐ text-shadow<br>
			&nbsp;&nbsp;&nbsp;
			๐ box-shadow
			</h6><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>CSS Text Shadow</h5>
			<h6>text-shadowคุณสมบัติCSS ใช้เงากับข้อความ<br>
			ในการใช้งานที่ง่ายที่สุดคุณจะระบุเฉพาะเงาแนวนอน (2px) และเงาแนวตั้ง (2px):</h6>
			<p style="font-size:40px;text-shadow: 2px 2px;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1</span> {<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;">2px 2px</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>ถัดไปเพิ่มสีให้กับเงา:</h6>
			<p style="font-size:40px;text-shadow: 2px 2px red;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1 </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;">2px 2px red</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>จากนั้นเพิ่มเอฟเฟกต์เบลอบนเงา:</h6>
			<p style="font-size:40px;text-shadow: 2px 2px 5px red;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1 </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;">2px 2px 5x red</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>ข้อความสีขาวที่มีเงาดำ:</h6>
			<p style="font-size:40px;color:white;text-shadow: 2px 2px 4px #000000;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1 </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;"> 2px 2px 4px #000000</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>แสดงเงานีออนสีแดง:</h6>
			<p style="font-size:40px;text-shadow: 2px 2px 5px red;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1 </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;">0px 0px 3x red</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h5>หลายเงา</h5>
			<h6>ในการเพิ่มเงามากกว่าหนึ่งข้อความคุณสามารถเพิ่มรายการเงาที่คั่นด้วยเครื่องหมายจุลภาคหรือลูกน้ำ</h6>
			<h6>เงานีออนสีแดงและสีน้ำเงิน:</h6>
			<p style="font-size:40px;text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1 </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;"> 0 0 3px #FF0000, 0 0 5px #0000FF</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>ข้อความสีขาวที่มีเงาดำน้ำเงินและน้ำเงินเข้ม:</h6>
			<p style="font-size:40px;color:white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">เอฟเฟคต์เงาข้อความเงา!</p>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">h1 </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">text-shadow</span>: <span style="color:blue;">1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue</span>;<br>
					}
				</div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>CSS คุณสมบัติเงาของกล่อง</h5>
			<h6>box-shadow คุณสมบัติCSS ใช้เงากับองค์ประกอบ<br>
			ในการใช้งานที่ง่ายที่สุดคุณจะระบุเฉพาะเงาแนวนอนและเงาแนวตั้ง:</h6><br>
			<p style="background-color:yellow;box-shadow: 10px 10px;width:20%;height:70px;margin-left:38%;">นี่คือองค์ประกอบ  <span><</span>div> สีเหลืองที่มีเงากล่องดำ</p><br>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">div </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">box-shadow</span>: <span style="color:blue;">10px 10px<span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>ถัดไปเพิ่มสีให้กับเงา:</h6><br>
			<p style="background-color:yellow;box-shadow: 10px 10px grey;width:20%;height:70px;margin-left:38%;">นี่คือองค์ประกอบ  <span><</span>div> สีเหลืองที่มีเงากล่องสีเทา</p><br>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">div </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">box-shadow</span>: <span style="color:blue;">10px 10px gray<span>;<br>
					}
				</div>
			</div>
			<br><br>
			<h6>ถัดไปเพิ่มเอฟเฟกต์เบลอบนเงา:</h6><br>
			<p style="background-color:yellow;box-shadow: 10px 10px 5px grey;width:20%;height:70px;margin-left:38%;">นี่คือองค์ประกอบ  <span><</span>div> สีเหลืองที่มีเงากล่องสีเทา</p><br>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">div </span>{<br>
					&nbsp;&nbsp;
					<span style="color:red;">box-shadow</span>: <span style="color:blue;">10px 10px 5px gray<span>;<br>
					}
				</div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>