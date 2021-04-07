<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
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
                    <div class="header__logo">
                        <a href="./home"><img src="img/logo.jpg" alt=""></a>
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
    <section class="hero hero-normal">
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
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./home">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($orders as $order)
                                    <td class="shoping__cart__item">
                                    <img src={{$order->Order_Img}} alt="" style="width:150px;height:150px;border-radius:5px;">
                                        <h5>{{$order->Order_Name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <h6>{{$order->Order_Price}}</h6>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <a href="{{ route('updated',['id'=>$order->Order_Id])}}">
                                            <i class="pro-qty">
                                         <input name="quant" type="txt" value="{{ $order->Order_Quantity }}" >
                                            <!-- <span class="inc qtybtn">+</span>-->
                                            </i> 
                                            </a>    
                                        </div>
                                    </td>
                                    <td>
                                    <div class="shoping__cart__total">
                                    <h7>{{$order->Order_Total}}</h7>                                    
                                    </div>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <a href="{{ route('deleted',['id'=>$order->Order_Id])}}"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                @endforeach 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ url('shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span>{{$total}}</span></li>
                        </ul>
                        <a href="{{ url('checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->



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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
