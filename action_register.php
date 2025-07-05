<?php
session_start();
if(isset($_POST['realname'])&&!empty($_POST['realname'])&&
  isset($_POST['username'])&&!empty($_POST['username'])&&
   isset($_POST['password'])&&!empty($_POST['password'])&&
   isset($_POST['repassword'])&&!empty($_POST['repassword'])&&
   isset($_POST['phone'])&&!empty($_POST['phone'])
  ){
	$realname=$_POST['realname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$phone=$_POST['phone'];
}
else
{
	exit();
}
if($password!=$repassword)
	exit("<!DOCTYPE html>
<html lang=fa dir=rt>
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
            <span>کلمه عبور و تکرار آن یکسان نیست</span
          </form>
    </div>
</body>
</html>");
$link=mysqli_connect("localhost","root","","kashangard");
if(mysqli_connect_errno())
{exit(mysqli_connect_error());}
$query="INSERT INTO `users` (`realname`, `username`, `password`, `phone`, `type`) VALUES ('$realname', '$username', '$password', '$phone', '0');";
if(mysqli_query($link,$query)===true)
{
	$_SESSION['state_login']=true;
	$_SESSION['name']=$realname;
	?>
<script type="text/javascript">
<!--
location.replace("index.php");
-->
</script>
<?php
}
else
mysqli_close($link);
?>