<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ﺳﻮﻕ ﻧﻘﻞ </title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<!-- <link rel="stylesheet" type="text/css" href="/css/app.css"> -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-arabic.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-arabic-theme.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--Start Navbar--> 
	<nav class="navbar navbar-fixed-top custom-navbar" id="navbar">
	    <div class="container">
	        <div class="navbar-header">
	            <!-- Collapsed Hamburger -->
	            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#app-navbar-collapse">
	                <span class="sr-only">Toggle Navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>

	            <!-- Branding Image -->
	            <a href="{{ url('/') }}">
	                <img src="/img/souq-naql-car-sm.png" alt="logo">
	            </a>
	        </div>

	        <div class="collapse navbar-collapse" id="app-navbar-collapse">
	            <!-- Left Side Of Navbar -->
	            <ul class="nav navbar-nav">
	                <li><a href="#" class="smoothScroll">الرئيسية</a></li>
					<li><a href="#about" class="smoothScroll">من نحن</a></li>
					<li><a href="#contact" class="smoothScroll">اتصل بنا </a></li>
	            </ul>

	            <!-- Right Side Of Navbar -->
	            <ul class="nav navbar-nav navbar-right">
	                <!-- Authentication Links -->
	                @if (Auth::guest())
	                <li class="top"><a href="#" data-toggle="modal" data-target="#singin">تسجيل الدخول</a></li>
	                <li><a href="{{ route('register') }}">إنشاء حساب</a></li>
	                @else
	                <li><a href="{{ url('/home') }}">حسابك</a></li>
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                        {{ Auth::user()->name }} <span class="caret"></span>
	                    </a>

	                    <ul class="dropdown-menu" role="menu">
	                        <li>
	                            <a href="{{ route('logout') }}"
	                            onclick="event.preventDefault();
	                            document.getElementById('logout-form').submit();">
	                            خروج
	                        </a>

	                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                            {{ csrf_field() }}
	                        </form>
	                        </li>
	                    </ul>
	                </li>
	                @endif
	            </ul>
	        </div>
	    </div>
	</nav>
	<!-- Modal -->
	<div class="modal fade" id="singin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #27c4b9;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center"><i class="fa fa-lock"></i> اهلا بعودتك</h4>
				</div>
				<div class="modal-body">
					<div id="main">
						<form role="form" method="POST" action="{{ route('login') }}">
	                        {{ csrf_field() }}
	                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="رقم التليفون او البريد الاكترونى" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
	                        </div>
	                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" name="password" placeholder="كلمة المرور" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
	                        </div>
                            <input type="submit" value="دخول">
                            <a href="{{ route('password.request') }}" style="font-size: 12px;">
                                نسيت كلمة المرور ؟
                            </a>
	                    </form>
					</div> <!-- end main -->
				</div>
			</div>
		</div>
	</div>
	<!--End Navbar -->
	<!--Start Carousel-->
	<section id="carousel">        
	    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	      <ol class="carousel-indicators">
	        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
	        <li data-target="#bs-carousel" data-slide-to="1"></li>
	        <li data-target="#bs-carousel" data-slide-to="2"></li>
	      </ol>

	      <div class="carousel-inner">
	        <div class="item slides active">
	          <div class="slide-1">
	              <div class="overlay"></div>
	          </div>
	          <div class="hero">
	            <hgroup>
	                <h1>بضاعتك في أمان</h1>        
	                <h3 style="color: #27c4b9;"> سوق نقل</h3>
	            </hgroup>
	          </div>
	        </div>
	        <div class="item slides">
	          <div class="slide-2">
	              <div class="overlay"></div>
	          </div>
	          <div class="hero">        
	            <hgroup>
	                <h1>بضاعتك في أمان</h1>        
	                <h3 style="color: #27c4b9;"> سوق نقل</h3>
	            </hgroup>       
	          </div>
	        </div>
	        <div class="item slides">
	          <div class="slide-3">
	              <div class="overlay"></div>
	          </div>
	          <div class="hero">        
	            <hgroup>
	                <h1>بضاعتك في أمان</h1>        
	                <h3 style="color: #27c4b9;"> سوق نقل</h3>
	            </hgroup>
	          </div>
	        </div>

	        <a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	      </div> 
	    </div>
	</section>        
	<!--End Carousel-->
            
	<!-- boxes Section -->
	<section id="boxes">
		<div class="fluid-container">
			<div class="row">
				<a href="#why" class="smoothScroll">
					<div class="col-xs-12 col-md-6 first"> <i class="fa fa-lightbulb-o fa-4x" aria-hidden="true"></i>

						<h2>ليه تستخدم سوق نقل</h2> </div>
				</a>
				<a href="#how" class="smoothScroll">
					<div class="col-xs-12 col-md-6 second"> <i class="fa fa-question-circle-o fa-4x" aria-hidden="true"></i>

						<h2>ازاي تستخدم سوق نقل</h2></div>
				</a>
			</div>
		</div>
	</section>
	<!-- boxes Section -->
	<!-- Why Section -->    
	<section id="why">
		<div class="fluid-container">
			<div class="row">
				<h3>ليه تستخدم سوق نقل</h3>
				<div class="col-xs-12 col-sm-6 col-md-4 group">
                    <div class="img">
                        <img src="img/icons/safty.png">
                    </div>
					<h2>الأمان</h2>
					<p>سوق نقل بيقـوم بتأميــن
				    <br> كــل شحناتـــك</p> 
                </div>
                
				<div class="col-xs-12 col-sm-6 col-md-4 group">
                    <img src="img/icons/speed.png">
					<h2>السرعة</h2>
					<p>سوق نقل بيقوم بتوصيل شحناتك
				    <br> بأسرع وقت ممكن </p>                     
                </div>
                
				<div class="col-xs-12 col-sm-6 col-md-4 group">
                    <img src="img/icons/coins.png">
					<h2>التوفير</h2>
					<p>سوق نقل بيساعدك تنقل شحناتك بالسعـر
					<br> المناسـب لـك </p>                    
                </div>
				<div class="col-xs-12 col-sm-6 col-md-4 group">
                    <img src="img/icons/home.png">
					<h2>الكفائة</h2>
					<p>سوق نقل يوفر لك سائقين مدربيــن
						<br> ومختارين بأعلي كفاءة</p> 
                </div>
                
				<div class="col-xs-12 col-sm-6 col-md-4 group">
                    <img src="img/icons/head.png">
					<h2>خدمة العملاء</h2>
					<p>سوق نقل يوفر فريق خدمة عملاء مميز
				    <br> تقدم لك المساعدة</p>                
                </div>
                                
                <div class="col-xs-12 col-sm-6 col-md-4 group">
                    <img src="img/icons/hands.png">
					<h2>الإلتزام</h2>
					<p>سوق نقل يلتزم بكل ما سبق</p>                     
                </div>
            </div>    
        </div>
	</section>
	<!-- Why Section -->
                
	<!-- Section -->
	<section id="how">
		<div class="fluid-container">
			<div class="row">
				<div class="title">
					<h2>إزاي تستخدم سوق نقل</h2> </div>
				<div class="col-xs-12 col-md-6 shipper">
					<h2>مسئول نقل </h2> <img src="img/shipper.png">
					<h3>اتبع الأتي</h3>
				</div>
				<div class="col-xs-12 col-md-6 captain">
					<h2>كابتن</h2>
					<div class="captain"> <img src="img/captain.png">
						<h3><a href="#">حمل التطبيق الان</a></h3> </div>
				</div>
            </div>
		</div>
	</section>
	<!-- Section -->
            
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 follow">
					<ul>
						<li><img src="img/arrow.png"> &nbsp;أدخل علي الموقع </li>
						<li><img src="img/arrow.png"> &nbsp; سجل بياناتك</li>
						<li><img src="img/arrow.png"> &nbsp;<a href="#" class="text">إملى الطلب</a> </li>
						<li><img src="img/arrow.png"> &nbsp;اختر السعر المناسب</li>
					</ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="img/mobile.png" class="img-responsive"> 
                </div>                            
            </div>
        </div>
    </section>        
            
	<!-- About Section -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 text-center">
                    <div class="header">
                        <h2>نبذه عنا</h2>
                    </div>    
					   <p>سوق نقل وسيلة أمنة ننقل بها البضائع بأقل تكلفة و أكتر أمان و أفضل فريق عمل مختار
						<br> مابين خدمة عملاء او سائقين.
						<br>
						<br>
						<br> سوق نقل بالتعاون مع بنك ........</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	<!-- Contact Section -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<form class="form-horizontal" method="post">
							<h2>تواصل معنا</h2>
							<div class="form-group"> <span class="col-md-8 col-md-offset-2 text-right"></span>
								<div class="col-md-8">
									<input id="fname" name="name" type="text" placeholder="الإسم" class="form-control"></div>
							</div>
							<div class="form-group"> <span class="col-md-8 col-md-offset-2 text-right"></span>
								<div class="col-md-8">
									<input id="lname" name="name" type="text" placeholder="البريد الإلكتروني" class="form-control"> </div>
							</div>
							<textarea class="form-control-text" id="message" name="message" placeholder="محتوى الرسالة" rows="5"></textarea>
							<div class="form-group">
								<div class="col-md-8 text-right">
									<button type="submit" class="send-btn">
                                        <img src="img/send-icon.png" width="30px" height: 40px; class="send-icon">  إرسال
                                    </button>
								</div>
							</div>
					</form>
				</div>
				<div class="col-xs-12 col-md-3 box">
					<p><b>العنوان:</b> <span>20 أ الدور 12 شقة رقم 1<br>
			عمارات العبور مدينة نصر<span> </p>
			<p><b>التليفون :</b><span> 01024098880</span> </p>
					<p><b>الإيميل :</b><span> support@souqnaql.com</span> </p>
					<ul class="social">
						<li>
							<a href="#"><img src="img/social/twitter.png" width="30px" height="30px"> </a>
						</li>
						<li>
							<a href="#"><img src="img/social/facebook.png" width="30px" height="30px"> </a>
						</li>
						<li>
							<a href="#"><img src="img/social/instagram.png" width="30px" height="30px"> </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact  -->
	<!-- Start Footer -->
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<h1>سوق نقل</h1>
					<p>معلومات عن الشركة معلومات عن الشركة معلومات عن الشركة معلومات عن الشركة
						<br> معلومات عن الشركة معلومات عن الشركة</p>
						<img src="img/payment/cib.png">
				</div>
				<div class="col-xs-12 col-md-3">
					<ul class="menu">
						<li><a href="#" class="smoothScroll">الرئيسية</a></li>
						<li><a href="#about" class="smoothScroll">من نحن</a></li>
						<li><a href="#contact" class="smoothScroll">إتصل بنا</a></li>
					</ul>
				</div>
                <div class="download-app">
                        <h4>تحميل تطبيق الموبايل</h4>
                        <a href="#" class="app"><i class="fa fa-android fa-2x"></i></a>
                        <a href="#" class="app"><i class="fa fa-apple fa-2x"></i></a>
                </div>
			</div>
		</div>
	</section>
	<!-- End Footer -->
	<!-- Start Copyright -->
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3 right">
					<p> &copy; 2017 حقوق النشر محفوظة لسوق نقل</p>
				</div>
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-3 copyright">
					<p>تم التصميم والتطوير بواسطة فريق سوق نقل</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Copyright -->
	<!-- scripts-->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap-arabic.min.js') }}"></script>
	<script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>