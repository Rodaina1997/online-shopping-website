<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OrganicFood</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">  
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.jpg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./home">Home</a></li>
                <li><a href="./shop">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./details">Shop Details</a></li>
                        <li><a href="./cart">Shoping Cart</a></li>
                        <li><a href="./checkout">Check Out</a></li>
                    </ul>
                </li>
                <li><a href="./contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Organic_food@hotmail.com</li>
                <li>Free Shipping for all Order of $100</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> Organic_food@hotmail.com</li>
                                <li>Free Shipping for all Order of $100</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3">
                    <div class ="row">
                        <div class="header__logo">
                            <a href="./home"><img src="img/logo.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./home">Home</a></li>
                            <li><a href="./shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./details">Shop Details</a></li>
                                    <li><a href="./cart">Shoping Cart</a></li>
                                    <li><a href="./checkout">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="./breakfast">Breakfast</a></li>
                            <li><a href="./lunch">Lunch</a></li>
                            <li><a href="./dinner">Dinner</a></li>
                            <li><a href="./snack">Snacks</a></li>
                            <li><a href="./juice">Fresh juices</a></li>
                            <li><a href="./fruit">Fresh fruits</a></li>
                            <li><a href="./dessert">Desserts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="home-slider owl-carousel">
	                   <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
	      	                <div class="overlay"></div>
	                           <div class="container">
                                   <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	                                   <div class="col-md-12 ftco-animate text-center">
	                                       <h1 class="mb-2">We serve Fresh Food &amp; Drinks</h1>
	                                       <h2 class="subheading mb-4">We deliver organic foods &amp; drinks</h2>
	                                       <p><a href="./shop" class="btn btn-primary">Shop now</a></p>
	                                   </div>

	                               </div>
	                           </div>
	                   </div>

	                   <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
	      	                <div class="overlay"></div>
                            <div class="container">
	                           <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	                               <div class="col-sm-12 ftco-animate text-center">
                                       <h1 class="mb-2">100%</h1>
                                       <h1 class="mb-2">Fresh &amp; Organic Foods</h1>
	                                   <h2 class="subheading mb-4">We deliver organic foods &amp; drinks</h2>
	                                   <p><a href="#" class="btn btn-primary">Shop Now</a></p>
	                               </div>

	                           </div>
	                       </div>
	                   </div>
	               </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

<!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">Breakfast</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="#">Lunch</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">Dinner</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="#">Desserts</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">Fresh Juices</a></h5>
                        </div>
                    </div>
                                        <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-6.jpg">
                            <h5><a href="#">Snacks</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-7.jpg">
                            <h5><a href="#">Fruit plates</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    
    <!-- Products Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Top Products</h2>
                    </div>
                    <div class="container">
	                   <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                           <div class="col-sm-12 ftco-animate text-center">
	                            <h6 class="subheading mb-4">Want to Order? click below!</h6>
                                <p><a href="./shop" class="btn btn-primary">Shop now</a></p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".breakfast">Breakfast</li>
                            <li data-filter=".lunch">Lunch</li>
                            <li data-filter=".dinner">Dinner</li>
                            <li data-filter=".snacks">Snacks</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix breakfast lunch">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cheese and Turkey subs</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dinner snacks">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.png">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Veggies and hummus</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dinner lunch">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Shrimp with rice and zucchini</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix snacks breakfast">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Baked apple slices with oats</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix lunch dinner">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Mexican mix bowl</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix breakfast dinner">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Egg toast and yougurt</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix lunch dinner">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Spaghetti and meatballs </a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix snacks breakfast">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Apple and strawberry with pb</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section End -->


    
    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12 text-center">
                        <h6>In our shop we understand that the human body needs healthy and clean food, we also understand pretty well the struggle of trying to live a healthy life style and still be able to eat super delicious meals! That's why we are offering you the lifestyle you dreamt of, without needing to prepare food and calculate it's calories!</h6>
                        <h5>All you need to do is few steps and the food will be at your doorstep!</h5>
                    <div class="footer__widget">
                        <h4> Prepared and delivered to you with L<i class="fa fa-heart" aria-hidden="true"></i>VE </h4>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer__widget">
                            <ul>
                                <li><a href="#">About Us</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="footer__widget">
                        <ul>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                
                </div>
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <ul>
                            <li><a href="#">Location</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main1.js"></script>


</body>

</html>
