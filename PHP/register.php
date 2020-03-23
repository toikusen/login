<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SignUp Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="form">
		<form method="POST" action="signup.php" >
			<p style="font-size:25px;">
				註冊頁面
			</p>
			<p>
				<label>帳號:</label>
				<input type="text" name="username" placeholder="請輸入帳號">
			</p>
			<p><label>密碼: </label>
				<input type="text" name="password" placeholder="請輸入密碼">
			</p>
			<p><label>密碼確認: </label>
				<input type="text" name="password2" placeholder="請再次輸入密碼">
			</p>
			<p>
				<input type="submit" name="submit" value="註冊">
			</p>
		</form>
		<form method="POST" action="login.php">
			 <p>
                <input type="submit" name="submit" value="登入頁面">
            </p>
		</form>
	</div>
</body>
</html>