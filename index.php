<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Home | PoliMedia</title>
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
    <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="50">
            <h1>PoliMedia</h1>
            <h3>Learn. Decide. Inform.</h3>
            <h2>A Youth run Political Science, Economy, History and Philosophy Journalism Network and Non-Profit Organization</h2>
            <button class="btn" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSeUy4xtLEwD3rzIJzNQrmwWWQOM1BNMKMHq3jZ3Dp-AQpL8JA/viewform'">Apply to become a PoliMedia Journalist and/or Officer Today!</button>
        </div>
    </section>

    <section>
        <div class="blog">
            <center><h1>New Updates!</h1></center>
            <div class="container">
                <div class="owl-carousel owl-theme blog-post">
                    <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                        <img src="https://static.wixstatic.com/media/bf1a22_69ba3af2be974d13b1c6ec5ba003385c~mv2.png/v1/fill/w_740,h_416,al_c,lg_1,q_90/bf1a22_69ba3af2be974d13b1c6ec5ba003385c~mv2.webp" alt="post-1">
                        <div class="blog-title">
                            <h3>Join the Editor-in-Chief of the PoliPaper, William Tan, and help provide meals for those in need!</h3>
                            <button class="btn btn-blog">Soul & Smoke</button>
                            <span>3 minute read</span>
                        </div>
                    </div>
                    <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                        <img src="https://static.wixstatic.com/media/bf1a22_d45f4a4f24dd4816a9a8fd5302629b73~mv2.png/v1/fill/w_740,h_493,al_c,q_90,usm_0.66_1.00_0.01/bf1a22_d45f4a4f24dd4816a9a8fd5302629b73~mv2.webp" alt="post-1">
                        <div class="blog-title">
                            <h3>Raise money to provide masks for the elderly and those at risk</h3>
                            <button class="btn btn-blog">COVID-19</button>
                            <span>2 minute read</span>
                        </div>
                    </div>
                    <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                        <img src="polimedia.png" alt="post-1">
                        <div class="blog-title">
                            <h3>Welcome to PoliMedia!</h3>
                            <button class="btn btn-blog">Introduction</button>
                            <span>2 minute read</span>
                        </div>
                    </div>
                    <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                        <img src="polimedia.png" alt="post-1">
                        <div class="blog-title">
                            <h3>Test</h3>
                            <button class="btn btn-blog">Introduction</button>
                            <span>2 minute read</span>
                        </div>
                    </div>
                </div>
                <div class="owl-navigation">
                    <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                    <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                </div>
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

