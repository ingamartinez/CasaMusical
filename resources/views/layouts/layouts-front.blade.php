<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') | Casa Musical Cartagena</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="social-icons pull-left">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contactinfo pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row" style="display: flex">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        {{--<a href="index.html"><img src="images/home/logo.png" alt=""/></a>--}}
                        <a href="index.html"><img class="img-resize-logo" src={{url('images/home/cm-logo.png')}} alt=""/></a>
                    </div>
                </div>
                <div class="col-sm-8" style="display: flex;flex-direction: row;flex-wrap: wrap;">
                    <div class="col-sm-12">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Cuenta</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Lista de deseos</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Ingresar</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12" style="align-self: flex-end;">
                        <div class="shop-menu pull-right">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Buscar"/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="">
                    <div id="cbp-hrmenu" class="cbp-hrmenu">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-home"></i></a>
                            </li>
                            @foreach($categorias as $categoria)
                                <li class="">
                                    <a href="#">{{$categoria->nombre}}</a>


                                        <div class="cbp-hrsub">
                                            <div class="cbp-hrsub-inner">
                                                @foreach($categoria->subCategories as $subcategoria)
                                                <div>
                                                    <h4><a href="#">{{$subcategoria->nombre}}</a></h4>
                                                    {{--<ul>--}}
                                                        {{--<li><a href="#">{{$subcategoria->nombre}}</a></li>--}}
                                                    {{--</ul>--}}
                                                </div>
                                                @endforeach
                                            </div><!-- /cbp-hrsub-inner -->
                                        </div><!-- /cbp-hrsub -->


                                </li>
                            @endforeach
                            {{--<li class="active-nav">--}}
                                {{--<a href="#"><i class="fa fa-home"></i></a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="#">Products</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Downloads</a>--}}
                                {{--<div class="cbp-hrsub">--}}
                                    {{--<div class="cbp-hrsub-inner">--}}
                                        {{--<div>--}}
                                            {{--<h4>Education &amp; Learning</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Learn Thai</a></li>--}}
                                                {{--<li><a href="#">Math Genius</a></li>--}}
                                                {{--<li><a href="#">Chemokid</a></li>--}}
                                            {{--</ul>--}}
                                            {{--<h4>Professionals</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Success 1.0</a></li>--}}
                                                {{--<li><a href="#">Moneymaker</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Entertainment</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Gadget Finder</a></li>--}}
                                                {{--<li><a href="#">Green Tree Express</a></li>--}}
                                                {{--<li><a href="#">Green Tree Pro</a></li>--}}
                                                {{--<li><a href="#">Holy Cannoli</a></li>--}}
                                                {{--<li><a href="#">Wobbler 3.0</a></li>--}}
                                                {{--<li><a href="#">Coolkid</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Games</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Catch the Bullet</a></li>--}}
                                                {{--<li><a href="#">Snoopydoo</a></li>--}}
                                                {{--<li><a href="#">Fallen Angel</a></li>--}}
                                                {{--<li><a href="#">Sui Maker</a></li>--}}
                                                {{--<li><a href="#">Wave Master</a></li>--}}
                                                {{--<li><a href="#">Golf Pro</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- /cbp-hrsub-inner -->--}}
                                {{--</div><!-- /cbp-hrsub -->--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Applications</a>--}}
                                {{--<div class="cbp-hrsub">--}}
                                    {{--<div class="cbp-hrsub-inner">--}}
                                        {{--<div>--}}
                                            {{--<h4>Learning &amp; Games</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Catch the Bullet</a></li>--}}
                                                {{--<li><a href="#">Snoopydoo</a></li>--}}
                                            {{--</ul>--}}
                                            {{--<h4>Utilities</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Gadget Finder</a></li>--}}
                                                {{--<li><a href="#">Green Tree Express</a></li>--}}
                                                {{--<li><a href="#">Green Tree Pro</a></li>--}}
                                                {{--<li><a href="#">Wobbler 3.0</a></li>--}}
                                                {{--<li><a href="#">Coolkid</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Education</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Learn Thai</a></li>--}}
                                                {{--<li><a href="#">Math Genius</a></li>--}}
                                                {{--<li><a href="#">Chemokid</a></li>--}}
                                            {{--</ul>--}}
                                            {{--<h4>Professionals</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Success 1.0</a></li>--}}
                                                {{--<li><a href="#">Moneymaker</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- /cbp-hrsub-inner -->--}}
                                {{--</div><!-- /cbp-hrsub -->--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Projects</a>--}}
                                {{--<div class="cbp-hrsub">--}}
                                    {{--<div class="cbp-hrsub-inner">--}}
                                        {{--<div>--}}
                                            {{--<h4>Learning &amp; Games</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Catch the Bullet</a></li>--}}
                                                {{--<li><a href="#">Snoopydoo</a></li>--}}
                                                {{--<li><a href="#">Fallen Angel</a></li>--}}
                                                {{--<li><a href="#">Sui Maker</a></li>--}}
                                                {{--<li><a href="#">Wave Master</a></li>--}}
                                                {{--<li><a href="#">Golf Pro</a></li>--}}
                                            {{--</ul>--}}
                                            {{--<h4>Utilities</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Gadget Finder</a></li>--}}
                                                {{--<li><a href="#">Green Tree Express</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Entertainment</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Gadget Finder</a></li>--}}
                                                {{--<li><a href="#">Green Tree Express</a></li>--}}
                                                {{--<li><a href="#">Green Tree Pro</a></li>--}}
                                                {{--<li><a href="#">Holy Cannoli</a></li>--}}
                                                {{--<li><a href="#">Wobbler 3.0</a></li>--}}
                                                {{--<li><a href="#">Coolkid</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- /cbp-hrsub-inner -->--}}
                                {{--</div><!-- /cbp-hrsub -->--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Freeware</a>--}}
                                {{--<div class="cbp-hrsub">--}}
                                    {{--<div class="cbp-hrsub-inner">--}}
                                        {{--<div>--}}
                                            {{--<h4>Utilities</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Green Tree Pro</a></li>--}}
                                                {{--<li><a href="#">Wobbler 3.0</a></li>--}}
                                                {{--<li><a href="#">Coolkid</a></li>--}}
                                            {{--</ul>--}}
                                            {{--<h4>Education</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Learn Thai</a></li>--}}
                                                {{--<li><a href="#">Math Genius</a></li>--}}
                                                {{--<li><a href="#">Chemokid</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Professionals</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Success 1.0</a></li>--}}
                                                {{--<li><a href="#">Moneymaker</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Learning &amp; Games</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Catch the Bullet</a></li>--}}
                                                {{--<li><a href="#">Snoopydoo</a></li>--}}
                                                {{--<li><a href="#">Fallen Angel</a></li>--}}
                                                {{--<li><a href="#">Sui Maker</a></li>--}}
                                                {{--<li><a href="#">Wave Master</a></li>--}}
                                                {{--<li><a href="#">Golf Pro</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- /cbp-hrsub-inner -->--}}
                                {{--</div><!-- /cbp-hrsub -->--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Products 2</a>--}}
                                {{--<div class="cbp-hrsub">--}}
                                    {{--<div class="cbp-hrsub-inner">--}}
                                        {{--<div>--}}
                                            {{--<h4>Learning &amp; Games</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Catch the Bullet</a></li>--}}
                                                {{--<li><a href="#">Snoopydoo</a></li>--}}
                                                {{--<li><a href="#">Fallen Angel</a></li>--}}
                                                {{--<li><a href="#">Sui Maker</a></li>--}}
                                                {{--<li><a href="#">Wave Master</a></li>--}}
                                                {{--<li><a href="#">Golf Pro</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Utilities</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Gadget Finder</a></li>--}}
                                                {{--<li><a href="#">Green Tree Express</a></li>--}}
                                                {{--<li><a href="#">Green Tree Pro</a></li>--}}
                                                {{--<li><a href="#">Wobbler 3.0</a></li>--}}
                                                {{--<li><a href="#">Coolkid</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<h4>Education</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Learn Thai</a></li>--}}
                                                {{--<li><a href="#">Math Genius</a></li>--}}
                                                {{--<li><a href="#">Chemokid</a></li>--}}
                                            {{--</ul>--}}
                                            {{--<h4>Professionals</h4>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Success 1.0</a></li>--}}
                                                {{--<li><a href="#">Moneymaker</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- /cbp-hrsub-inner -->--}}
                                {{--</div><!-- /cbp-hrsub -->--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                        <li data-target="#slider-carousel" data-slide-to="3"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://scontent.feoh1-1.fna.fbcdn.net/v/t31.0-8/14372075_953095618150180_546759351148078433_o.jpg?oh=9d97b803c6d2970342e46742815c6b77&oe=58DFCC1C" class="img-responsive" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/home/banner1.PNG" class="img-responsive" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/home/banner2.PNG" class="img-responsive" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/home/banner3.PNG" class="img-responsive" alt=""/>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#cuerdas">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Cuerdas
                                    </a>
                                </h4>
                            </div>
                            <div id="cuerdas" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Guitarras Acusticas </a></li>
                                        <li><a href="#">Guitarras Electroacusticas </a></li>
                                        <li><a href="#">Guitarras Electricas </a></li>
                                        <li><a href="#">Bajos</a></li>
                                        <li><a href="#">Accesorios</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#viento">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Viento
                                    </a>
                                </h4>
                            </div>
                            <div id="viento" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Clarinete</a></li>
                                        <li><a href="#">Flautas</a></li>
                                        <li><a href="#">Trompetas</a></li>
                                        <li><a href="#">Acordeones</a></li>
                                        <li><a href="#">Accesorios</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#percusion">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Percusión
                                    </a>
                                </h4>
                            </div>
                            <div id="percusion" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Maracas</a></li>
                                        <li><a href="#">Claves</a></li>
                                        <li><a href="#">Harmonicas</a></li>
                                        <li><a href="#">Redoblantes</a></li>
                                        <li><a href="#">Baterias</a></li>
                                        <li><a href="#">Timbales</a></li>
                                        <li><a href="#">Congas</a></li>
                                        <li><a href="#">Bongo</a></li>
                                        <li><a href="#">Guiro</a></li>
                                        <li><a href="#">Campanas</a></li>
                                        <li><a href="#">Campanas</a></li>
                                        <li><a href="#">Accesorios</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Teclados</a></h4>
                            </div>
                        </div>
                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(50)</span>Yamaha</a></li>
                                <li><a href="#"> <span class="pull-right">(56)</span>Tastark </a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Nux </a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Dsw </a></li>
                                <li><a href="#"> <span class="pull-right">(5)</span>Medeli </a></li>
                                <li><a href="#"> <span class="pull-right">(9)</span>Palmer</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="img-responsive" src="images/home/product2.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="img-responsive" src="images/home/product3.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>

                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="img-responsive" src="images/home/product4.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>

                                <img src="images/home/new.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="img-responsive" src="images/home/product5.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>

                                <img src="images/home/sale.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="img-responsive" src="images/home/product6.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>

                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="img-responsive" src="images/home/product1.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>

                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!--features_items-->

            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address"/>
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Get the most recent updates from <br/>our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank"
                                                           href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src={{asset('js/jquery.js')}}></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/main.js"></script>
<script src="js/cbpHorizontalMenu.js"></script>

<script>
    $(function() {
        cbpHorizontalMenu.init();
    });
</script>

@stack('script')
</body>
</html>