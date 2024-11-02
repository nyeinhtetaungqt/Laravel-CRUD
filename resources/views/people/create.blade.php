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
        <form action="{{ route('person.store') }}" method="post">
            @csrf
            <div>
                <label>Name :</label>
                <input type="text" name="name">
            </div><br>
            <div>
                <label>Age :</label>
                <input type="text" name="age">
            </div><br>
            <div>
                <label>Job :</label>
                <input type="text" name="job">
            </div><br>
            <div>
                <input type="submit" value="create">
            </div>
        </form>
    </div>
</body>
</html>