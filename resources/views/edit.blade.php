<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            display: inline; /* Align forms horizontally */
            margin-right: 5px; /* Add spacing between buttons */
        }
    </style>
</head>
<body>
    <h3>Dashboard</h3>

    <form  method="post" action="/updates">
        @csrf
    <table border="1">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>Actions</th>
        </tr>
        @if($user)
        <tr>

                   <td> <input type="text" name="id" value="{{ $user->id }}" readonly></td>
                   <td> <input type="text" name="name" value="{{ $user->name }}"></td>
                   <td><input type="text" name="email" value="{{ $user->email }}"></td>
                   <td> <input type="submit" Value="submit"> </td>
              </form>

        </tr>
        @endif
    </table>
</body>
</html>
