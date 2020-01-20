<?php
		include('register.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css/style_re1.css">
		<link rel="stylesheet" type="text/css" href="css/style_font.css">
		<link rel="icon" type="image/png" href="pic/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php if(isset($_SESSION['msg'])){?>
			<div class="msg">
				<?php
					echo $_SESSION['msg'];
					unset ($_SESSION['msg']);
				?>
			</div>
		<?php }?>
		<?php if(isset($_SESSION['msg1'])){?>
			<div class="msg1">
				<?php
					echo $_SESSION['msg1'];
					unset ($_SESSION['msg1']);
				?>
			</div>
		<?php }?>
        <div class="lightbox1" id="fromregister">
            <div id="outer1">
                <p id="title1">
                    <a href="index.php" class="close1" title="ยกเลิก">+</a>
                </p>
            <form method="post" action="register.php">
            <div class="input-group1">
				<label>สมัครสมาชิก</label><br>
				ชื่อผู้ใช้ : <input type="text" name="User" required="" maxlength="16" placeholder="ชื่อที่จะทำแสดงบน Website" value="<?php echo $uname;?>">
				ไอดี : <input type="text" name="ID" required="" maxlength="16" placeholder="สามารถล็อคอินเว็บไซต์ด้วย ไอดีนี้" value="<?php echo $id;?>">
				<l>-สามารถใช้ได้เฉพาะตัวเลขและตัวอักษรอังกฤษ 8~16 ตัว <br><br></l>
				รหัสผ่าน : <input type="password" name="Password1" required="" maxlength="16" placeholder="รหัสผ่าน" value="<?php echo $pass;?>">
				<input type="password" name="Password2" required="" maxlength="16" placeholder="ยืนยันรหัสผ่าน" value="<?php echo $pass2;?>">
				<l> -สามารถใช้ได้เฉพาะตัวเลขและตัวอักษรอังกฤษ 8~16 ตัว <br>
				-ไม่สามารถใช้สัญลักษณ์พิเศษ<br><br>
				</l>
				อีเมล  :  <input type="text" name="Address" required="" maxlength="50" placeholder="อีเมล" value="<?php echo $email;?>">
				<button type="submit" name="save" class="btn1" title="ลงทะเบียน"><i class="fa fa-save" style="font-size : 30px;"></i></button>
            </div>
            </form>
            </div>
		</div>
		</body>
</html>