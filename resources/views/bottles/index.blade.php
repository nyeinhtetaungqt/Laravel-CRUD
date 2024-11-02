<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>This is index page</h3>
    <div>
        <a href="{{ route('bottle.create') }}">Create a new product</a>
    </div>
    <br>
    <div style="color: greenyellow">
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <br>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($bottles as $bottle)
                <tr>
                    <td>{{ $bottle->id }}</td>
                    <td>{{ $bottle->name }}</td>
                    <td>{{ $bottle->qty }}</td>
                    <td>{{ $bottle->price }}</td>
                    <td>{{ $bottle->description }}</td>
                    <td>
                        <a href="{{ route('bottle.edit', ['bottle' => $bottle]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('bottle.delete', ['bottle' => $bottle]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>