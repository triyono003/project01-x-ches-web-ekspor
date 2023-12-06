<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi kami</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
            background-color: #eee;
        }
        .contact-area {
            margin-top: 80px;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
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

        .single_address i {
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

        .single_address:hover i {
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
    <!--nav strat-->
    <nav class="navbar fixed-sticky" style="background-color: #009414;">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Bisa Ekspor</a>
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
                            <a class="nav-link text-white border-bottom border-muted" href="/src/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-bottom border-muted" href="/src/product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-bottom border-muted" href="/src/contact">Contact</a>
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
    <!--form start-->
    <div id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Hubungi kami</h1>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact">
                        <form class="form" name="" method="post" action="/src/contact" onsubmit="return validation();">
                            <div class="row">
                                <div class="form-group col-md-6">
                                  @csrf
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" placeholder="Pesan Anda" required="required"></textarea>
                                </div>
                                <div class="form-btn col-md-12 text-center">
                                    <button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-lg-5">
                    <div class="single_address">
                        <i class="fa fa-map-marker"></i>
                        <h4>Alamat</h4>
                        <p>
                            0334 Jakarta, Pusat balai opservasi No.17
                        </p>
                    </div>
                    <div class="single_address">
                        <i class="fa fa-envelope"></i>
                        <h4>Kirim pesan anda</h4>
                        <p>
                            Triyono@gmail.com
                        </p>
                    </div>
                    <div class="single_address">
                        <i class="fa fa-phone"></i>
                        <h4>Telephone kami</h4>
                        <p>
                            (+62) 878-9344-6255
                        </p>
                    </div>
                    <div class="single_address">
                        <i class="fa fa-clock-o"></i>
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
    <!--footer start-->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>