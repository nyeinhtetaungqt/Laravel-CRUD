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
        <a href="{{ route('teacher.create') }}">+Add New</a>
    </div> 
   <div>
    @if (session()->has('success'))
        <div>
            {{ session('success')}}
        </div>
    @endif
   </div>
   <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Subject</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->age }}</td>
                    <td>{{ $teacher->subject }}</td>
                    <td>
                        <a href="{{ route('teacher.edit', ['teachers'=> $teacher]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('teacher.delete', ['teachers'=>$teacher]) }}" method="post">
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