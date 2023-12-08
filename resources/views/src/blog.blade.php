<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/abouts/about-1/assets/css/about-1.css" />
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
        .section-blog {
            background-color: #F5F5F5;
        }
        .section-products {
            padding: 35px 0 50px;
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

        .contact-area {
            margin-top: -10px;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-color: #FAFAFF;
        }

@media only screen and (max-width:768px) {
            .contact {
                margin-top: -20px;
                margin-bottom: 60px;
            }
        }

        .contact input {
            background: #fff;
            border-top: 0.4px solid #070F00;
            border-right: 1.6px solid #070F00;
            border-bottom: 1.2px solid #070F00;
            border-left: 0.8px solid #070F00;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #232434;
            font-size: 16px;
            height: 60px;
            padding: 10px;
            width: 100%;
            font-family: 'poppins', sans-serif;
            padding-left: 30px;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .contact textarea {
            border-top: 0.4px solid #070F00;
            border-right: 1.6px solid #070F00;
            border-bottom: 1.2px solid #070F00;
            border-left: 0.8px solid #070F00;
            background: #fff;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #232434;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            font-family: 'poppins', sans-serif;
            padding-left: 30px;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .contact input:focus {
            border-radius: 5px;
            background: #fff;
            border: 1.6px solid #070F00;
            color: #232434;
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: 0 none;
        }

        .contact textarea:focus {
            border-radius: 5px;
            background: #fff;
            border: 1.6px solid #070F00;
            color: #232434;
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: 0 none;
        }

        .form-control::placeholder {
            color: #232434;
            opacity: 1;
        }
        .form-group {
            padding-top: 10px;
        }
        .form-btn {
            padding-top: 20px;
        }
        .btn-contact-bg {
            border-radius: 30px;
            color: #fff;
            outline: medium none !important;
            padding: 15px 27px;
            text-transform: capitalize;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            background: #7564e5;
            font-family: 'poppins', sans-serif;
            cursor: pointer;
            width: 100%;
        }

        .btn-contact-bg:hover,
        .btn-contact-bg:focus {
            background: #01B50E;
            color: #fff;
        }
        .single_address {
            overflow: hidden;
            margin-bottom: 10px;
            padding-left: 40px;
        }

@media only screen and (max-width:768px) {
            .single_address {
                padding-left: 0px;
            }
        }

        .single_address .logo-address {
            background: #f6f6f6;
            color: #7564e5;
            border-radius: 30px;
            width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
            float: left;
            margin-right: 14px;
            font-size: 22px;
            -webkit-box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .single_address:hover .logo-address {
            background: #7564e5;
            color: #fff;
        }

        .single_address h4 {
            font-size: 18px;
            margin-bottom: 0px;
            overflow: hidden;
            font-weight: 600;
        }

        .single_address p {
            overflow: hidden;
            margin-top: 5px;
        }

        .section-title h1 {
            font-size: 44px;
            font-weight: 500;
            margin-top: 0;
            position: relative;
            text-transform: capitalize;
            margin-bottom: 15px;
        }
        .section-title p {
            padding: 0 10px;
            width: 70%;
            margin: auto;
            letter-spacing: 1px;
        }
        .section-title {
            margin-bottom: 60px;
        }
        .text-center {
            text-align: center!important;
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
    <!--nav start-->
@include('layouts.navbar')
    <!--nav stop-->
    <!---carousel start-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/lada3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-white">
                    <h5>Lada berkualitas</h5>
                    <p>
                        kami memproduksi lada yang terpilih dan wajib memiliki spesifikasi pasaran
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/lada2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-white">
                    <h5>Proses Pengolaan lada</h5>
                    <p>
                        Proses pengolaan sangatla penting sebab menentukan kualitas dari product kami
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/lada4.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-white">
                    <h5>Perawatan perkebunan</h5>
                    <p>
                        Perkebunan yang dirawat dengan baik akan mengasilkan Lada yang bermutu dan bekualitas
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!---carousel stop-->
    <!-- artikel blog start -->
    <section class="section-blog py-3 py-md-5 pt-4 py-xl-8">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="h1 mb-3">Apa yang ditawarkan?</h2>
                            <p class="lead fs-4 text-secondary mb-3">
                                Berfokus pada bidang eksportir bahan mentah dan mencari produsen yang tertark dengan product yang kami tawarkan.
                            </p>
                            <p class="mb-5">
                                Saat ini Kami menawarkan product terbaik,yaitu berabagai macam lada yang siap diolah menjadi bahan baku dapur dan kantor cabang kami sudah tersedia dibeberapa daerah demi menyuplai kebutuhan produsen dengan begitu kami mampu bersaing dengan suplayer lain.
                            </p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">Product Terbaik</h4>
                                            <p class="text-secondary mb-0">
                                                Melalui proses yang ketat demi menghasilkan kualitas lada premium.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4">
                                            <i class="fa-solid fa-certificate fa-2x" style="color: #FF9A00;"></i>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">Tersertifikasi</h4>
                                            <p class="text-secondary mb-0">
                                                Product kami terdaftar dikemendagri sebagai bahan yang siap diolaah.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- artikel blog stop-->
    <!--product strat-->
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
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-1" class="single-product">
                            <div class="part-1">
                                <span class="premium">Premium</span>
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title">Lada Putih</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">sebuah puncak dari kehalusan rempah-rempah.</h3>
                                <h4 class="product-price">Harga Rp70.220/kg</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-2" class="single-product">
                            <div class="part-1">
                                <span class="premium">Premium</span>
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title">Lada Hitam</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">hotam pekat seperti  keledai malika.</h3>
                                <h4 class="product-price">Harga Rp87.540/kg</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-3" class="single-product">
                            <div class="part-1">
                                <span class="sertifikasi">Sertifikasi</span>
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title">Lada Merah</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">bumbu penting didunia restoraan</h3>
                                <h4 class="product-price">Harga Rp57.00/kg</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-4" class="single-product">
                            <div class="part-1">
                                <span class="sertifikasi">Sertifikasi</span>
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title">Lada Putih</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">rempah-rempah yang laku dipasaran</h3>
                                <h4 class="product-price">Harga Rp77.450/kg</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-5" class="single-product">
                            <div class="part-1">
                                <span class="sertifikasi">Sertifikasi</span>
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title">Lada Hitam</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">hitam menunjukan proses penjemuran</h3>
                                <h4 class="product-price">Harga Rp64.900/kg</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-6" class="single-product">
                            <div class="part-1">
                                <span class="standard">Standard</span>
                                <ul>
                                    <li><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan"><i class="fas fa-shopping-cart" style="padding-left: 3px;"></i><span>Tersedia&nbsp;</span></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h2 class="product-title">Lada Hijau</h2>
                                <span class="ratings"><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i></span>
                                <h3 class="product-deskripsi">Sala satu rempah yang penting didapur.</h3>
                                <h4 class="product-price">Harga Rp45.720/kg</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                </div>
            </div>
        </section>
    </div>
    <!--product stop-->
    <!--form start-->
@include('layouts.contact')
                <!--- END COL -->
                <div class="col-lg-5">
                    <div class="single_address">
                        <div class="logo-address">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h4>Alamat</h4>
                        <p>
                            0334 Jakarta, Pusat balai opservasi No.17
                        </p>
                    </div>
                    <div class="single_address">
                        <div class="logo-address">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h4>Kirim pesan anda</h4>
                        <p>
                            Triyono@gmail.com
                        </p>
                    </div>
                    <div class="single_address">
                        <div class="logo-address">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h4>Telephone kami</h4>
                        <p>
                            (+62) 878-9344-6255
                        </p>
                    </div>
                    <div class="single_address">
                        <div class="logo-address">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <h4>Jam Kerja</h4>
                        <p>
                            Senin - Sabtu: 08.00 - 16.00. <br>Minggu: 10.00 - 14.00
                        </p>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </div>
    <!--form stop-->
    <!--footer strat-->
    <footer class="footer_area section_padding_130_0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget section_padding_0_130">
                        <div class="footer-logo mb-3"></div>
                        <p style="color: #DDDEDC;">
                            Appland is completely creative, lightweight, clean app landing page.
                        </p>
                        <div class="copywrite-text mb-5">
                            <p class="mb-0" style="color: #DDDEDC;">
                                Made with <i class="lni-heart mr-1"></i>by <a class="ml-1" style="color: #363AFF;" href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a>
                            </p>
                        </div>
                        <div class="footer_social_area">
                            <a href="https://www.facebook.com/tsts.hajiku" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa-brands fa-facebook" style="color: #0054FF;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fa-brands fa-instagram" style="color: #FF2200;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github"><i class="fa-brands fa-github" style="color: #080808;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa-brands fa-twitter" style="color: #1567FF;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <h5 class="widget-title text-light">Contact</h5>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>