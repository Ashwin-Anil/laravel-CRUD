<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="register">register here</a></button>
    <center>
    <form action="login" method="post">
        <div>
        @csrf
        @if (session()->has('error'))
              {{ session('error') }}
        @endif
        </div> <br>
        <label>email</label><input type="email" name="email">
        <label>password</label><input type="password"name="password">
        <input type="submit" value="Submit">



    </form>
</center>
</body>
</html>
