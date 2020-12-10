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
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
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
                            <a href="{{route('/')}}"><img src="/images/dish-2-Copy.png" width="120" height="80"></a>
                        </div>
                        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    </div>
                </div>
            </div>
        </header>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div class="desc">
                                        {{-- <span class="icon"><i class="flaticon-cutlery"></i></span> --}}
                                        <h1>Eco-Friendly Organic Foodstore</h1>
                                        <p>The only one organic foodstore in Seminyak who supports the campaign of minimum waste shopping</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div class="desc">
                                        {{-- <span class="icon"><i class="flaticon-cutlery"></i></span> --}}
                                        <h1>Fresh and Healthy Food</h1>
                                        <p>We provide the authentic of Bali's Soil product just for you</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div class="desc">
                                        {{-- <span class="icon"><i class="flaticon-cutlery"></i></span> --}}
                                        <h1>Locally Produced Foodstuffs</h1>
                                        <p>99% of our products are made in Bali in order to encourage the local farm and local business to evolved</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div class="desc">
                                        {{-- <span class="icon"><i class="flaticon-cutlery"></i></span> --}}
                                        <h1>Good Offer and Free Delivery</h1>
                                        <p>Get your 10% discount every sunday and free delivery for Seminyak Area</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>   
                </ul>
                <div class="mouse">
                   <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"></div>
                   </a>
                </div>
            </div>
        </aside>

        <div class="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            <span class="icon">
                                <i class="icon-map4"></i>
                            </span>
                            <h2>Address</h2>
                            <p>Jl. Mertanadi No. 11, Seminyak, Badung, Bali</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            <span class="icon">
                                <i class="icon-clock4"></i>
                            </span>
                            <h2>Opening Time</h2>
                            <p>Every Day</p>
                            <span>8am - 9pm</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            <span class="icon">
                                <i class="icon-mobile2"></i>
                            </span>
                            <h2>Contact</h2>
                            <p>Phone : (+62) 81937222423</p>
                            <p>Instagram : soilorganicgrocersbali</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="intro animate-box">
                            <span class="icon">
                                <i class="icon-envelope"></i>
                            </span>
                            <h2>Email</h2>
                            <p>soilsoorganic@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="goto-here"></div>
        <br>
        <br>
        <br>
        <br>
        <div class="colorlib-menu" style="padding-bottom: 2px">
            <div class="container">
                <div class="colorlib-menu-2">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
                            <img src="images/soil-2.png" width="80" height="80">
                            <h2>Product by Category</h2>
                            <p>Nurture by Nature</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="main">
                                    <div class="row">
                                    @foreach ($kategoris as $category)
                                        <div class="col-md-6">
                                            <ul class="menu-dish">

                                       
                                          <li>
                                            <figure class="dish-entry">
                                                <div class="dish-img" style="background-image: url(/category_img/{{$category->kategori_gambar}});"></div>
                                            </figure>
                                            <div class="text">
                                              <a href="{{route('Category.index')}}/{{$category->id}}">{{$category->kategori}}</a>
                                            </div>
                                          </li>
                                    
                                            
                                        </ul>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12 animate-box text-center">
                            <p><a href="{{route('Category.index')}}" class="btn btn-primary btn-outline btn-md">More Category</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="colorlib-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
                        <img src="images/soil-2.jpg" width="80" height="80">
                        <h2>Our Store Sneak Peak</h2>
                        <p>A little cute store which is located in the most touristic area Seminyak, find your favorite healhy food on our heavenly shelfs</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="dish-wrap">
                            <div class="wrap">
                                <div class="dish-img" style="background-image: url(images/stores-1.jpeg);"></div>
                                <div class="desc">
                                    <h2><a href="#">Luto Strawberry Dish</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="dish-wrap">
                            <div class="wrap">
                                <div class="dish-img" style="background-image: url(images/stores-2.jpeg);"></div>
                                <div class="desc">
                                    <h2><a href="#">Pizza with strawberries</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="dish-wrap">
                            <div class="wrap">
                                <div class="dish-img" style="background-image: url(images/stores-3.jpeg);"></div>
                                <div class="desc">
                                    <h2><a href="#">Luto Grilled Beef</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

        <div class="colorlib-testimony" style="background-image: url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
                        <h2></h2>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        <p>"Better be environmental than judgmental</p>
                                        <span>" &mdash; Surya</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        <p>"There is no love sincerer than the love for food</p>
                                        <span>" &mdash; George Bernard Shaw</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        <p>"Once upon a time all food was organic</p>
                                        <span>" &mdash; unknown</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-pb-sm">
                            <h2 >Soil Organic</h2>
                            <p>The only one organic foodstore in Seminyak who supports the campaign of minimum waste shopping.</p>
                            
                        </div>
                        <div class="col-md-4 col-pb-sm">
                            <h2>Order Here</h2>
                            <div class="f-entry">
                                <a href="#" class="featured-img" style="background-image: url(images/email.png);"></a>
                                <div class="desc">
                                    <span>Email</span>
                                    <h3>"<a>soilsoorganic@gmail.com</a></h3>
                                </div>
                            </div>
                            <div class="f-entry">
                                <a href="#" class="featured-img" style="background-image: url(images/whatsapp.jpg);"></a>
                                <div class="desc">
                                    <span>WhatsApp</span>
                                    <h3><a>(+62) 81937222423</a></h3>
                                </div>
                            </div>
                            <div class="f-entry">
                                <a href="#" class="featured-img" style="background-image: url(images/phone.png);"></a>
                                <div class="desc">
                                    <span>Phone</span>
                                    <h3><a>(+62) 81937222423</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-pb-sm">
                            <h2>Instagram</h2>
                            <div class="instagram">
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(images/dessert-1.jpg);"></a>
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(images/dessert-2.jpg);"></a>
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(images/dish-9.jpeg);"></a>
                                <a href="https://instagram.com/soilorganicgrocersbali?utm_source=ig_profile_share&igshid=roimnr6wdtox" target="_blank" class="insta-img" style="background-image: url(images/dish-2.jpg);"></a>
                                
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
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>

    </body>
</html>

