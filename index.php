<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>سيارات سيتي</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<!-- insert js files -->
	
	<!--<php include_once 'php/connction.php' ?>-->
	<script src="js/tab.js"></script>
    <!-- Favicon -->
    <link href="img/logo/icon/icon.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/tab.css" rel="stylesheet">
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');

    body {
        font-family: 'Cairo', sans-serif;
		font-size:20px;
    }

    .animated-text-container {
        margin-bottom: 1px; /* Add margin bottom for space */
    }

    .animated-text {
        font-size: 1.5em;
        cursor: pointer;
        text-align: center;
    }

    .animated-text h3, .animated-text h5 {
        margin: 0;
    }

    .animated-text-hover {
        display: none;
    }

    .hand-icon {
        margin-right: 50px;
        animation: shake 0.5s infinite;
    }

    .hand-icon.stopped {
        animation-play-state: paused;
    }

    .text-primary {
        color: blue; /* Change color to blue */
    }

    @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-5px); }
        100% { transform: translateX(0); }
    }
    
    .image-container {
        margin-left: 30px; /* Add left margin */
    }
	 /* Custom Styles */
    .customer-slide {
        text-align: center;
    }

    .customer-photo {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin: 20px auto;
    }

    .customer-name {
        font-size: 20px;
        font-weight: bold;
    }

    .customer-rating {
        color: #fdd835; /* Yellow color for stars */
        font-size: 24px;
        margin-bottom: 20px;
    }

    .customer-feedback {
        font-size: 16px;
    }

    /* Custom Control Styles */
    .carousel-control {
        width: 50px;
        height: 50px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 25px;
        line-height: 50px;
        text-align: center;
        font-size: 24px;
        color: #fff;
        transition: background 0.3s;
    }

    .carousel-control:hover {
        background: rgba(0, 0, 0, 0.7);
    }
	p{
		font-size:15px;
	}
	h1{
		font-size:25px;
	}
	h2{	font-size:22px;
	}
	h3{
		font-size:20px;
	}
	h4{
		font-size:18px;
	}
	h5{
		font-size:16px;
	}
</style>
</head>

