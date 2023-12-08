<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        body {
            font-family: "Poppins", sans-serif;
            color: #444444;
        }
        a,
        a:hover {
            text-decoration: none;
            color: inherit;
        }
        .section-products {
            padding: 50px 0 54px;
        }
        .section-products .header {
            margin-bottom: 50px;
        }
        .section-products .header h3 {
            font-size: 1rem;
            color: #fe302f;
            font-weight: 500;
        }
        .section-products .header h2 {
            font-size: 2.2rem;
            font-weight: 400;
            color: #444444;
        }
        .section-products .single-product {
            margin-bottom: 26px;
        }
        .section-products .single-product .part-1 {
            position: relative;
            height: 290px;
            max-height: 290px;
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 10px;
        }
        .section-products .single-product .part-1::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            transition: all 0.3s;
        }
        .section-products .single-product:hover .part-1::before {
            transform: scale(1.2,1.2) rotate(5deg);
        }
        .section-products #product-1 .part-1::before {
            background: url("../assets/ladapp.jpg") no-repeat center;
            background-size: cover;
            border-radius: 10px;
            transition: all 0.3s;
        }
        .section-products #product-2 .part-1::before {
            background: url("../assets/ladahp.jpg") no-repeat center;
            background-size: cover;
        }
        .section-products #product-3 .part-1::before {
            background: url("../assets/ladam.jpg") no-repeat center;
            background-size: cover;
        }
        .section-products #product-4 .part-1::before {
            background: url("../assets/ladap.jpg") no-repeat center;
            background-size: cover;
        }
        .section-products #product-5 .part-1::before {
            background: url("../assets/ladah.jpg") no-repeat center;
            background-size: cover;
        }
        .section-products #product-6 .part-1::before {
            background: url("../assets/ladag.jpg") no-repeat center;
            background-size: cover;
        }

        .section-products .single-product .part-1 .premium {
            position: absolute;
            top: 15px;
            left: 20px;
            color: #ffffff;
            background-color: #fe302f;
            padding: 2px 8px;
            text-transform: uppercase;
            font-size: 0.85rem;
        }
        .section-products .single-product .part-1 .premium {
            left: 0;
        }
        .section-products .single-product .part-1 .sertifikasi {
            position: absolute;
            top: 15px;
            left: 20px;
            color: #ffffff;
            background-color: #00AC08;
            padding: 2px 8px;
            text-transform: uppercase;
            font-size: 0.85rem;
        }
        .section-products .single-product .part-1 .sertifikasi {
            left: 0;
        }
         .section-products .single-product .part-1 .standard {
            position: absolute;
            top: 15px;
            left: 20px;
            color: #ffffff;
            background-color: #5C5C5C;
            padding: 2px 8px;
            text-transform: uppercase;
            font-size: 0.85rem;
        }
        .section-products .single-product .part-1 .standard {
            left: 0;
        }
        .section-products .single-product .part-1 ul {
            position: absolute;
            background-color: #ffffff;
            border-radius: 2px;
            bottom: -55px;
            left: 25px;
            margin: 0;
            padding: 0;
            list-style: none;
            opacity: 0;
            transition: bottom 0.5s, opacity 0.6s;
        }
        .section-products .single-product .part-1 span {
            padding-left: 5px;
        }
        .section-products .single-product:hover .part-1 ul {
            bottom: 30px;
            opacity: 1;
        }

        .section-products .single-product .part-1 ul li {
            display: inline-block;
            margin-right: 4px;
        }

        .section-products .single-product .part-1 ul li a i span {
            display: inline-block;
            width: 100px;
            height: 45px;
            line-height: 45px;
            color: #444444;
            text-align: center;
            box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
            transition: color 0.2s;
        }

        .section-products .single-product .part-1 ul li a i span:hover {
            color: #fe302f;
        }
        .section-products .single-product .part-2 .product-title {
            font-size: 1.5rem
            margin-top: -3px;
            margin-bottom: -1px;
        }
        .section-products .single-product .part-2 .ratings {
            color: #FFAF00;
        }
        .section-products .single-product .part-2 .product-deskripsi {
            font-size: 0.7rem;
            margin-top: 3px;
        }
        .section-products .single-product .part-2 .product-price {
            font-size: 0.9rem;
        }
        .footer_area {
            background-color: #1C1C1C;
            margin-top: 20px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            padding: 40px;
        }
        .footer_area .row {
            margin-left: -25px;
            margin-right: -25px;
        }
        .footer_area .row .col,
        .footer_area .row .col-1,
        .footer_area .row .col-10,
        .footer_area .row .col-11,
        .footer_area .row .col-12,
        .footer_area .row .col-2,
        .footer_area .row .col-3,
        .footer_area .row .col-4,
        .footer_area .row .col-5,
        .footer_area .row .col-6,
        .footer_area .row .col-7,
        .footer_area .row .col-8,
        .footer_area .row .col-9,
        .footer_area .row .col-auto,
        .footer_area .row .col-lg,
        .footer_area .row .col-lg-1,
        .footer_area .row .col-lg-10,
        .footer_area .row .col-lg-11,
        .footer_area .row .col-lg-12,
        .footer_area .row .col-lg-2,
        .footer_area .row .col-lg-3,
        .footer_area .row .col-lg-4,
        .footer_area .row .col-lg-5,
        .footer_area .row .col-lg-6,
        .footer_area .row .col-lg-7,
        .footer_area .row .col-lg-8,
        .footer_area .row .col-lg-9,
        .footer_area .row .col-lg-auto,
        .footer_area .row .col-md,
        .footer_area .row .col-md-1,
        .footer_area .row .col-md-10,
        .footer_area .row .col-md-11,
        .footer_area .row .col-md-12,
        .footer_area .row .col-md-2,
        .footer_area .row .col-md-3,
        .footer_area .row .col-md-4,
        .footer_area .row .col-md-5,
        .footer_area .row .col-md-6,
        .footer_area .row .col-md-7,
        .footer_area .row .col-md-8,
        .footer_area .row .col-md-9,
        .footer_area .row .col-md-auto,
        .footer_area .row .col-sm,
        .footer_area .row .col-sm-1,
        .footer_area .row .col-sm-10,
        .footer_area .row .col-sm-11,
        .footer_area .row .col-sm-12,
        .footer_area .row .col-sm-2,
        .footer_area .row .col-sm-3,
        .footer_area .row .col-sm-4,
        .footer_area .row .col-sm-5,
        .footer_area .row .col-sm-6,
        .footer_area .row .col-sm-7,
        .footer_area .row .col-sm-8,
        .footer_area .row .col-sm-9,
        .footer_area .row .col-sm-auto,
        .footer_area .row .col-xl,
        .footer_area .row .col-xl-1,
        .footer_area .row .col-xl-10,
        .footer_area .row .col-xl-11,
        .footer_area .row .col-xl-12,
        .footer_area .row .col-xl-2,
        .footer_area .row .col-xl-3,
        .footer_area .row .col-xl-4,
        .footer_area .row .col-xl-5,
        .footer_area .row .col-xl-6,
        .footer_area .row .col-xl-7,
        .footer_area .row .col-xl-8,
        .footer_area .row .col-xl-9,
        .footer_area .row .col-xl-auto {
            padding-right: 25px;
            padding-left: 25px;
        }

        .single-footer-widget {
            margin-top: 20px;
            position: relative;
            z-index: 1;
        }
        .single-footer-widget .copywrite-text a {
            color: #fff;
            font-size: 1rem;
        }
        .single-footer-widget .copywrite-text a:hover,
        .single-footer-widget .copywrite-text a:focus {
            color: #fff;
        }
        .single-footer-widget .widget-title {
            margin-bottom: 1.5rem;
        }
        .single-footer-widget .footer_menu li a {
            color: #DBDBDB;
            margin-bottom: 1rem;
            display: block;
            font-size: 1rem;
        }
        .single-footer-widget .footer_menu li a:hover,
        .single-footer-widget .footer_menu li a:focus {
            color: #3f43fd;
        }
        .single-footer-widget .footer_menu li:last-child a {
            margin-bottom: 0;
        }

        .footer_social_area {
            position: relative;
            z-index: 1;
        }
        .footer_social_area a {
            border-radius: 50%;
            height: 40px;
            text-align: center;
            width: 40px;
            display: inline-block;
            background-color: #f5f5ff;
            line-height: 40px;
            -webkit-box-shadow: none;
            box-shadow: none;
            margin-right: 10px;
        }
        .footer_social_area a i {
            line-height: 36px;
        }
        .footer_social_area a:hover,
        .footer_social_area a:focus {
            color: #ffffff;
        }

