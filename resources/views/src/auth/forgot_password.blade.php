<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>lupa kata sandi</title>
</head>
<body>
  <form action="{{route('password.email')}}"method="post">
    @csrf
    <input type="email"name="email"placeholder="email">
    <button type="submit">kirim tautan reset password</button>
  </form>
</body>
</html>