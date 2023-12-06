<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
            background: #eee;

        }
      
        .ratings i {
            color: green;
        }

        .install span {
            font-size: 12px;
        }

        .col-md-4 {
            margin-top: 20px;
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
            color: #DADADA;
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
    <nav class="navbar fixed-sticky" style="background-color: #009414;">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Bisa Ekspor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-transparent" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active text-white border-bottom border-muted" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-bottom border-muted" href="blog/index.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-bottom border-muted" href="/src/product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-bottom border-muted" href="src/contact/">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
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
    <!--card strat-->
    @foreach($data as $alldata)
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3">
<img src="{{asset('storage/'. $alldata->image)}}" width="70"style="border-radius:50%;">
                        <div class="d-flex flex-column ml-2">
                            <span>
                              {{$alldata->name}}
                            </span><span class="text-black-50">
                              {{$alldata->quality->name}}
                              
                            </span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                        </div>
                    </div>
                    <h6>{{$alldata->deskripsi}}</h6>
                    <div class="d-flex justify-content-between install mt-3">
                        <span>Harga Rp87.540/kg</span><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20putih%20premium%20yang%20anda%20tawarkan" style="text-decoration: none;"><span class="text-primary">Tersedia&nbsp;<i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
            @endforeach
{{--              --}}
{{--             <div class="col-md-4"> --}}
{{--                 <div class="card p-3"> --}}
{{--                     <div class="d-flex flex-row mb-3"> --}}
{{--                         <img src="assets/ladahp.jpg" style="border-radius: 50%;" width="70"> --}}
{{--                         <div class="d-flex flex-column ml-2"> --}}
{{--                             <span>Lada Hitam</span><span class="text-black-50">Premium</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> --}}
{{--                         </div> --}}
{{--                     </div> --}}
{{--                     <h6>Dengan butiran yang pekat dan rasa yang mendalam.</h6> --}}
{{--                     <div class="d-flex justify-content-between install mt-3"> --}}
{{--                         <span>Harga Rp90.000/kg</span><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20premium%20yang%20anda%20tawarkan" style="text-decoration: none;"><span class="text-primary">Tersedia&nbsp;<i class="fa fa-angle-right"></i></span></a> --}}
{{--                     </div> --}}
{{--                 </div> --}}
{{--             </div> --}}
{{--             <div class="col-md-4"> --}}
{{--                 <div class="card p-3"> --}}
{{--                     <div class="d-flex flex-row mb-3"> --}}
{{--                         <img src="assets/ladam.jpg" style="border-radius: 50%;" width="70"> --}}
{{--                         <div class="d-flex flex-column ml-2"> --}}
{{--                             <span>Lada Merah</span><span class="text-black-50">Sertifikasi</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> --}}
{{--                         </div> --}}
{{--                     </div> --}}
{{--                     <h6>Salah satu rempah-rempah yang sering digunakan didapur.</h6> --}}
{{--                     <div class="d-flex justify-content-between install mt-3"> --}}
{{--                         <span>Harga Rp49.701/kg</span><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20merah%20yang%20anda%20tawarkan" style="text-decoration: none;"><span class="text-primary">Tersedia&nbsp;<i class="fa fa-angle-right"></i></span></a> --}}
{{--                     </div> --}}
{{--                 </div> --}}
{{--             </div> --}}
{{--             <div class="col-md-4"> --}}
{{--                 <div class="card p-3"> --}}
{{--                     <div class="d-flex flex-row mb-3"> --}}
{{--                         <img src="assets/ladap.jpg" width="70"> --}}
{{--                         <div class="d-flex flex-column ml-2"> --}}
{{--                             <span>Lada Putih</span><span class="text-black-50">Sertifikasi</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> --}}
{{--                         </div> --}}
{{--                     </div> --}}
{{--                     <h6>Berikan kesan yang khas dari lada putih yang harum..</h6> --}}
{{--                     <div class="d-flex justify-content-between install mt-3"> --}}
{{--                         <span>Harga Rp69.520/kg</span><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20putih%20yang%20anda%20tawarkan" style="text-decoration: none;"><span class="text-primary">Tersedia&nbsp;<i class="fa fa-angle-right"></i></span></a> --}}
{{--                     </div> --}}
{{--                 </div> --}}
{{--             </div> --}}
{{--             <div class="col-md-4"> --}}
{{--                 <div class="card p-3"> --}}
{{--                     <div class="d-flex flex-row mb-3"> --}}
{{--                         <img src="assets/ladah.jpg" style="border-radius: 50%;" width="70"> --}}
{{--                         <div class="d-flex flex-column ml-2"> --}}
{{--                             <span>Lada hitam</span><span class="text-black-50">Sertifikasi</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> --}}
{{--                         </div> --}}
{{--                     </div> --}}
{{--                     <h6>Kepekatan yang indah menyatu dengan cita rasa yang khas.</h6> --}}
{{--                     <div class="d-flex justify-content-between install mt-3"> --}}
{{--                         <span>Harga Rp79.000/kg</span><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hitam%20yang%20anda%20tawarkan" style="text-decoration: none;"><span class="text-primary">Tersedia&nbsp;<i class="fa fa-angle-right"></i></span></a> --}}
{{--                     </div> --}}
{{--                 </div> --}}
{{--             </div> --}}
{{--             <div class="col-md-4"> --}}
{{--                 <div class="card p-3"> --}}
{{--                     <div class="d-flex flex-row mb-3"> --}}
{{--                         <img src="assets/ladag.jpg" width="70"> --}}
{{--                         <div class="d-flex flex-column ml-2"> --}}
{{--                             <span>Lada Hijau</span><span class="text-black-50">Standart</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> --}}
{{--                         </div> --}}
{{--                     </div> --}}
{{--                     <h6>Rempah yang memberikan aroma yang wangi terhadap hidangan.</h6> --}}
{{--                     <div class="d-flex justify-content-between install mt-3"> --}}
{{--                         <span>Harga Rp52.300/kg</span><a href="https://wa.me/6287893446255?text=Saya%20tertarik%20dengan%20product%20lada%20hijau%20yang%20anda%20tawarkan" style="text-decoration: none;"><span class="text-primary">Tersedia&nbsp;<i class="fa fa-angle-right"></i></span></a> --}}
{{--                     </div> --}}
{{--                 </div> --}}
{{--             </div> --}}
{{--         </div> --}}
{{--     </div> --}}
{{--     <!--card stop--> --}}
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
                            <a href="https://www.facebook.com/tsts.hajiku" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>