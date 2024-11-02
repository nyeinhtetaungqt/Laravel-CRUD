<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Create Page</h1>
    <form action="{{ route('student.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name">
        </div><br>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" placeholder="address">
        </div><br>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="phone">
        </div><br>
        <input type="submit" value="OK">
    </form>
</body>
</html>