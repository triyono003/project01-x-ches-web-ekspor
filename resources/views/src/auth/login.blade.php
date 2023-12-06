<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        a {
            text-decoration: none;
        }
        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }
        .form-right i {
            font-size: 100px;
        }
        .input-group input:focus {
            outline: none !important;;
            box-shadow: none;
        }
        .form-check input:focus {
             outline: none !important;;
            box-shadow: none;
        }
    </style>
    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mb-3">Login Admin</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
<form action=""method="post"class="row g-4">
@csrf
<div class="col-12">
<label>Username<span class="text-danger">*</span></label>
<div class="input-group">
       <div class="input-group-text">
         <i class="bi bi-person-fill"></i>
    </div>
<input type="text"name="email" class="form-control" placeholder="Enter Username">
</div>
</div>
<div class="col-12">
<label>Password<span class="text-danger">*</span></label>
<div class="input-group">
<div class="input-group-text">
<i class="bi bi-lock-fill"></i>
</div>
<input type="text"name="password" class="form-control" placeholder="Enter Password">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                            </div>
                                        </div>

<div class="col-sm-6">
<a href="/src/auth/forgot_password" class="float-end text-primary">Forgot Password?</a>
</div>

<div class="col-12">
                                            <button type="submit" class="btn btn-success px-4 float-end mt-4">login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 text-white bg-success text-center pt-5">
                                    <i class="bi bi-bootstrap text-center"></i>
                                    <h4 class="fs-1" style="padding-top: 100px;">Bisa Ekspor</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>p