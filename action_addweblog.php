<?php
if(isset($_POST["header"])&&
   isset($_POST["text"])&&
   isset($_POST["time"])
  )
{
	$header=$_POST["header"];
	$img=$_FILES["pro_image"]["name"];
	$text=$_POST["text"];
	$time=$_POST["time"];
}
$link=mysqli_connect("localhost","root","","kashangard");
$target_dir="images/";
$target_file=$target_dir.$_FILES["pro_image"]["name"];
$u=1;
$type=pathinfo($target_file,PATHINFO_EXTENSION);
if(!(getimagesize($_FILES["pro_image"]["tmp_name"])))
$u=0;
if($_FILES["pro_image"]["size"]>(500*1024))
{
	$u=0;
	exit("حجم عکس باید کمتر از 500 کیلو بایت باشد");
}
$type=strtolower($type);
if($type!="jpg"&&($type!="png"&&$type!="jpeg"))
{
	$u=0;
	exit("نوع فایل درست نیست");
}
if($u==1)
{
if(move_uploaded_file($_FILES["pro_image"]["tmp_name"],$target_file))
{}
}
if($u==1)
{
	$query="INSERT INTO `weblogs` (`weblog_id`, `weblog_header`, `mgheader`, `text`, `time`) VALUES (NULL, '".$header."', '".$img."', '".$text."', '".$time."');";
	if(mysqli_query($link,$query)===true)
	{
		
	}
}
mysqli_close($link);
?>