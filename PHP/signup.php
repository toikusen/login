<?php 

	if(!isset($_POST['submit'])){
		exit("錯誤執行");
	}//判斷是否有submit操作


	$username=$_POST["username"];
	$password=$_POST["password"];//獲取表單資料
	$password2=$_POST["password2"];


	include('connect.php');//連結資料庫

	if($username==""||$password=="")//判斷是否填寫
	{
	echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."請填寫完成！"."\"".")".";"."</script>";
	echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/PHP/register.php"."\""."</script>";    
	exit;
	}

	$result= $conn -> query("select * from users where password = '$password'");
	$row = $result -> fetch_array(MYSQLI_ASSOC);

	if($password!=$password2)//確認密碼是否正確
	{
	echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."密碼必須相同"."\"".")".";"."</script>";
	echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/PHP/register.php"."\""."</script>";   
	exit; 
	}



	 $result= $conn -> query("select * from users where username = '$username'");
	 $row = $result -> fetch_array(MYSQLI_ASSOC);

	 if($row["username"]==$username){
	 echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."重複的使用者名稱！"."\"".")".";"."</script>";
	 echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/PHP/register.php"."\""."</script>";    
	 exit;
	 }


	$sql="insert into users (username,password) values ('$username','$password')";//向資料庫插入表單傳來的值的sql

	$row = $result -> fetch_array(MYSQLI_ASSOC);
	
	/*
	if (isset($row['username'])){
		echo "有username";
	} else{
		echo "NO_username";
	}

	if (isset($row['password'])){
		echo "有password";
	} else{
		echo "NO_password";
	}
	*/
	
	$reslut= $conn -> query($sql);//執行sql

	if (!$reslut){
		die('Error: ' . mysql_error());//如果sql執行失敗輸出錯誤
	} else{
	//echo "註冊成功";//成功輸出註冊成功
	echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/PHP/return.html"."\""."</script>";
	}
?>