@-webkit-keyframes bi-cycle {
            0% {
                left: 0;
            }
            100% {
                left: 100%;
            }
        }

@keyframes bi-cycle {
            0% {
                left: 0;
            }
            100% {
                left: 100%;
            }
        }
        ol li, ul li {
            list-style: none;
        }

        ol, ul {
            margin: 0;
            padding: 0;
        }
    </style>
    <!---nav start-->
    @include('layouts.navbar')
    <!--nav stop-->
    <div class="container">
        <section class="section-products">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="header">
                            <h3>We Offer Quality</h3>
                            <h2>Popular Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
  @forelse($products as $allproduct)
  
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-1" class="single-product">
                            <div class="part-1">
<span class="premium"style="background-color: {{call_user_func($getColorByQuality,$allproduct->quality->name)}}">
{{$allproduct->quality->name}}
</span>
        <img src="{{asset('storage/' . $allproduct->image)}}" alt="mana gambarnya"width:"100px;">
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title"> {{$allproduct->name}}</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">{{$allproduct->deskripsi}}.</h3>
                                <h4 class="product-price">Harga {{number_format($allproduct->price,0,',','.')}}/kg</h4>
                            </div>
                        </div>
                    </div>
  @empty
  Data Masih Kosong
  @endforelse

                    <!-- Single Product -->
                </div>
            </div>
        </section>
    </div>
    <!--footer strat-->
    <footer class="footer_area section_padding_130_0">
        <div class="container">
            <div class="row">
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Footer Logo-->
                        <div class="footer-logo mb-3"></div>
                        <p style="color: #DDDEDC;">
                            Appland is completely creative, lightweight, clean app landing page.
                        </p>
                        <!-- Copywrite Text-->
                        <div class="copywrite-text mb-5">
                            <p class="mb-0" style="color: #DDDEDC;">
                                Made with <i class="lni-heart mr-1"></i>by <a class="ml-1" style="color: #363AFF;" href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a>
                            </p>
                        </div>
                        <!-- Footer Social Area-->
                        <div class="footer_social_area">
                            <a href="https://www.facebook.com/tsts.hajiku" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa-brands fa-facebook" style="color: #0054FF;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fa-brands fa-instagram" style="color: #FF2200;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github"><i class="fa-brands fa-github" style="color: #080808;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa-brands fa-twitter" style="color: #1567FF;"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title text-light">Contact</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Email Us</a></li>
                                <li><a href="https://wa.me/087893446255">Whatsapps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer stop-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>