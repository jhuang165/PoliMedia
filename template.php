<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Template | PoliMedia</title>
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


	<section>
        <div class="blog">
            <center><h1>Title For this Page</h1></center>
            <div class="container">
                
            </div>
        </div>
    </section>
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

