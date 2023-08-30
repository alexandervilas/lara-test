<!DOCTYPE html>
<html lang="en">
<head>
	<title>Category V2</title>
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/icon-font-linea.css">
	<link rel="stylesheet" type="text/css" href="css/multirange.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/effect.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/category.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
	    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown">
                    <a href="#">Дом</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home_v1.html" title="">Дом 1</a></li>
                        <li class="level2"><a href="home_v2.html" title="">Дом 2</a></li>
                        <li class="level2"><a href="home_v3.html" title="">Дом 3</a></li>
                    </ul>
                </li>
                <li class="level1 active dropdown"><a href="#">Магазин</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <a href="#">Тип магазина</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="category_v1.html" title="">Категория V1</a></li>
                                    <li class="level3"><a href="category_v1_2.html" title="">Категория V1.2</a></li>
                                    <li class="level3"><a href="category_v2.html" title="">Категория V2</a></li>
                                    <li class="level3"><a href="category_v2_2.html" title="">Категория V2.2</a></li>
                                    <li class="level3"><a href="category_v3.html" title="">Категория V3</a></li>
                                    <li class="level3"><a href="category_v3_2.html" title="">Категория V3.2</a></li>
                                    <li class="level3"><a href="category_v4.html" title="">Категория V4</a></li>
                                    <li class="level3"><a href="category_v4_2.html" title="">Категория V4.2</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Один тип продукта</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="product_v1.html" title="">Одноместный продукт 1</a></li>
                                    <li class="level3"><a href="product_v2.html" title="">Одноместный продукт 2</a></li>
                                    <li class="level3"><a href="product_v3.html" title="">Одноместный продукт 3</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Страница заказа</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cartpage.html" title="">Страница корзины</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Проверить</a></li>
                                    <li class="level3"><a href="compare.html" title="">Сравнивать</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Быстрый просмотр</a></li>
                                    <li class="level3"><a href="trackyourorder.html">Отследить заказ</a></li>
                                    <li class="level3"><a href="wishlist.html">Список желаний</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1">
                    <a href="#">Страницы</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="about.html" title="About Us ">О нас </a></li>
                        <li class="level2"><a href="contact.html" title="Contact">Контакты</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Блог</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog.html" title="Blog Standar">Категория блога</a></li>
                        <li class="level2"><a href="blogdetail.html" title="Blog Gird">Детали блога</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
	<!-- Menu Mobile -->
	<div class="menu-mobile-left-content menu-bg-white">
		<ul>
            @foreach($topics_array as $category)
			<li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>{{ $category }}</p></a></li>
            @endforeach
        </ul>
	</div>
	<!-- Header Box -->
	<div class="wrappage">
        <header class="relative full-width">
            <div class=" container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class=" header-top">
                            <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                                <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Позвоните нам <span class="text-red bold">+7 900-900-0000</span>
                            </p>
                            <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
                                <ul class="clear-margin">
                                    <li class="relative"><a href="#">Мой счет</a></li>
                                    <li class="relative"><a href="#">Список желаний</a></li>
                                    <li class="relative">
                                        <a href="#">RU</a>
                                        <ul>
                                            <li class="relative"><a href="#">RU</a></li>
                                            <li class="relative"><a href="#">EN</a></li>
                                            <li class="relative"><a href="#">CN</a></li>
                                        </ul>
                                    </li>
                                    <li class="relative">
                                        <a href="#">RU</a>
                                        <ul>
                                            <li class="relative"><a href="#">RUB</a></li>
                                            <li class="relative"><a href="#">USD</a></li>
                                            <li class="relative"><a href="#">CAD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix header-content full-width relative">
                            <div class="clearfix icon-menu-bar">
                                <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                            </div>
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                            <div class="clearfix search-box relative float-left">
                                <form method="GET" action="/" class="">
                                    <div class="clearfix category-box relative">
                                        <select name="cate_search">
											<option>Все категории</option>
											@foreach($topics_array as $category)
												<option>{{ $category }}</option>
            								@endforeach
                                            
                                        </select>
                                    </div>
                                    <input type="text" name="s" placeholder="Введите ключевое слово здесь . . .">
                                    <button type="submit" class="animate-default button-hover-red">Поиск</button>
                                </form>
                            </div>
                            <div class="clearfix icon-search-mobile absolute">
                                <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">2</p>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">2</p>
                            </div>
                            <div class="cart-detail-header border">
                                <div class="relative">
                                    <div class="product-cart-son clearfix">
                                        <div class="image-product-cart float-left center-vertical-image ">
                                            <a href="#"><img src="img/product_image_6-min.png" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">MH02-Black09</a></p>
                                            <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                        </div>
                                    </div>
                                    <div class="product-cart-son">
                                        <div class="image-product-cart float-left center-vertical-image">
                                            <a href="#"><img src="img/product_image_7-min.png" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">Дорожная сумка для йоги</a></p>
                                            <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative border no-border-l no-border-r total-cart-header">
                                    <p class="bold clear-margin">Промежуточный итог:</p>
                                    <p class=" clear-margin bold">$700</p>
                                </div>
                                <div class="relative btn-cart-header">
                                    <a href="#" class="uppercase bold animate-default">Просмотреть корзину</a>
                                    <a href="#" class="uppercase bold button-hover-red animate-default">Проверить</a>
                                </div>
                            </div>
                            <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
                            <div class="clearfix box-search-mobile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
							<span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> Все категории</span>
						</a>
                    </div>
                </div>
            </div>
            <div class="menu-header-v3 hidden-ipx">
                <div class="container">
                    <div class="row">
                        <!-- Menu Page -->
                        <div class="menu-header full-width">
                            <ul class="clear-margin">
                                <li onclick="showMenuHomeV3()"><a class="animate-default" href="#"><i class="fa fa-list" aria-hidden="true"></i> Все категории</a></li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Дом</a>
                                    <ul class="sub-menu mega-menu">
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                            <p><a href="home_v1.html">Дом 1</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                            <p><a href="home_v2.html">Дом 2</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                            <p><a href="home_v3.html">Дом 3</a></p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Магазин</a>
                                    <div class="sub-menu mega-menu-v2">
                                        <ul>
                                            <li>Тип категории</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Категория v1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Категория v1.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Категория v2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Категория v2.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Категория v3</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Категория v3.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Категория v4</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Категория v4.2</a></li>
                                        </ul>
                                        <ul>
                                            <li>Один тип продукта</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Одноместный продукт 1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Одноместный продукт 2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Одноместный продукт 3</a></li>
                                        </ul>
                                        <ul>
                                            <li>Страница заказа</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Страница корзины</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Проверить</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Сравнивать</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">Быстрый просмотр</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Отследить заказ</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">Список желаний</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Страницы</a>
                                    <ul>
                                        <li class="title-hover-red"><a class="animate-default" href="about.html">О нас</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="contact.html">Контакты</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Блог</a>
                                    <ul>
                                        <li class="title-hover-red"><a class="animate-default" href="blog.html">Категория блога</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Детали блога</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- End Menu Page -->
                    </div>
                </div>
            </div>
            <div class="clearfix menu_more_header menu-web menu-bg-white">
                <ul>
                    <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Горячие предложения</p></a></li>
                    <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Еда</p></a></li>
                    <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Мобильный телефон и планшет</p></a></li>
                    <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Электрические приборы</p></a></li>
                    <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Электроника и технологии</p></a></li>
                    <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Мода</p></a></li>
                    <li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Здоровье и Красота</p></a></li>
                    <li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p>Мать и ребенок</p></a></li>
                    <li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Книги и канцелярские товары</p></a></li>
                    <li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Семейная жизнь</p></a></li>
                    <li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Спорт и активный отдых</p></a></li>
                    <li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Авто и мото</p></a></li>
                    <li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Ваучерный сервис</p></a></li>
                </ul>
            </div>
            <div class="header-ontop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="menu-header">
                                <ul class="main__menu clear-margin">
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Дом</a>
                                        <ul class="sub-menu mega-menu">
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                                <p><a href="home_v1.html">Дом 1</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                                <p><a href="home_v2.html">Дом 2</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                                <p><a href="home_v3.html">Дом 3</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Магазин</a>
                                        <div class="sub-menu mega-menu-v2">
                                            <ul>
                                                <li>Тип категории</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Категория v1</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Категория v1.2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Категория v2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Категория v2.2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Категория v3</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Категория v3.2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Категория v4</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Категория v4.2</a></li>
                                            </ul>
                                            <ul>
                                                <li>Один тип продукта</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Одноместный продукт 1</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Одноместный продукт 2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Одноместный продукт 3</a></li>
                                            </ul>
                                            <ul>
                                                <li>Страница заказа</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Страница корзины</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Проверить</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Сравнивать</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">Быстрый просмотр</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Отследить заказ</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">Список желаний</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Страницы</a>
                                        <ul>
                                            <li class="title-hover-red"><a class="animate-default" href="about.html">О нас</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="contact.html">Контакты</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Блог</a>
                                        <ul>
                                            <li class="title-hover-red"><a class="animate-default" href="blog.html">Категория блога</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Детали блога</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
	<!-- End Header Box -->
	<!-- Content Box -->
	<div class="relative full-width">
		<!-- Breadcrumb -->
		<div class="container-web relative">
			<div class="container">
				<div class="row">
					<div class="breadcrumb-web">
						<ul class="clear-margin">
							<li class="animate-default title-hover-red"><a href="#">Дом</a></li>
							<li class="animate-default title-hover-red"><a href="#">Все продукты</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		<!-- Content Category -->
		<div class="relative container-web">
			<div class="container">
				<div class="row">
					<div class="col-md-12 relative clear-padding">
						<div class="col-sm-12 col-xs-12 relative overfollow-hidden clear-padding button-show-sidebar">
							<p onclick="showSideBar()"><span class="ti-filter"></span> Боковая панель</p>
						</div>
						<div class="banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width">
							<img src="img/slide_category_v2-min.png" alt=""/>
							<a href="#"></a>
						</div>
					</div>
				</div>
				<div class="row ">
					<!-- Sider Bar -->
					<div class="col-md-3 relative right-padding-default clear-padding" id="slide-bar-category">
						<div class="col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
							<p class="title-siderbar bold">КАТЕГОРИИ</p>
							<ul class="clear-margin list-siderbar">
