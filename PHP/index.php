<?php

 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$username = stripcslashes($username);
 	$password = stripcslashes($password);

/*
	$db='mysql';     //資料庫類型
	$host='localhost'; //資料庫主機名
	$dbName='login';    //使用的資料庫
	$user='root';      //資料庫連接用戶名
	$pass='';          //對應的密碼


 	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
 				
 	$row = mysql_fetch_array($result);

	 if ($row['username'] == $username && $row['password'] == $password){
 		echo "登入成功! 歡迎".$row['username'];	
 	}else{
 		echo "登入失敗 請重新登入";
 	}	

*/

 	mysqli_connect("localhost", "root", "");
 	mysqli_select_db("login");

 	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
 				or die("查詢資料庫失敗".mysql_error());
 	$row = mysql_fetch_array($result);
 	if ($row['username'] == $username && $row['password'] == $password){
 		echo "登入成功! 歡迎".$row['username'];	
 	}else{
 		echo "登入失敗 請重新登入";
 	}

?> 