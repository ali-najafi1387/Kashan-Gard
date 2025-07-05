<?php
session_start();
if(isset($_POST["username"])&&!empty($_POST["username"])&&
  isset($_POST["password"])&&!empty($_POST["password"])
  ){
	$username=$_POST['username'];
	$password=$_POST['password'];
}
else
{
	exit("");
}
$link=mysqli_connect("localhost","root","","kashangard");
if(mysqli_connect_errno())
{exit(mysqli_connect_error());}
$query ="SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password';";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
if($row)
{
	
	$_SESSION['state_login']=true;
	$_SESSION['name']=$row['realname'];
	if($row["type"]==1)
	{
		$_SESSION["user_type"]="admin";
	
	?>
<script type="text/javascript">
	<!--
	location.replace("admin.php")
		-->
</script>

<?php
}
else
{
	$_SESSION["user_type"]="public";
	?>
<script type="text/javascript">
	<!--
	location.replace("index.php")
		-->
</script>

<?php
}
}
else
	exit("<!DOCTYPE html>
<html lang=fa dir=rtl>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <link rel=stylesheet href=styles/Style.css>
    <link rel=stylesheet href=styles/register.css>
    <link rel=stylesheet href=styles/Reset.css>
</head>
<body>
    <div class=continer__form>
        <div class=home__logo>
            <span class=logo__text__first>کاشان</span>
            <span class=logo__text__last>گرد</span>
          </div>
          <form class=form_register action=action_login.php method=POST>
            <span>نام کاربری و کلمه عبور با هم تطابق ندارند</span
          </form>
    </div>
</body>
</html>");
?>