<?php
	session_start();
	$db=mysqli_connect("localhost","std6231280008","6231280008","std6231280008") or die ("NOT");
	mysqli_query($db,"SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
	//register
	if(isset($_POST['save'])){
			$uname = $_POST['User'];
			$id = $_POST['ID'];
			$pass = $_POST['Password1'];
			$pass2 = $_POST['Password2'];
			$email = $_POST['Address'];
			if(strlen($id)<8){
				$_SESSION['msg1']="ID ไม่ถึง 8 ตัวอักษร ";
				header('location:index_register.php');
			}
			else if(strlen($pass)<8){
				$_SESSION['msg1']="Password ไม่ถึง 8 ตัวอักษร ";
				header('location:index_register.php');
			}
			else{
				$check="select * from member WHERE id='$id'";
			$result_check = mysqli_query($db,$check);
			$dbregis=mysqli_fetch_array($result_check);
				if($id == $dbregis[2]){
				$_SESSION['msg1']="มี ID อยู่ในระบบแล้ว กรุณาใส่ ID ใหม่";
				header('location:index_register.php');
				}
				else if($pass != $pass2){
				$_SESSION['msg1']="รหัสผ่านไม่ตรงกัน กรุณาใส่รหัสผ่านใหม่";
				header('location:index_register.php');
					}
			else{
				$register = "INSERT INTO member(username,id,pwd,em) VALUES('$uname','$id','$pass','$email')";
				if(mysqli_query($db,$register)){
				$_SESSION['msg']="สมัครสมาชิกสำเร็จ";
				header('location:index_register.php');
					}
				else{
				$_SESSION['msg1']="สมัครสมาชิกไม่สำเร็จ";
				header('location:index_register.php');
					}
				}
			}
	}
	//login
	if(isset($_POST['login'])){
			$loginuser = $_POST['loginUser'];
			$loginpass = $_POST['loginPass'];
			$login = "select * from member where id='$loginuser' AND pwd='$loginpass'";
			$result_login = mysqli_query($db,$login);
			$dbarr=mysqli_fetch_array($result_login);
			$total = mysqli_num_rows($result_login);
			if($total==1){
				$_SESSION['user']=$dbarr[1];
				header('location:home.php');
			}
			else{
				$_SESSION['msg']="ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
				header('location:index.php#fromlogin');
			}
	}
?>