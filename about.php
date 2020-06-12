<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>About Us | PoliMedia</title>
        <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon" />
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="./css/all.css">


		<!-- --------- Owl-Carousel ------------------->
		<link rel="stylesheet" href="./css/owl.carousel.min.css">
		<link rel="stylesheet" href="./css/owl.theme.default.min.css">

		<!-- ------------ AOS Library ------------------------- -->
		<link rel="stylesheet" href="./css/aos.css">

		<!-- Custom Style   -->
		<link rel="stylesheet" href="./css/Style.css">
		<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
	</head>
	<body>
		<!-- The core Firebase JS SDK is always required and must be listed first -->
		<script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-app.js"></script>

			<!-- TODO: Add SDKs for Firebase products that you want to use
			https://firebase.google.com/docs/web/setup#available-libraries -->
			<script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-analytics.js"></script>

			<script>
		  // Your web app's Firebase configuration
		  var firebaseConfig = {
		  	apiKey: "AIzaSyBTzXH3zoNStNp1yRoQZ0QoBK741XI_6bU",
		  	authDomain: "polimedia-8844b.firebaseapp.com",
		  	databaseURL: "https://polimedia-8844b.firebaseio.com",
		  	projectId: "polimedia-8844b",
		  	storageBucket: "polimedia-8844b.appspot.com",
		  	messagingSenderId: "987129451324",
		  	appId: "1:987129451324:web:0238dd25eca20f3dc18439",
		  	measurementId: "G-XWFZ2YKZDM"
		  };
		  // Initialize Firebase
		  firebase.initializeApp(firebaseConfig);
		  firebase.analytics();
	</script>
    <?php echo file_get_contents("header.html"); ?>
	<main>
        
    <!-- --------------------- Blog Carousel ----------------- -->

    <section>
        <div class="aboutinfo">
            <center><h1>About Us</h1></center>
            <div class="about">
                <div class="txt"><h4><font style="font-family: Verdana">PoliMedia is a journalism network and non-profit that focuses on educating students about politics, economics, history, & philosophy and raises awareness about these issues by teaching students to form and express their own opinions! Scroll down to see the poliprograms we have right now!</font></h4></div>
                <div class="imaged"><img src="/assets/polilogo.png"></div>
            </div>
            <div class="about">
                <div class="txt">
                    <h2><font style="font-family: Verdana">PoliMedia's PoliPaper</font></h2><h4><font style="font-family: Verdana">PoliMedia’s PoliPaper is an online newspaper that writes articles, posts blogs, and creates videos about politics, economics, history, and philosophy.</font></h4></div>
                <div class="imaged"><img src="/assets/polipaper.jpeg"></div>
            </div>
            <div class="about">
                <div class="txt"><h2><font style="font-family: Verdana">PoliMedia's PoliPodcast</font></h2><h4><font style="font-family: Verdana">PoliMedia’s PoliPodcast is a podcast that shares several people’s opinions about an issue and interviews people about that issue.</font></h4></div>
                <div class="imaged"><img src="/assets/duck.jpg"></div>
            </div>
            <div class="about">
                <div class="txt"><h2><font style="font-family: Verdana">PoliMedia's PoliPresents</font></h2><h4><font style="font-family: Verdana">PoliMedia’s PoliPresents is a program that educates children about different topics by having monthly discussions and informative videos.</font></h4></div>
                <div class="imaged"><img src="/assets/polipresents.jpeg"></div>
            </div>
            <div class="about">
                <div class="txt"><h2><font style="font-family: Verdana">PoliMedia's PoliProvide</font></h2><h4><font style="font-family: Verdana">PoliMedia’s PoliProvide is a program that helps raise awareness for ongoing issues through donations and events.</font></h4></div>
                <div class="imaged"><img src="/assets/poliprovide.jpeg"></div>
            </div>
        </div>
    </section>

    <!-- ----------x---------- Blog Carousel --------x-------- -->

    <!-- ---------------------- Site Content -------------------------->

    <section class="container">
        <div class="site-content">
        </div>
    </section>

    <!-- -----------x---------- Site Content -------------x------------>

		</main>
		

		<?php echo file_get_contents("footer.html"); ?>
        <script src="./js/Jquery3.4.1.min.js"></script>

<script src="./js/owl.carousel.min.js"></script>

<script src="./js/aos.js"></script>

<script src="./js/main.js"></script>
	</body>
</html>