php artisan make:controller topicsController
								<li><a href="#">Еда</a></li>
								<li><a href="#">Мобильный телефон и планшет</a></li>
								<li><a href="#">Электрические приборы</a></li>
								<li><a href="#">Электроника и технологии</a></li>
								<li><a href="#">Мода</a></li>
								<li><a href="#">Здоровье и Красота</a></li>
								<li><a href="#">Мать и ребенок</a></li>
								<li><a href="#">Книги и канцелярские товары</a></li>
								<li><a href="#">Семейная жизнь</a></li>
								<li><a href="#">Спорт и активный отдых</a></li>
								<li><a href="#">Авто и мото</a></li>
							</ul>
						</div>
						<div class="col-sm-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
							<p class="title-siderbar bold">БРЕНДЫ</p>
							<ul class="check-box-custom clear-margin clear-margin">
								<li>
									<label>Apple  (465)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Asus  (344)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Аудио-Техника  (136)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Belkin  (121)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>BlueStone  (258)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Brother  (119)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Canon  (205)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Китай OEM  (113)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Comet  (330)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
							</ul>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 relative border bottom-margin-default sider-bar-category">
							<div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
								<p class="title-siderbar bold">Цена</p>
								<div class="range-slider">
									<input value="50" min="0" max="1000" class="multi-range" type="range">						
									<p class="text-range">Диапазон: <span class="number-range"></span></p>
								</div>
							</div>
							<div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
								<p class="title-siderbar bold top-padding-default">Цвет</p>
								<ul class="check-box-custom list-color clearfix clear-margin">
									<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
	  								<li>
										<label>
											<input type="checkbox" >
	  										<span class="checkmark"></span>
	  									</label>
	  								</li>
								</ul>
							</div>
							<div class="relative">
								<p class="title-siderbar bold top-padding-default">Размер</p>
								<ul class="check-box-custom clear-margin">
								<li>
									<label>S
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>M
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>L
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>XL
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>XXL
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>XXXL
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
							</ul>
							</div>
						</div>
						<div class="bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix">
							<div class="overfollow-hidden banners-effect5 relative center-vertical-image">
								<img src="img/banner_siderbar-min.png" alt="Siderbar" />
								<a href="#"></a>
							</div>
						</div>
					</div>
					<!-- End Sider Bar Box -->
					<!-- Content Category -->
					<div class="col-md-9 relative clear-padding">
						<!-- Product Content Category -->
						<div class="relative clearfix">
							<div class="bar-category bottom-margin-default border no-border-r no-border-l no-border-t">
								<div class="row">
									<div class="col-md-5 col-sm-5 col-xs-4">
										<p class="title-category-page clear-margin">Электронный</p>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative">
										<p class=" float-left">Показано 1–20 из 75 результатов</p>
										<a href="#" class=" float-left active-view-bar"><span class="icon-bar-category border ti-layout-grid3"></span></a>
										<a href="#" class=" float-left"><span class="icon-bar-category border ti-layout-list-thumb"></span></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_30-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Сумка почтальона</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_26-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Сумка для йоги Voyage</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_8-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">MH02-Black09</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_27-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Импульс Даффл2</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_28-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Сумка почтальона путника</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_29-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Полевой вестник</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_31-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">MH01-Black</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_32-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Импульсная спортивная сумка</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_33-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Рюкзак Endeavour Daytrip</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_4-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Эмиль Анри Брайзер r21</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_5-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Диам Спешиал 1</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_14-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Диам Спешиал 08</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_22-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Mauris varius</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_23-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Меценат ex</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_16-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Vel regione discere ut</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_24-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Наушники Beatvs Solo2</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_25-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Te eam iisque deseruisse</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
										<img src="img/product_home_9-min.png" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<h3 class="title-product clearfix full-width title-hover-black"><a href="#">Vel regione discere ut</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="pagging relative">
								<ul>
									<li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Первый</a></li>
									<li class="active-pagging"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="dots-pagging">. . .</li>
									<li><a href="#">102</a></li>
									<li><a href="#">Последний <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- End Product Content Category -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Sider Bar -->
	</div>
	<!-- End Content Box -->
	<!-- Support -->
		<div class=" support-box full-width bg-red support_box_v2">
			<div class="container-web">
				<div class=" container">
					<div class="row">
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
							<p>Бесплатная доставкаg</p>
							<p>При заказе от $1000</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
							<p>Поддерживать</p>
							<p>Пожизненная поддержка 24/7</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
							<p>Помочь партнеру</p>
							<p>Помощь во всех аспектах</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_phone_table_white-min.png" alt="Icon Phone Tablet" class="absolute">
							<p>Свяжитесь с нами</p>
							<p>+7 (900) 900 0000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End Content Box -->
	<!-- Footer Box -->
	<footer class="relative full-width">
		<div class=" top-footer full-width">
			<div class="clearfix container-web relative">
				<div class=" container">
					<div class="row">
						<div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
							<div class="clearfix text-subscribe">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<p>Подписаться на рассылку</p>
								<p>Получайте обновления о скидках и купонах.</p>
							</div>
							<div class="clearfix form-subscribe">
								<input type="text" name="email-subscribe" placeholder="Введите адрес электронной почты . . .">
								<button class="animate-default button-hover-red">Подписаться</button>
							</div>
						</div>
						<div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
							<a href="#"><img src="img/social_tw-min.png" alt="Icon Social Twiter"></a>
							<a href="#"><img src="img/social_fa-min.png" alt="Icon Social Facebook"></a>
							<a href="#"><img src="img/social_int-min.png" alt="Icon Social Instagram"></a>
							<a href="#"><img src="img/social_yt-min.png" alt="Icon Social Youtube" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix container-web relative">
			<div class=" container clear-padding">
				<div class="row">
					<div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
						<p>Мой счет</p>
						<ul class="list-footer">
							<li><a href="#">Мой счет</a></li>
							<li><a href="#">Авторизоваться</a></li>
							<li><a href="#">Моя тележка</a></li>
							<li><a href="#">Мой список пожеланий</a></li>
							<li><a href="#">Мое сравнение</a></li>
						</ul>
					</div>
					<div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
						<p>Информация</p>
						<ul class="list-footer">
							<li><a href="#">Информация</a></li>
							<li><a href="#">История заказов</a></li>
							<li><a href="#">Мой список пожеланий</a></li>
							<li><a href="#">Политика конфиденциальности</a></li>
							<li><a href="#">Карта сайта</a></li>
						</ul>
					</div>
					<div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
						<p>Наши услуги</p>
						<ul class="list-footer">
							<li><a href="#">Отозвать продукт</a></li>
							<li><a href="#">Подарочные сертификаты</a></li>
							<li><a href="#">Возврат и обмен</a></li>
							<li><a href="#">Варианты доставки</a></li>
							<li><a href="#">Условия эксплуатации</a></li>
						</ul>
					</div>
					<div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
						<p>Связаться с нами</p>
						<ul class="icon-footer">
							<li><i class="fa fa-home" aria-hidden="true"></i> Российская Федерация, г.Сочи</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> Main@site.ru</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> +7 900 900 0000</li>
							<li><i class="fa fa-fax" aria-hidden="true"></i>+7 900 900 0000</li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 - 20:00</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class=" bottom-footer full-width">
			<div class="clearfix container-web">
				<div class=" container">
					<div class="row">
						<div class="clearfix col-md-7 clear-padding copyright">
							<p class="clear-margin">Copyright © 2023 by A. M. All Rights Reserved.</p>
						</div>
						<div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
							<div class="icon_logo_footer float-right">
								<img src="img/image_payment_footer-min.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
	<!-- End Footer Box -->
	<script src="js/jquery-3.3.1.min.js" defer=""></script>
	<script src="js/bootstrap.min.js" defer=""></script>
	<script src="js/multirange.js" defer=""></script>
	<script src="js/owl.carousel.min.js" defer=""></script>
	<script src="js/sync_owl_carousel.js" defer=""></script>
	<script src="js/scripts.js" defer=""></script>
</body>
</html>