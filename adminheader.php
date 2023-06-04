<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
	<meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
	<style type="text/css">
		* { margin: 0; outline: none; }
		
		.c { clear: both; }
		#wrapper { margin: 0 auto; padding: 0 40px 60px 40px; width: 960px; }
		h2 { padding: 20px 0 10px 0; font-size: 24px; line-height: 40px; font-weight: normal; color: #adc276; text-shadow: 0 1px 3px #222222; }
	</style>

	<!-- sliderman.js -->
	<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<link href="style.css" rel="stylesheet">
	<!-- /sliderman.js -->
</head>
<body id="back" style="width: 100%; height:100%; padding-bottom:20px" >

<div id="head" style="width: 50%; margin-left:25%; margin-right:30%; padding-top:10px"></div>
	<div id="slider_container_1" style="margin-left: 18%; margin-right:15%" >

				<div id="SliderName">
                  <img src="images/banner2.jpg" title="Description from Image Title" width="1000" height="300"/>
					<img src="images/banner3.jpg" />
					<img src="images/banner1.jpg" />
					
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation"></div>
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
	<div id="menubar4" style="margin-left:270px">
      <ul id="menu4">
        <li><a href="viewagent_admin.php">View Agent</a></li>
       <li><a href="view_agentmessage.php">View agent Message</a></li>
	   <li><a href="view_donar.php">View Donator</a></li>
	   <li><a href="view_feedback.php">Feedback</a></li>
	   <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
	</div>
	</body>
	</html>