<body>
	<!-- <php
		$sql1 = "Select * From Users;";
		$result = mysqli_query($conn, $sql1);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck>0){
			while ($row = mysqli_fetch_assoc($result)){
				echo $row['user_uid'] . "<br>";
			}
		}
	?> -->
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="http://facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-0 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-3 display-5 font-weight-semi-bold"><span class="text-primary"><img src="img/logo.png" alt="Logo" class="center"></span></h1>
                </a>
            </div>
			<div class="col-lg-3 col-6 text-right">.
			</div>
			<div class="col-lg-3 col-6 text-right">.
			</div>
            <div class="col-lg-3 col-6 text-right">
                <a href="pages/frame.php" class="btn border">
                    <i class="fas far fa-hand-point-right hand-icon text-primary" style="font-size:x-large"></i>
                    <span class="" style="color:black;font-size:200%;">اضغط هنا لرؤية العروض</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1"><img src="img/logo/icon/icon.png" style="width: 100px; height: 100px;" alt="Logo"></span>الرئيسية</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    
                        <div class="navbar-nav ml-auto py-0">
							<a href="" class="nav-item nav-link">نبذة عنا</a>
                            <a href="pages/frame.php" class="nav-item nav-link">طلب تموين</a>
                            <a href="#" class="nav-item nav-link active">الصفحة الرئيسية</a>
                        </div>
                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img src="img/main.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;padding-top:200;padding-top: 50px;height: 2020px;">
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4"style="font-size: 40px;">سيارات سيتي</h3>
									<h4 class="text-light text-uppercase font-weight-semi-bold mb-3"style="font-size: 20px;">سهلتها عليك</h4>
                                    <h4 class="text-light text-uppercase font-weight-semi-bold mb-3" style="font-size: 25px;">بدون دفعة اولى - اقل سعر - اقل قسط</h4>
                                    <a href="" class="btn btn-light py-2 px-3" style="font-size: 30px;">اكتشف العروض الان</a>
									<div><i class="far fa-hand-point-up hand-icon text-primary"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
	<h2 class="text-primary" style="text-align:center;">كيف تحصل على تمويل لسيارتك معنا ؟</h2>
	<h3 style="text-align:center;">بناء على وضعك الائتماني سنقدم لك أفضل عرض تمويلي وأقل سعر سيارة</h3>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
		
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px; text-align: center;">
                    <h1 class="fa far fa-clock text-primary m-0 mr-3 center"></h1>
					<div>
						<h5 class="font-weight-semi-bold text-primary">الخطوة الرابعة</h5>
						<h5 class="font-weight-semi-bold" style="padding-top: 5px; width: 150px;">استلم سيارتك في 48 ساعة</h5>
					</div>
				</div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px; text-align: center;">
                    <h1 class="fas fas fas fa-hand-holding-usd text-primary m-0 mr-3 center"></h1>
					<div>
						<h5 class="font-weight-semi-bold text-primary">الخطوة الثالثة</h1>
						<h5 class="font-weight-semi-bold" style="padding-top: 5px; width: 150px;">اختر العرض المناسب ومولها الان</h5>
					</div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px; text-align: center;">
					<h1 class="fas fas fa-file-invoice-dollar text-primary m-0 mr-3 center"></h1>
					<div>
						<h5 class="font-weight-semi-bold text-primary">الخطوة الثانية</h5>
						<h5 class="font-weight-semi-bold" style="padding-top: 5px; width: 150px;">اكتشف من بين العشرات عروض التمويلية لدى البنوك والشركات</h5>
					</div>
				</div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
				<div class="d-flex align-items-center border mb-4" style="padding: 30px; text-align: center;">
						<h1 class="fas fas fa-search text-primary m-0 mr-3 center"></h1>
						<div>
							<h5 class="font-weight-semi-bold text-primary">الخطوة الاولى</h5>
							<h5 class="font-weight-semi-bold" style="padding-top: 5px; width: 150px;">اختر سيارتك</h5>
						</div>
				</div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
	<!-- Tab Start -->
	<div class="container-fluid pt-5">
		<h1 class="text center" style="padding-bottom: 50px;">نقدم لكم افضل خدمة للحصول على سيارة</h1>
		
		<!-- click here to show  -->
	<div class="container">
        <!-- First set of text -->
        <div class="row animated-text-container" id="text1">
            <div class="col">
                <div class="d-flex align-items-center" style="padding-top:50px;margin-left:50%;">
                    <i class="far fa-hand-point-up hand-icon text-primary" onclick="toggleText(1)"></i>
                    <div class="animated-text">
                        <h3>توفر الوقت والجهد للعميل بنقرة واحدة من هاتفك</h3>
                        <h5 class="animated-text-hover">بدون جهد ووقت وأنت بمكانك</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="image-container">
                    <img src="https://via.placeholder.com/150" alt="Placeholder Image">
                </div>
            </div>
        </div>

        <!-- Second set of text -->
        <div class="row animated-text-container" id="text2">
            <div class="col">
                <div class="d-flex align-items-center" style="padding-top:50px;margin-left:50%;">
                    <i class="far fa-hand-point-up hand-icon text-primary" onclick="toggleText(2)"></i>
                    <div class="animated-text">
                        <h3>نقدم لك افضل عرض تمويلي</h3>
                        <h5 class="animated-text-hover">أسهل من أي وقت مضى</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="image-container">
                    <img src="https://via.placeholder.com/150" alt="Placeholder Image">
                </div>
            </div>
        </div>

        <!-- Third set of text -->
        <div class="row animated-text-container" id="text3">
            <div class="col">
                <div class="d-flex align-items-center" style="padding-top:50px;margin-left:50%;">
                    <i class="far fa-hand-point-up hand-icon text-primary" onclick="toggleText(3)"></i>
                    <div class="animated-text">
                        <h3>من جميع مناطق المملكة</h3>
                        <h5 class="animated-text-hover">دون الحاجة لجهد كبير</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="image-container">
                    <img src="https://via.placeholder.com/150" alt="Placeholder Image">
                </div>
            </div>
        </div>

        <!-- Fourth set of text -->
        <div class="row animated-text-container" id="text4">
            <div class="col">
                <div class="d-flex align-items-center" style="padding-top:50px;margin-left:50%;">
                    <i class="far fa-hand-point-up hand-icon text-primary" onclick="toggleText(4)"></i>
                    <div class="animated-text">
                        <h3>تحسين العمليات وتسريع النتائج</h3>
                        <h5 class="animated-text-hover">من دون أي متاعب</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="image-container">
                    <img src="https://via.placeholder.com/150" alt="Placeholder Image">
                </div>
            </div>
        </div>
    </div>
