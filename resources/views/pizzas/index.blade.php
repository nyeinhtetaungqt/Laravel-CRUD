<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pizza</h1>
    <span>
        <a href="{{ route('pizza.create') }}">Make order now</a>
    </span>
    <div>
        @if (session()->has('success'))
            {{ session('success') }}
        @endif
    </div>
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
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->id }}</td>
                    <td>{{$pizza->name }}</td>
                    <td>{{$pizza->qty }}</td>
                    <td>{{$pizza->price }}</td>
                    <td>{{$pizza->description }}</td>
                    <td>
                        <a href="{{ route('pizza.edit', ['pizza' => $pizza]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('pizza.destroy', ['pizza' => $pizza]) }}" method="post">
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