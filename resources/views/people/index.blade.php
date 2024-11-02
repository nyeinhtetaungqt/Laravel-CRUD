<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Index Page</h3>
    <div>
        <a href="{{ route('person.create') }}">+Add New</a>
    </div><br>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Job</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->job }}</td>
                    <td>
                        <a href="{{ route('person.edit', ['people'=> $person]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('person.destroy', ['people'=> $person]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>