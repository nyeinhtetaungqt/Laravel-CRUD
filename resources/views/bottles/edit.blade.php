<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>This is Edit page</h3>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{ route('bottle.update', ['bottle'=> $bottle]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label>Name :</label> <br>
            <input type="text" name="name" value="{{ $bottle->name }}">
        </div>
        <div>
            <label>Qty :</label> <br>
            <input type="text" name="qty" value="{{ $bottle->qty }}">
        </div>
        <div>
            <label>Price :</label> <br>
            <input type="text" name="price" value="{{ $bottle->price }}">
        </div>
        <div>
            <label>Description :</label> <br>
            <input type="text" name="description" value="{{ $bottle->description }}">
        </div>
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>