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
	<!--         <link rel="stylesheet" type="text/css" href="/css/app.css"> -->
	<link rel="stylesheet" href="/css/bootstrap-arabic.min.css"/>
	<link rel="stylesheet" href="/css/mystyle.css"/>
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--Start Navbar--> 
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
	    <div class="container">
	        <div class="navbar-header">
	            <!-- Collapsed Hamburger -->
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                <span class="sr-only">Toggle Navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>

	            <!-- Branding Image -->
	            <a href="{{ url('/') }}">
	                <img src="/images/souq-naql-car-sm.png" alt="logo">
	            </a>
	        </div>

	        <div class="collapse navbar-collapse" id="app-navbar-collapse">
	            <!-- Left Side Of Navbar -->
	            <ul class="nav navbar-nav">
	                <li class="active link-home"><a href="#home">الرئيسية<span class="sr-only">(current)</span></a></li>
					<li><a href="#about-us" class="link-about">من نحن</a></li>
					<li><a href="#" class="link-contact">اتصل بنا </a></li>
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
	<!--Start Slider Show-->
	<section class="slider-show" id="home">
		<div class="overlay">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="myapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">طلب نقل</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<span class="intro text-center">معلومات عن الشحنه</span>
								<form class="spechial-form">
									<div class="row">
										<div class="col-md-5 form1">
											<h5>نوع الشحنه</h5> <br>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input " > سائل <br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > معادن<br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > اخشاب <br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > قابله للاشتعال <br>
											</div>
											<div class="input">	
												<input type="checkbox" value="" class="form-check-input" > قابله للاكسر <br> 
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > غازيه <br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > اخري <br>
											</div>
											<textarea class="text-intro-area"></textarea>
										</div>
										<div class="col-md-7 form1">
											<h5 >طريقه التحميل </h5> <br>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input " > حره (لا تشمل الحبوب والغلال والسؤال) <br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > حاويات (لا تشمل استخدام اوناش )<br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > كراتين (وزن اقل من 30 كجم) <br>
											</div>
											<div class="input">
												<input type="checkbox" value="" class="form-check-input" > بالتات (لا تشمل استخدام روافع)  <br>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<div class="from">
												<h5 class="ways">مسار الشحنه</h5>
												<span class="span-spechial" style="margin-top:0;">من محافظه</span> 
												<select>
													<option selected value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
												</select>
												<br><span class="span-spechial1"> من مدينه</span>
												<select>
													<option selected value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
												</select>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="from form-horizontal">
												<span class="span-spechial">الي  محافظه</span>
												<select>
													<option selected value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
												</select>
												<br><span class="span-spechial1">الي مدينه</span>
												<select>
													<option selected value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
													<option  value="1">القاهره</option>
												</select>
											</div>
										</div>
										<div class="col-md-7">
											<textarea class="area-way" placeholder="تفاصيل اكتر"></textarea>
										</div>
									</div>
									<div class="col-md-8">
										<h5 class="ways">معلومات عن المستلم </h5>
										<input class="input-info" type="text" placeholder="الاسم "/>
										<input class="input-info" type="text" placeholder="التليفون "/>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default btn-sent">ارسال الطلب </button>
							</div>
						</div>
					</div>
				</div>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/slider/slider.png" alt="slider1">
						<div class="carousel-caption">
							<h2 class="h1"><span class="start-intro">بضاعتك في امان </span><br>
							<span class="left-intro">مع <span class="end-intro">سوق نقل </span></span></h2>
						</div>
					</div>
					<div class="item ">
						<img src="images/slider/slider2.jpg" alt="slider1">
						<div class="carousel-caption">
							<h2 class="h1"><span class="start-intro">بضاعتك في امان  </span><br><span class="left-intro">مع <span class="end-intro">سوق نقل </span></span></h2>
						</div>
					</div>
					<div class="item ">
						<img src="images/slider/slider1.jpg" alt="slider1">
						<div class="carousel-caption">
							<h2 class="h1"><span class="start-intro">بضاعتك في امان  </span><br><span class="left-intro">مع <span class="end-intro">سوق نقل </span></span></h2>
						</div>
					</div>
				</div>			
			</div>
			<button class="btn btn-default atlob-now" data-toggle="modal" data-target="#myapp">املاء  الطلب </button>
		</div>
		<div class="slider-links text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 links border">
						<i class="fa  fa-lightbulb-o fa-3x" aria-hidden="true"></i>
						<h3>ليه تستخدم سوق نقل</h3>
					</div>
					<div class="col-md-6 links">
						<i class="fa fa-cog fa-3x" aria-hidden="true"></i>
						<h3>ازاي تستخدم سوق نقل </h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Slider Show-->
	<!--Start Why Us-->
	<section class="why-us text-center" id="why-us">
		<h2 class="h1">لية تستخدم سوق نقل </h2>
		<div class="container">
			<div class="row marg-top">
				<div class="col-md-4  col-sm-6">
					<div class="row marg-bottom">
						<div class="col-xs-3">
							<i class="fa fa-link fa-5x edit"></i>
						</div>
						<div class="col-xs-9 text-justify">
							<h3>الامان</h3>
							<p>سوق نقل بيقوم بتامين <br>كل شحناتك</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="row marg-bottom">
						<div class="col-xs-3">
							<i class="fa fa-tachometer fa-2x edit"></i>
						</div>
						<div class="col-xs-9 text-justify">
							<h3>السرعة</h3>
							<p>سوق نقل بيقوم بتوصيل شحناتك <br>باسرع وقت ممكن</p>
						</div>
					</div>	
				</div>
				<div class="col-md-4  col-sm-6">
					<div class="row marg-bottom">
						<div class="col-xs-3">
							<i class="fa fa-credit-card fa-2x edit"></i>
						</div>
						<div class="col-xs-9 text-justify">
							<h3>التوفير </h3>
							<p>سوق نقل بيساعدك تنقل شحناتك بالسعر  <br>المناسب لك  </p>
						</div>
					</div>	
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="row marg-bottom">
						<div class="col-xs-3">
							<i class="fa  fa-line-chart fa-2x edit"></i>
						</div>
						<div class="col-xs-9 text-justify">
							<h3>الكفاءه </h3>
							<p>سوق نقل يوفر لك سائقين مدبين  <br> ومختارين باعلي كفاءه</p>
						</div>
					</div>	
				</div>
				<div class="col-md-4  col-sm-6">
					<div class="row marg-bottom">
						<div class="col-xs-3">
							<i class="fa fa-headphones fa-5x edit"></i>
						</div>
						<div class="col-xs-9 text-justify">
							<h3>خدمة العملاء</h3>
							<p>سوق نقل بيوفر لك خدمه عملاء مميزه  <br> تقدم لك المساعده  </p>
						</div>
					</div>	
				</div>
				<div class="col-md-4  col-sm-6">
					<div class="row marg-bottom">
						<div class="col-xs-3">
							<i class="fa fa-handshake-o fa-2x edit"></i>
						</div>
						<div class="col-xs-9 text-justify">
							<h3>الالتزام</h3>
							<p>سوق نقل يلتزم بكل ما سبق</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!--End why Us-->
	<!--Start How To Used-->
	<section class="how-used text-center" id="how-used">
		<div class="container">
			<h2 class="h1">ازاي تستخدم سوق نقل </h2>
			<div class="row">
				<div class="col-md-5 ">
					<div class="info-person tab">
						<h4>مسئول نقل</h4>
						<img class="img-responsive " src="images/how-to/shipper.png" alt="shipper">
						<span>اتبع الاتي </span>
						<div class="row text-center">
							<div class="col-xs-1 blocki">
								<i class="fa fa-long-arrow-left edit1" aria-hidden="true"></i>
								<i class="fa fa-long-arrow-left edit1" aria-hidden="true"></i>
								<i class="fa fa-long-arrow-left edit1" aria-hidden="true"></i>
								<i class="fa fa-long-arrow-left edit1" aria-hidden="true"> </i>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled text-left">
									<li> ادخل علي الموقع</li>
									<li> سجل بياناتك</li>
									<li><a  data-toggle="modal" data-target="#myapp">املي الطلب</a></li>
									<li>اختر السعر المناسب  </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-md-offset-2">
					<div class="info-person">
						<h4>كابتن</h4>
						<img class="img-responsive spech-img" src="images/how-to/captain.png"  alt="captin">
						<button class="btn bt-spechial" data-toggle="modal" data-target="#myModal">حمل التطبيق الان </button>
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">حمل الان</h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-xs-6 " style="border-left:1px solid #eee">
												<h3>تحميل للاندرويد </h3>
												<a href="#"><i class="fa fa-android fa-5x down-link" aria-hidden="true"></i></a>
											</div>
											<div class="col-xs-6">
												<h3>تحميل للايفون  </h3>
												<a href="#"><i class="fa fa-apple fa-5x down-link" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default btn-close" data-dismiss="modal">اغلاق</button>
									</div>
								</div>
							</div>
						</div>
						<img class="img-responsive" style="width:80%" src="images/how-to/Mobile-app_58.png" alt="mobile-app">
					</div>
				</div>
			</div>
		</div>
		<i class="fa fa-cogs spechial-icon" aria-hidden="true"></i>
	</section>
	<!--End How To used-->
	<!--Start About-Us -->
	<div class="about-us" id="about-us">
		<div class="container">
			<div class="about-intro">
				<h3 class="text-center">نبذه عنا</h3>
				<p class="lead">سوق نقل وسيله امنه ننقل بها  البضائع باقل تكلفه واكتر امان وافضل فريق عمل مختار <br>ما بين خدمه العملاء والسائقين.</p>
				<p class="lead">نهدف الي بناء منظومه توفر الوقت والجهد والمال .
					<br>سوق نقل  بالتعاون مع بنك ................
				</p>
			</div>
		</div>
	</div>
	<!--End About-Us -->
	<!--Start Contact-us -->
	<div class="contact hero hero--intro" id="contact">
		<div class="container">
			<h3>تواصل معنا </h3>
			<div class="row">
				<div class='col-md-12'>
					<form class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-4" style="position:relative">
								<input type="text" name="Name"  class="form-control label_better" placeholder="الاسم">
							</div>
							<div class="col-sm-4">
								<input type="text" name="Email" class="form-control label_better" placeholder="البريد الالكتروني">
							</div>
							<div class="col-sm-4">
								<input type="text" name="phone" class="form-control label_better" placeholder="التليفون">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-8">
								<textarea class="form-control" placeholder=" يسعدنا رسائلكم واقتراحاتكم " rows="7"></textarea>
							</div>
							<div class="col-sm-4 col-xs-9 col-sm-offset-0 col-xs-offset-1 text-center details">
								<div  class="detail">
									<p><span class="spea">العنوان : </span> 20 أ الدور 12 شقه رقم 1 <br><span style="display: inline-block;padding-right: 69px;">عمارات العبور مدينه نصر</span> </p>
									<p><span class="spea">التليفون : </span>01024098880 </p>
									<p><span class="spea">البريد الالكترونى  : </span> support@souqnaql.com  </p>
								</div>
							</div>
						</div>
						<div class="form-group commands">
							<button class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> ارسل </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End Contact-Us -->
	<!--Start Footer-->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="footer-intro">
						<h5>سوق نقل </h5>
						<p class="lead"> معلومات عن الشركه  معلومات عن الشركه معلومات عن الشركه معلومات عن الشركه </p>
						<div class="link-card">
							<img src='images/payment/cib.png' alt ="cib-card"/>
							<img src='images/payment/master.png' alt ="master-card"/>
							<img src='images/payment/visa.png' alt ="visa-card"/>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-md-offset-4">
					<div class="conact">
						<ul class="list-unstyled">
							<li><a href="#">الرئيسيه</a></li>
							<li><a href="#">من نحن</a></li>
							<li><a href="#">اتصل بنا </a></li>
							<li><span style="padding-left:33px;">تابعنا </span>
								<a href="#" target="_blank" ><i class="fa fa-facebook fa-lg"></i></a>
								<a href="#" target="_blank" ><i class="fa fa-twitter fa-lg"></i></a>
								<a href="#" target="_blank" ><i class="fa fa-google-plus fa-lg"></i></a>
							</li>
						</ul>
						<div class="down-app">
							<h6>تحميل التطبيق  الموبايل </h6>
							<a href="#"><i class="fa fa-android fa-4x " aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-apple fa-4x " aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 text-left">
					<p>جميع الحقوق محفوظه <span>لسوق نقل</span></p>
				</div>
				<div class="col-md-6 col-sm-6 text-right">
					<p>تم التصميم والتطوير بواسطه فريق سوق نقل</p>
				</div>
			</div>

		</div>
	</div>
	<!--End Footer-->
	<!--Start Scroll Top-->
	<div class="scroll_top">
		<i class="fa fa-chevron-up fa-lg"></i>
	</div>
	<!--End Scroll Top-->
	<!-- scripts-->
	<script src="/js/app.js"></script>
	<script src="/js/jquery.label_better.js"></script>
	<script src="/js/mycustem.js"></script>
	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() > 1){  
				$('nav').addClass("sticky");
				$(".navbar-default .navbar-nav > li > a ").addClass("sticky1");
			}
			else{
				$('nav').removeClass("sticky");
				$(".navbar-default .navbar-nav > li > a ").addClass("sticky1");
			}
		});
	</script>
	<script>
		$("input.label_better, textarea.label_better").label_better({
			animationTime: 500,
			easing: "bounce",
			offset: 0,
			position: "top",
			hidePlaceholderOnFocus: true
		});
	</script>
</body>
</html>