<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Style.css">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/Reset.css">
    <title>ورود</title>
</head>
<body>
    <div class="continer__form">
        <div class="home__logo">
            <span class="logo__text__first">کاشان</span>
            <span class="logo__text__last">گرد</span>
          </div>
          <form class="form_register" action="action_login.php" method="POST">
            <input type="text" id="username" name="username" placeholder="نام کاربری" required>
            <input type="password" name="password" id="password" placeholder="رمز عبور" required>
            <input class="button__register" type="submit" value="ورود">
            <a href="register.html" class="login__text">ساخت حساب جدید</a>
          </form>
    </div>
</body>
</html>