<!-- click container finish -->

		<!-- cCustomer Reviews start -->	
	<div class="container">
	  <h1 style="margin-top: 100px;margin-bottom: 50px;text-align:center;">أراء العملاء<h1>
	  <div id="customerCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 100px;">
		<!-- Indicators -->
		<ol class="carousel-indicators" >
		  <li data-target="#customerCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#customerCarousel" data-slide-to="1"></li>
		  <li data-target="#customerCarousel" data-slide-to="2"></li>
		  <li data-target="#customerCarousel" data-slide-to="3"></li>
		  <li data-target="#customerCarousel" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<div class="customer-slide">
			  <!--<img class="customer-photo" src="customer1.jpg" alt="Customer Photo">-->
			  <div class="customer-name">خالد</div>
			  <div class="customer-rating">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
			  </div>
			  <div class="customer-feedback">
				"خدمة مميزة من الموقع"
			  </div>
			</div>
		</div>

		  <!-- Repeat this for each customer -->
		  <div class="item">
			<div class="customer-slide">
			  <!--<img class="customer-photo" src="customer1.jpg" alt="Customer Photo">-->
			  <div class="customer-name">احمد</div>
			  <div class="customer-rating">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
			  </div>
			  <div class="customer-feedback">
				"سرعة بالتواصل"
			  </div>
			</div>
		  </div>

      <!-- Repeat for other customers -->
      <div class="item">
			<div class="customer-slide">
			  <!--<img class="customer-photo" src="customer1.jpg" alt="Customer Photo">-->
			  <div class="customer-name">احمد</div>
			  <div class="customer-rating">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
			  </div>
			  <div class="customer-feedback">
				"كنت ابحث عن سيارة ولقيت افضل عرض تمويلي لديهم موقع ممتاز"
			  </div>
			</div>
		  </div>
		  <!-- Repeat for other customers -->
      <div class="item">
			<div class="customer-slide">
			  <!--<img class="customer-photo" src="customer1.jpg" alt="Customer Photo">-->
			  <div class="customer-name">عبدالله محمد</div>
			  <div class="customer-rating">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
			  </div>
			  <div class="customer-feedback">
				"اشكر القائمين على الموقع"
			  </div>
			</div>
		  </div>
		  <!-- Repeat for other customers -->
      <div class="item">
			<div class="customer-slide">
			  <!--<img class="customer-photo" src="customer1.jpg" alt="Customer Photo">-->
			  <div class="customer-name">ابراهيم محمد</div>
			  <div class="customer-rating">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
			  </div>
			  <div class="customer-feedback">
				"موقع رهيييب"
			  </div>
			</div>
		  </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#customerCarousel" data-slide="prev" style="margin-top: 50px;">
      <i class="fas fa-chevron-left"></i>
    </a>
    <a class="right carousel-control" href="#customerCarousel" data-slide="next" style="margin-top: 50px;">
      <i class="fas fa-chevron-right"></i>
    </a>
  </div>


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5" style="font-size:15px;">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
               <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>المملكة العربية السعودية</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i></p><!-- email -->
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>0503118456</p>
            </div>
            <!--<div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>يسسيس</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>سيبري</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">سيارات سيتي</a> جميع الحقوق محفوظة لدى
                    <a class="text-dark font-weight-semi-bold" href=""></a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="https://wa.me/+966503118456" class="btn btn-primary text-dark whatsapp" style="display:inline; font-size: 4.5rem;"><i class="fab fa-whatsapp fa-3"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	
	<!-- function to show hand-icon text -->
	<script>
        function toggleText(number) {
            const handIcon = document.querySelector('#text' + number + ' .hand-icon');
            const textToShow = document.querySelector('#text' + number + ' .animated-text-hover');

            // Toggle animation
            handIcon.classList.toggle('stopped');

            // Toggle hand icon
            if (handIcon.classList.contains('stopped')) {
                handIcon.classList.remove('fa-hand-point-up');
                handIcon.classList.add('fa-hand-point-down');
            } else {
                handIcon.classList.remove('fa-hand-point-down');
                handIcon.classList.add('fa-hand-point-up');
            }

            // Toggle text visibility
            textToShow.style.display = (textToShow.style.display === 'none' || textToShow.style.display === '') ? 'block' : 'none';
        }
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>