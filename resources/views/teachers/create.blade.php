<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    <h3>Create Page</h3>
    <div>
        @if ($errors->any())
            <ol>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ol>
        @endif
    </div>
    <div>
        <form action="{{ route('teacher.store') }}" method="post">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div><br>
            <div>
                <label for="">Age</label>
                <input type="number" name="age">
            </div><br>
            <div>
                <label for="">Subject</label>
                <input type="text" name="subject">
            </div><br>
            <div>
                <input type="submit" value="OK">
            </div>
        </form>
    </div>
</body>
</html>