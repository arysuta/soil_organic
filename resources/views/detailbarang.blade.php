<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soil Organic Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="/css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="/css/style.css">


	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							{{-- <input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button> --}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul>
							<li><a href="{{route('/')}}">Home</a></li>
							<li><a href="{{route('Category.index')}}">Categories</a></li>
							<li><a href="{{route('about')}}">About us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>


	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
						<a href="{{route('/')}}"><img src="/images/dish-2-Copy.png" width="100" height="60" ></a>
						</div>						
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		
		<div class="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                           
                            <h2> </h2>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                           
                            <h2> </h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
  				
		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<img src="/images/soil-2.jpg" width="80" height="80">
						<h3>Detail Product</h3>
					</div>

					<div class="row"></div>
						<div class="col-md-3 animate-box">
							
						</div>
						<div class="col-md-3 animate-box text-center">
							<img src="{{asset('/files/'.$detail->detgambar[0]->nama_gambar)}}" width="50%" height="50%"/>
						</div>
						<div class="col-md-3 animate-box text-center" align="left">
						<br>
						<h4>Product Name : {{$detail->nama_barang}}</h4>
						<h4>Price : {{$detail->harga}} Idr</h4>
						<h4>Category :
						@foreach ($detail->detkategori as $value => $e)
                            @if($value < count($detail->detkategori) -1)
                         		{{$e->Kategori->kategori}},
                         	@else
                         		{{$e->Kategori->kategori}}
                         	@endif
                         @endforeach</h4>
						
					</div>
					<div class="col-md-3 animate-box">
							
						</div>
					</div>
					
				</div>
				
				<br>
				<br>
					<div class="col-md-6 col-md-offset-3 animate-box text-center style margin: 0 auto; display:block">
						<h3>Description</h3>
						<p>{{$detail->deskripsi}}</p>
						<p><a href="{{ URL::previous() }}" class="btn btn-primary">Back</a></p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-pb-sm">
                            <h2 >Soil Organic</h2>
                            <p>The only one organic foodstore in Seminyak who supports the campaign of minimum waste shopping.</p>
                            
                        </div>
                        <div class="col-md-4 col-pb-sm">
                            <h2>Order By</h2>
                            <div class="f-entry">
                                <a href="#" class="featured-img" style="background-image: url(/images/email.png);"></a>
                                <div class="desc">
                                    <span>Email</span>
                                    <h3>"<a>soilsoorganic@gmail.com</a></h3>
                                </div>
                            </div>
                            <div class="f-entry">
                                <a href="#" class="featured-img" style="background-image: url(/images/whatsapp.jpg);"></a>
                                <div class="desc">
                                    <span>WhatsApp</span>
                                    <h3><a>(+62) 81937222423</a></h3>
                                </div>
                            </div>
                            <div class="f-entry">
                                <a href="#" class="featured-img" style="background-image: url(/images/phone.png);"></a>
                                <div class="desc">
                                    <span>Phone</span>
                                    <h3><a>(+62) 81937222423</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-pb-sm">
                            <h2>Instagram</h2>
                            <div class="instagram">
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(/images/dessert-1.jpg);"></a>
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(/images/dessert-2.jpg);"></a>
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(/images/dish-9.jpeg);"></a>
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(/images/dish-2.jpg);"></a>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <span class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br></span> 
                                <span class="block">Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexel</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	
	</div>

	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Parallax -->
	<script src="/js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/magnific-popup-options.js"></script>
	<!-- Flexslider -->
	<script src="/js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="/js/bootstrap-datepicker.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="/js/main.js"></script>

	</body>
</html>

