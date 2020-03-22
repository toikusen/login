<?php 

	$username = $_POST['username'];//post獲取表單裡的name
	$password = $_POST['password'];//post獲取表單裡的password

	if(!isset($_POST['submit'])){
		exit("錯誤執行");
	}//判斷是否有submit操作

	include('connect.php');//連結資料庫

	$sql="insert into users (username,password) values ('$username','$password')";//向資料庫插入表單傳來的值的sql

	$row = $result -> fetch_array(MYSQLI_ASSOC);
	
	$reslut= $conn -> query($sql);//執行sql

	if (!$reslut){
		die('Error: ' . mysql_error());//如果sql執行失敗輸出錯誤
	} else{
	echo "註冊成功".$row['username'];//成功輸出註冊成功
	}
?>