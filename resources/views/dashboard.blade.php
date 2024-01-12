<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
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

    <!-- Your HTML content with the table goes here -->


</head>
<body>
    <h3>Dashboard </h3>

    <table border="1">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>Actions</th>
        </tr>
        @foreach ($user as $singleUser)
        <tr>
            <td>{{ $singleUser->id }}</td>
            <td>{{ $singleUser->name }}</td>
            <td>{{ $singleUser->email }}</td>
            <td>
                <form action="editview/{{ $singleUser->id }}" method="post">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
                <form action="delete/{{ $singleUser->id }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</body>
</html>
