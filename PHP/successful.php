<?php

 	$username = $_POST['username'];
 	$password = $_POST['password'];

	include('connect.php');

	//$row = mysqli_fetch_array($result); 利用mysqli取得資料庫陣列裡的值，下面那種寫法也可以
	$row = $result -> fetch_array(MYSQLI_ASSOC); //規定該產生哪種類型的數組
	if(!$row) {
	 echo "ERROR fetch_array";
	} else {
	 echo "帳號：".$row['username']." ; "."密碼：".$row['password'];
	 echo '<br>';
	}
/*
	$conn = mysqli_connect("localhost", "root", "", "login");
	if ($conn -> connect_errno) {
	  echo "Failed: " . $conn -> connect_error;
	}
	確認是否連接至資料庫

 	$result = mysqli_query("select * from users where username = '$username' and password = '$password'", $conn);
	if (isset($row['username'])){
		echo "有username";
	}
	確認資料庫裡是否有值
*/
	 if ($row['username'] === $username && $row['password'] === $password){
 		echo "登入成功! 歡迎".$row['username'];	
 	}else{
 		echo "登入失敗 請重新登入";
 	}	

?> 