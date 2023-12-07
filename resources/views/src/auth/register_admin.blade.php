<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        h1 {
            font-size: 20px;
         color: #FF9000;
            margin-top: 40px;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group input:focus {
            outline: none !important;;
            box-shadow: none;
        }

    </style>
    <div class="container">
        <div class="col-md-6 offset-md-3 mt-5">
            <i class="fa-solid fa-user-plus fa-3x" style="margin-top: 5%; width: 100%;"></i>
            <br>
            <h1>Peringatan privasi anda penting!!</h1>
<form accept-charset="UTF-8" action="{{route('register')}}" method="POST" enctype="multipart/form-data" target="_blank">
@csrf

{{----------------------------------------------------}}
<div class="form-group">
<hr>
  <div class="form-group mt-3">
    <label class="mr-2">foto anda</label>
    <input type="file" name="image">
@error("image")
  <div class="text-danger">{{$message}}</div>
@enderror
</div>
<hr>
<label for="exampleInputUsername"class="@error('username') is-invalid @enderror">Username</label>
<input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Nama lengkap">
@error("username")
  <div class="text-danger">{{$message}}</div>
@enderror
</div>
<div class="form-group mt-3">
<label for="exampleInputEmail"class="@error('email') is-invalid @enderror">Email</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Alamat email">
@error("email")
  <div class="text-danger">{{$message}}</div>
@enderror
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword"class="@error('password') is-invalid @enderror">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password anda">
@error("password")
  <div class="text-danger">{{$message}}</div>
@enderror
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%; margin-top: 30px;">add admin</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>