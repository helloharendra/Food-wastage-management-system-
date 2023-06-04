<?php
session_start();
include_once 'db.php';
if(isset($_POST['btn_submit']))
{
 echo $uname = mysqli_real_escape_string($conn,$_POST['uname']);
 echo $upass = mysqli_real_escape_string($conn,$_POST['upass']);

  $res=mysqli_query($conn, "SELECT * FROM `registeration` WHERE `name`='$uname'");
  $row=mysqli_fetch_array($res);
  print_r($row);
 if($row['password']==$upass)
 {
  $_SESSION['user1']= $row['name'];
  $_SESSION['user'] = $row['uid'];
  header("Location:home.php");
 }
 else
 {
   ?>
         <script>alert('wrong details');</script>
        <?php
 }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
	<meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		* { margin: 0; outline: none; }
		
		.c { clear: both; }
		#wrapper { margin: 0 auto; padding: 0 40px 60px 40px; width: 960px; }
		h2 { padding: 20px 0 10px 0; font-size: 24px; line-height: 40px; font-weight: normal; color: #adc276; text-shadow: 0 1px 3px #222222; }
	</style>

	<!-- sliderman.js -->
	<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	
	<!-- /sliderman.js -->
</div>
<body id="back" style="width: 100%; height:100%; padding-bottom:20px" >
<!-- <div id="back"  style="width: 100%; height:100%"> -->
<div id="head"  style="width: 50%; margin-left:25%; margin-right:30%; padding-top:10px"></div>


<div id="slider_container_1"  style="margin-left: 18%; margin-right:15%"  >

				<div id="SliderName" >
                  <img src="images/banner2.jpg" title="Description from Image Title"  />
					<img src="images/banner3.jpg" width="50%" />
					<img src="images/banner1.jpg" width="60%" />
				
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation" style="margin-left: 50;"></div>
				<div class="c"></div>

				<script type="text/javascript">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 900, height: 300, effects: 'demo01',
					display: {
						pause: true, // slider pauses on mouseover
						autoplay: 2000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
						loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});

				</script>

				<div class="c"></div>
				
			<div class="c"></div>
			</div>
		<div class="c"></div>
	
		<div id="main">
	
	
		<div id="menubar">
      <ul id="menu">
        <li class="selected"><a href="index.php">Donor</a></li>
        <li><a href="Agentindex.php">Agent</a></li>
       <li><a href="adminindex.php">Admin</a></li>
      </ul>
    </div>

</div>
	
	
          
        <div style="margin-left: 200px;">
			 <form method="POST">
		 <div id="lbackimage">
		   <div id="loginback">
		  <div id="loginhead">
		  Login
		  </div>
		  <div id="loginarea">
		  <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" required/><br><br>
		  <label>Password</label> &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="upass" required/>
		   <br><br><br> <br>
		 <div>
<input type="submit" name="btn_submit" value="SIGN IN" style="text-decoration:none;margin-left:80px; margin-right:20px; font-size:20px;height:40px; font-size:20;background-color: blue;color:white ;padding-top:0px;padding-bottom:0px;padding-left:10px;padding-right:10px;border-radius:10px ;"> 
<a href="registeration.php" style=" text-decoration:none;width:70px; margin-left:30px;  font-size:20px;height:40px; ;background-color: orange;color:white ;padding-top:8px;padding-bottom:8px;padding-left:10px;padding-right:10px;border-radius:10px ;"> SIGN UP</a>
</div>
		  <div id="dbutton"> 
		
		   
		  
		 </div>
		 </div>
		 </form>
		</div>
<br style="clear:both;"/>
      </div><!--close main-->	
	</div>
	</div>
</body>
</html>
