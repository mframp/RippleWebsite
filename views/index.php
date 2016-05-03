<html>
	<head>
		<link rel="stylesheet" href="../css/main.css?v=1">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../jquery-ui/jquery-ui.min.css">
		<script src="../jquery-ui/external/jquery/jquery.js"></script>
		<script src="../jquery-ui/jquery-ui.min.js"></script>

	</head>
	<!-- Using these styles because sass is messed up, dont want to risk messing up my sass at work, deadline soon -->
	<style>
	.nav-container {
		text-align: right;
		color: black;
		background-color: transparent;
		top: 10px;
	}
	section .hero-container {
		height: 800px;

	}
	</style>
	<body>
		
		<!-- insert navbar here -->
<!-- 		<div class='nav-container'>
			<nav>
				<ul> 
					<li class='nav-link'><a linkTo='WelcomeSection'> Home </a></li>
					<li class='nav-link'><a linkTo='ScreenshotSection'> Our Philosophy</a></li>
					<li class='nav-link'><a linkTo='FeatureSection'> Features </a></li>
					<li class='nav-link'><a linkTo='WelcomeSection'> Sign up </a></li>
				</ul>
			</nav>
		</div> -->

		<section id="WelcomeSection" class="hero-container" >
			<img src="../images/ripple_logo.png" id="RippleLogo" />
			<div id="PhoneContainer">
				<img src="../images/phone_2.png" id="PhoneImage" />
			</div>
			<div class="right-container">
				<div class="title"> Your Money, Tangible Again </div>
				<div class="description"> Ripple makes managing your finances a simple, purposeful experience. </div>
				<div class="button-outline"> Sign Up! </div>
			</div>
		</section>

		


		<section id="FeatureSection" >
			<div class="experience-div">
                <div><strong>EXPERIENCE</strong> SHAPES BEHAVIOR.</div>
                <p>In today's world we don't hold or see our money, and as a result we've lost touch. Ripple creates a hands-on budgeting experience allowing you to engage visually and physically with your money. these experiences reinforce  the behaviours of smart spending and saving money!</p>
            </div>
		</section>

		<section id="DemoSection" class="hero-container" style="background-color:tan">
			
			<?php include('demo.php'); ?>
			<button id="startSlideUp"> Slide Up </button>
		</section>

		<footer>		
			<div id="Copyright">Copyright © 2015 Frampton's Functions</div>
		</footer>
	</body>


</html>

<script type="text/javascript">


</script>