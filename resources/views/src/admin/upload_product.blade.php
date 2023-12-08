<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>upload product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        h1 {
            font-size: 20px;
            margin-top: 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group input:focus {
            outline: none !important;;
            box-shadow: none;
        }
        .form-group textarea:focus {
            outline: none !important;;
            box-shadow: none;
        }

    </style>
    <div class="container">
        <div class="col-md-6 offset-md-3 mt-5">
            <i class="fa-solid fa-tag fa-3x" style="width: 100%;"></i>
            <br>
            <h1>Pasarkan Product terbaru anda!!</h1>
  @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
  @endif
            <form accept-charset="UTF-8" action="" method="POST" enctype="multipart/form-data" target="_blank">
              @csrf
              
                <div class="form-group">
                    <hr>
                    <div class="form-group mt-3">
                        <label class="mr-2">icon product</label>
                        <input type="file" name="image">
@error("image")
  <div class="text-danger">{{$message}}</div>
@enderror
                    </div>
                    <hr>
                    <label for="exampleInputJuduk"class="@error('name') is-invalid @enderror">Judul</label>
<input type="text" name="name" class="form-control" id="exampleInputJudul" placeholder="title product">
@error("name")
  <div class="text-danger">{{$message}}</div>
@enderror
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputDeskripsi"class="@error('deskripsi') is-invalid @enderror">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputDeskripsi" placeholder="your product description"></textarea>
  @error("deskripsi")
  <div class="text-danger">{{$message}}</div>
@enderror
                </div>
                <div class="form-group mt-3">
<label for="exampleFormControlSelect1"class="">Kualitas Product</label>
<select class="form-control" id="exampleFormControlSelect" name="quality_id">
  @foreach($qualities as $quality)
<option value="{{$quality->id}}">{{$quality->name}}</option>
@endforeach
</select>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputHarga">Harga</label>
                    <input type="text" name="price" class="form-control" id="exampleInputHarga" placeholder="selling price Rp">
   @error("price")
  <div class="text-danger">{{$message}}</div>
@enderror
                </div>
<button type="submit" class="btn btn-success" style="width: 100%; margin-top: 30px;">upload product</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>