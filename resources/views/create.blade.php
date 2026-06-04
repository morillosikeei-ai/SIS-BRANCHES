<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>
    <h1>Add Student</h1>
    <a href="{{ route('students.index') }}">Back</a>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br>
        <span style="color:red;">{{ $errors->first('name') }}</span><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="{{ old('course') }}"><br>
        <span style="color:red;">{{ $errors->first('course') }}</span><br>

        <label>Year Level:</label><br>
        <input type="number" name="year_level" value="{{ old('year_level') }}"><br>
        <span style="color:red;">{{ $errors->first('year_level') }}</span><br><br>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>