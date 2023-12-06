<?php
session_start();
include "connection.php";
if(isset($_POST['adun'])){
if((isset($_POST['adun']) && isset($_post['adpw'])) || (isset($_POST['usun']) && isset($_post['uspw']))){
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return data;
	}
}

$uname1=$_POST['adun'];
$pass1=$_POST['adpw'];


if(empty($uname1)){
	header("Location: index.php");
	exit();
}
else if(empty($pass1)){
	header("Location: index.php");
	exit();
}


$sql1 = "SELECT * FROM admin WHERE username='$uname1' AND password='$pass1'";

$result1 = mysqli_query($connection, $sql1);

if(mysqli_num_rows($result1)==1){
	$row1=mysqli_fetch_assoc($result1);
	if($row1['username']===$uname1 && $row1['password']===$pass1){
		echo "Logged In!";
		$_SESSION['username'] = $row1['username'];
		header("Location: admin.php");
		exit();
	}
	else{
		header("Location: index.php");
		exit();
	}
}
else{
	header("Location: index.php");
	exit();
}
}


else if(isset($_POST['usun'])){
if(isset($_POST['usun']) && isset($_post['uspw'])){
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return data;
	}
}

$uname2=$_POST['usun'];
$pass2=$_POST['uspw'];

if(empty($uname2)){
	header("Location: index.php");
	exit();
}
else if(empty($pass2)){
	header("Location: index.php");
	exit();
}


$sql2 = "SELECT * FROM users WHERE username='$uname2' AND password='$pass2'";

$result2 = mysqli_query($connection, $sql2);

if(mysqli_num_rows($result2)==1){
	$row2=mysqli_fetch_assoc($result2);
	if($row2['username']===$uname2 && $row2['password']===$pass2){
		echo "Logged In!";
		$_SESSION['username'] = $row2['username'];
		header("Location: user.php");
		exit();
	}
	else{
		header("Location: index.php");
		exit();
	}
}
else{
	header("Location: index.php");
	exit();
}
}


?>