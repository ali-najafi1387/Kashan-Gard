<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kashan Gard</title>
  <link rel="stylesheet" href="styles/Reset.css" />
  <link rel="stylesheet" href="styles/Styles.css" />
  <link rel="stylesheet" href="styles/Style.css" />
  <link rel="stylesheet" href="styles/media.css" />

  <!-- Start WOWSlider.com HEAD section -->
  <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine0/style.css" />
  <script type="text/javascript" src="engine0/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->
</head>

<body dir="rtl">
	<?php
	include("include/header.php");
	$link=mysqli_connect("localhost","root","","kashangard");
	$query="SELECT * FROM `weblogs`;";
	$result=mysqli_query($link,$query);
	?>
<section class="blog">
      <div class="header__items__blog">
        <h2 class="">مقالات ما</h2>
        <div class="items__blog__span">
          <span>سفرنامه</span>
          <span>کاشان</span>
        </div>
      </div>
      <div class="items__blog">
		  <?php 
		  $count=0;
		  while($row=mysqli_fetch_array($result))
{ ?>
        <a href="#?id=<?php echo($row["weblog_id"])?>">
			<div class="item__blog">
          <div class="item__blog__img">
            <img src="images/<?php echo($row["mgheader"])?>" alt="سفر به کاشان" />
          </div>
          <div class="item__blog__title">
            <h4 class="item__blog__name">
              <?php echo($row["weblog_header"])?>
            </h4></a>
          </div>
          <h5 class="items__blog__caption">
            <?php echo($row["text"])?>
          </h5>
          <div class="icon__item__blog">
            <div class="icon__item__time">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
                  fill="currentColor" />
                <path
                  d="M15.7101 15.93C15.5801 15.93 15.4501 15.9 15.3301 15.82L12.2301 13.97C11.4601 13.51 10.8901 12.5 10.8901 11.61V7.51001C10.8901 7.10001 11.2301 6.76001 11.6401 6.76001C12.0501 6.76001 12.3901 7.10001 12.3901 7.51001V11.61C12.3901 11.97 12.6901 12.5 13.0001 12.68L16.1001 14.53C16.4601 14.74 16.5701 15.2 16.3601 15.56C16.2101 15.8 15.9601 15.93 15.7101 15.93Z"
                  fill="currentColor" />
              </svg>
              <span><?php echo($row["time"])?></span>
            </div>
            <div class="icon__item__visit">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.9999 16.3299C9.60992 16.3299 7.66992 14.3899 7.66992 11.9999C7.66992 9.60992 9.60992 7.66992 11.9999 7.66992C14.3899 7.66992 16.3299 9.60992 16.3299 11.9999C16.3299 14.3899 14.3899 16.3299 11.9999 16.3299ZM11.9999 9.16992C10.4399 9.16992 9.16992 10.4399 9.16992 11.9999C9.16992 13.5599 10.4399 14.8299 11.9999 14.8299C13.5599 14.8299 14.8299 13.5599 14.8299 11.9999C14.8299 10.4399 13.5599 9.16992 11.9999 9.16992Z"
                  fill="currentColor" />
                <path
                  d="M12.0001 21.02C8.24008 21.02 4.69008 18.82 2.25008 15C1.19008 13.35 1.19008 10.66 2.25008 8.99998C4.70008 5.17998 8.25008 2.97998 12.0001 2.97998C15.7501 2.97998 19.3001 5.17998 21.7401 8.99998C22.8001 10.65 22.8001 13.34 21.7401 15C19.3001 18.82 15.7501 21.02 12.0001 21.02ZM12.0001 4.47998C8.77008 4.47998 5.68008 6.41998 3.52008 9.80998C2.77008 10.98 2.77008 13.02 3.52008 14.19C5.68008 17.58 8.77008 19.52 12.0001 19.52C15.2301 19.52 18.3201 17.58 20.4801 14.19C21.2301 13.02 21.2301 10.98 20.4801 9.80998C18.3201 6.41998 15.2301 4.47998 12.0001 4.47998Z"
                  fill="currentColor" />
              </svg>
              <span>1,123</span>
            </div>
          </div>
		  </div>
		  <?php 
	$count++;
if($count/4==1)
	echo("</div><div class=items__blog>");
}
		  ?>
	</div>
	<?php
	include("include/footer.php");
	?>
	</body>