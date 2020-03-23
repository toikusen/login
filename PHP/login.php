<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <form method="POST" action="successful.php">
            <p style="font-size:25px;">
                登入頁面
            </p>
            <p>
                <label>帳號：</label>
                <input type="text" id="username" name="username" placeholder="請輸入帳號">
            </p>
            <p>
                <label>密碼：</label>
                <input type="text" id="password" name="password" placeholder="請輸入密碼">
            </p>
            <p>
                <input type="submit" name="submit" value="登入">
            </p>
        </form>
        <form method="POST" action="register.php">
            <p>
                <input type="submit" name="submit" value="註冊頁面">
            </p>
        </form>
    </div>
</body>
</html>