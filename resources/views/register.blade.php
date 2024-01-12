<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><CENTER>
    <H3>REGISTER</H3>
    <form action="registration" method="post">
        @csrf
        <div>
            @if($errors->any())
            @foreach($errors->all() as $error)
            {{$error }}
            @endforeach
        @endif
       </div><br>
        <label>username</label><input type="text" name="name" required>
        <label>email</label><input type="email" name="email" required>
        <label>password</label><input type="password"name="password" min="3"required>
        <input type="submit" value="Submit">

    </form>
</CENTER>
</body>
</html>
