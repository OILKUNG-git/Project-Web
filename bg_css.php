<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>คำสั่งพื้นหลังโดย CSS</title>
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
            <div class="bgCSS">
            <a href="bg_css.php" style="text-decoration:none"><h2>คำสั่ง พิ้นหลัง</h2></a>
            </div>
            <a href="picframe_css.php" style="text-decoration:none"><h2>คำสั่ง กรอบรูป</h2></a>
            <a href="se_css.php" style="text-decoration:none"><h2>คำสั่ง Shadow Effects</h2></a>
            <a href="border_css.php" style="text-decoration:none"><h2>คำสั่ง เส้น</h2></a>
        </div>
        <div class="main">
		<h4>พื้นหลัง CSS</h4>
		<h5>พื้นหลัง CSS</h5>
		<h6>คุณสมบัติพื้นหลัง CSS ใช้เพื่อกำหนดเอฟเฟกต์พื้นหลังสำหรับองค์ประกอบ<br>
		คุณสมบัติพื้นหลัง CSS:<br>
		&nbsp;&nbsp;&nbsp;
			๐ สีพื้นหลัง<br>
		&nbsp;&nbsp;&nbsp;
			๐ ภาพพื้นหลัง<br>
		&nbsp;&nbsp;&nbsp;
			๐ พื้นหลังซ้ำ<br>
		&nbsp;&nbsp;&nbsp;
			๐ พื้นหลังแนบ<br>
		&nbsp;&nbsp;&nbsp;
			๐ พื้นหลังตำแหน่ง<br>
		</h6><br>
		<center><hr size="1px" width="80%" color="white"></center><br>
		<h5>สีพื้นหลัง</h5>
		<h6>background-color คุณสมบัติระบุสีพื้นหลังขององค์ประกอบ</h6>
		<div class="box_html">
			<h3>ตัวอย่าง</h3>
			สีพื้นหลังของหน้าถูกตั้งค่าดังนี้:
				<div class="box-html">
					<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
					<span style="color:red;">background-color</span> : <span style="color:blue;">black</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg1.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<h6>ด้วย CSS สีมักถูกระบุโดย:<br>
			&nbsp;&nbsp;&nbsp;
			๐ ชื่อสีที่ถูกต้องเช่น "แดง"<br>
			&nbsp;&nbsp;&nbsp;
			๐ ค่า HEX - เช่น "# ff0000"<br>
			&nbsp;&nbsp;&nbsp;
			๐ ค่า RGB - เช่น "rgb (255,0,0)"<br><br>
			</h6>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ภาพพื้นหลัง</h5>
			<h6>background-image คุณสมบัติระบุภาพที่จะใช้เป็นพื้นหลังของธาตุนั้น<br>
			โดยค่าเริ่มต้นรูปภาพจะถูกทำซ้ำเพื่อให้ครอบคลุมองค์ประกอบทั้งหมด
			</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
			ภาพพื้นหลังสำหรับหน้าสามารถตั้งค่าดังนี้: 
				<div class="box-html">
					<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("sea.jpg")</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg2.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ภาพพื้นหลัง - ทำซ้ำในแนวนอนหรือแนวตั้ง</h5>
			<h6>ตามค่าเริ่มต้น background-image คุณสมบัติจะทำซ้ำรูปภาพทั้งแนวนอนและแนวตั้ง<br>
			ภาพบางภาพควรทำซ้ำในแนวนอนหรือแนวตั้งเท่านั้นหรือจะดูแปลก ๆ เช่นนี้:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("gradient_bg.png")</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg3.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<h6>หากภาพด้านบนซ้ำในแนวนอนเท่านั้น ( background-repeat: repeat-x;) พื้นหลังจะดูดีขึ้น:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
				<div class="box-html">
					<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("gradient_bg.png")</span>;<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-repeat</span> : <span style="color:blue;">repeat-x</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg4.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<h6>* <u style="color:yellow;">เคล็ดลับ : ในการทำซ้ำภาพในแนวตั้งให้ตั้งค่า</u> (background-repeat: repeat-y;) *</h6><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ภาพพื้นหลัง - ไม่ทำซ้ำ</h5>
			<h6>สถานที่ให้บริการแสดงภาพพื้นหลังเพียงครั้งเดียวเท่านั้น background-repeat:</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
			แสดงภาพพื้นหลังอันเดียว:
				<div class="box-html">
					<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("tree.png")</span>;<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-repeat</span> : <span style="color:blue;">no-repeat</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg5.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<h6>ในตัวอย่างด้านบนภาพพื้นหลังจะอยู่ในตำแหน่งเดียวกับข้อความ เราต้องการเปลี่ยนตำแหน่งของภาพเพื่อไม่ให้รบกวนข้อความมากเกินไป</h6><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ภาพพื้นหลัง - กำหนดตำแหน่ง</h5>
			<h6>background-position คุณสมบัติถูกใช้เพื่อระบุตำแหน่งของภาพพื้นหลัง</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
			วางตำแหน่งภาพพื้นหลังที่มุมขวาบน: 
				<div class="box-html">
					<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("tree.png")</span>;<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-repeat</span> : <span style="color:blue;">no-repeat</span>;<br>
					&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-position</span>: <span style="color:blue;">right top</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg6.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
			<h5>ภาพพื้นหลัง - แก้ไขหรือเลื่อน</h5>
			<h6>background-attachment ภาพพื้นหลังควรเลื่อนหรือได้รับการแก้ไข (จะไม่เลื่อนกับส่วนที่เหลือของหน้า):</h6>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
			ระบุว่าภาพพื้นหลังควรได้รับการแก้ไข:
				<div class="box-html">
						<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("tree.png")</span>;<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-repeat</span> : <span style="color:blue;">no-repeat</span>;<br>
					&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-position</span>: <span style="color:blue;">right top</span>;<br>
					&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-attachment</span>:  <span style="color:blue;">fixed</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg7.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<div class="box_html">
			<h3>ตัวอย่าง</h3>
			ระบุว่าภาพพื้นหลังควรเลื่อนพร้อมส่วนที่เหลือของหน้า:
				<div class="box-html">
						<span style="color:brown;">body</span>  {<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-image</span> : <span style="color:blue;">url("tree.png")</span>;<br>
				&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-repeat</span> : <span style="color:blue;">no-repeat</span>;<br>
					&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-position</span>: <span style="color:blue;">right top</span>;<br>
					&nbsp;&nbsp;&nbsp;
				<span style="color:red;">background-attachment</span>:  <span style="color:blue;">scroll</span>;<br>
				}
				</div>
				<div class="css-btn">
                <a href="example/example_cssbg8.html" style="text-decoration:none" target ="_blank">คลิกเพื่อดูตัวอย่าง</a>
                </div>
			</div>
			<br><br>
			<center><hr size="1px" width="80%" color="white"></center><br>
        </div>
	</body>
</html>