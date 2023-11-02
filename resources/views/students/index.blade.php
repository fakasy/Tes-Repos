<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>fuckass</h1>
    <a href="{{ route('student.create') }}">Kontol Badak</a>
    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>nis</th>
            <th>nama</th>
            <th>kelas</th>
        </tr>
    </thead>
    <tbody>
        @php
             $no= 1;
        @endphp
        @foreach ($query as $student)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $student->nis}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->class}}</td>
            <td>
                <a href="#">edit</a> 
                <br>
                <a href="{{ url('/students/delete/'.$student->id) }}">hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>