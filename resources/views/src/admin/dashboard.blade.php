<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

@media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }

        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

@media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
        .footer_area {
            background-color: #fff;
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
            color: #090909;
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
</head>
<body>
    <nav class="navbar navbar-light p-3" style="bacground-color: #F2F2F2; border-bottom: 1px solid #D1D1D1;">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                Admin Home
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
<div class="mr-3 mt-1">

<img src="{{asset('storage/'. $userAuth->image)}}" style="border-radius: 50%;" width="50">

</div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Hello, <!--user sesion start ga sih bre?-->{{Auth::user()->username}}<!--sesiosn user stop-->
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('logout')}}">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class="fa-solid fa-house"></i>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/src/admin/list_admin">
                                <i class="fa-solid fa-user"></i>
                                <span class="ml-2">admin</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/src/auth/register">
                                <i class="fa-solid fa-user-plus"></i>
                                <span class="ml-2">Add-admin</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/src/admin/list_product">
                                <i class="fa-solid fa-shop"></i>
                                <span class="ml-2">Product</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/src/admin/upload_product">
                                <i class="fa-solid fa-upload"></i>
                                <span class="ml-2">Upload-product</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('message')}}">
                                <i class="fa-solid fa-bell"></i>
                                <span class="ml-2">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-secondary ml-3 mt-2" href="https://themesberg.com/blog/bootstrap/simple-bootstrap-5-dashboard-tutorial">
                                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                <i class="fa-solid fa-hashtag"></i>
                                <span class="ml-2">Social-media</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-success ml-3 mt-2" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">
                                <i class="fa-brands fa-whatsapp"></i> Whatsapp
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-danger ml-3 mt-2" href="https://themesberg.com">
                                <i class="fa-regular fa-envelope"></i>  Email
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <p>
                    Kontrol dan tinjau perkembangan produk yang anda jual.salah satu strategi marketing yaitu membangun aplikasi penjualan
                </p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
<h5 class="card-header">Admin</h5>
<div class="card-body">
<h6 class="card-title">Terdaftar <!---jumla admin-->{{$adminCount}}<!--jummlah admin--></h6>
<p class="card-text">
                                    data dari <!--date start-->1 april - 1 mei 2023<!--date stop-->
                                </p>
                                <p class="card-text" style="color: #FF7B00;">
                                    Harap rahasiakan data anda
                                </p>
                            </div>
                        </div>
                    </div>
<div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
<div class="card">

<h5 class="card-header">Pengunjung</h5>
<div class="card-body">
<h6 class="card-title">
  <!--visitor start--> {{$visitorCount}}<!--visitor stop--> Berkunjung</h6>
                                <p class="card-text">
                                    data dari <!--date start-->1 april - 1 mei 2023<!--date stop-->
                                </p>
                                <p class="card-text text-success">
                                    Presentase <!--presentase start-->4.6%<!--presentase stop--> dalam 1 bulan terakhir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Latest transactions</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Kualitas</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col"></th>
</tr>
</thead>
  <tbody>
 @forelse($productList as $product)   
    <tr>
      <th scope="row">
        <img src="{{asset('storage/'. $product->image)}}" alt="lah gambarnya mana bre"width="80">
      </th>
<td>{{$product->name}}</td>
<td>{{$product->deskripsi}}</td>
<td>{{$product->quality->name}}</td>
<td>RP {{number_format($product->price,0,',','.')}}</td>
<td><a href="#" class="btn btn-sm btn-primary width:rem">View</a></td>
@empty
<td>
<div class="card">
  <div class="card-body">
    Data Masih Kosong.
  </div>
</div>
</td>
  </tr>
  @endforelse
  </tbody>
    </table>
      

<a href="/src/admin/list_product" class="btn btn-block btn-light">View all</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer_area section_padding_130_0">
                    <div class="container">
                        <div class="row">
                            <!-- Single Widget-->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-footer-widget section_padding_0_130">
                                    <!-- Footer Logo-->
                                    <div class="footer-logo mb-3"></div>
                                    <p>
                                        Appland is completely creative, lightweight, clean app landing page.
                                    </p>
                                    <!-- Copywrite Text-->
                                    <div class="copywrite-text mb-5">
                                        <p class="mb-0">
                                            Made with <i class="lni-heart mr-1"></i>by <a class="ml-1" style="color: #363AFF;" href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a>
                                        </p>
                                    </div>
                                    <!-- Footer Social Area-->
                                    <div class="footer_social_area">
                                        <a href="https://www.facebook.com/tsts.hajiku" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa-brands fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fa-brands fa-instagram" style="color: #FF2200;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github"><i class="fa-brands fa-github" style="color: #080808;"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Widget-->
                            <div class="col-12 col-sm-6 col-lg">
                                <div class="single-footer-widget section_padding_0_130">
                                    <!-- Widget Title-->
                                    <h5 class="widget-title">Contact</h5>
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
            </main>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script>
        new Chartist.Line('#traffic-chart', {
            labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
            series: [
                [23000, 25000, 19000, 34000, 56000, 64000]
            ]
        }, {
            low: 0,
            showArea: true
        });
    </script>
</body>
</html>