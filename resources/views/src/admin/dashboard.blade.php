<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
</head>
<body>
<h2><a href="/src/auth/logout">logout</a></h2> <br>
  <form action=""method="post"enctype="multipart/form-data">
    @csrf
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
    <input type="text"name="name">
    <select name="quality_id" id="">
    @foreach($qualities as $quality)
      <option value="{{ $quality->id }}">{{ $quality->name }}</option>
    @endforeach
    </select>
    <input type="text"name="deskripsi">
    <input type="file"name="image">
    <button type="submit"name="SubProduct">tambah</button>
  </form>
</body>
</html>