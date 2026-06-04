<!DOCTYPE html>
<html>
<head><title>Students</title></head>
<body>
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}">Add Student</a>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Course</th><th>Year</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->year_level }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>