<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Edit Page</h1>
    <form action="{{ route('student.update', ['student'=>$student]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="{{ $student->name }}">
        </div><br>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" placeholder="address" value="{{ $student->address }}">
        </div><br>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="phone" value="{{ $student->phone }}">
        </div><br>
        <input type="submit" value="Change now">
    </form>
</body>
</html>