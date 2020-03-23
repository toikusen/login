<?php

 	@$username = $_POST['username'];
 	$password = $_POST['password'];

	$db='mysql';     //資料庫類型
	$host='localhost'; //資料庫主機名
	$dbName='login';    //使用的資料庫
	$user='root';      //資料庫連接用戶名
	$pass='';          //對應的密碼

	$conn = new mysqli("$host", "$user", "$pass", "$dbName"); //要使用new操作符，最後一個參數是直接指定數據庫
														      //假如寫的時候不指定資料庫，那下一句需要寫$conn -> select_db(‘login‘)
	$result = $conn -> query("select * from users where username = '$username' and password = '$password'"); //query資料庫裡的值
	//             	 -> query=mysql_query
	if(!$result) {
	 echo "ERROR query";
	} 

?> 