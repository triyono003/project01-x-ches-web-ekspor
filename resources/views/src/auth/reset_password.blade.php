<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>reset password</title>
</head>
<body>
  <form action="{{route('password.update')}}"method="post">
    @csrf
    <input type="text"name="token"value="{{request()->token}}">
    <input type="hidden"name="email"value="{{request()->email}}">
    <input type="text"name="password" placeholder="password">
    <input type="text"name="password_confirmation"placeholder="confirm_password">
    
    <button type="submit">ubah sandi</button>
  </form>
</body>
</html>