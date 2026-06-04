<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1>Edit Student</h1>
    <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">
        <i class="fas fa-arrow-left"></i> Back
    </a>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" 
                   value="{{ $student->name }}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>

        <div class="mb-3">
            <label class="form-label">Course:</label>
            <input type="text" name="course" class="form-control" 
                   value="{{ $student->course }}">
            <span class="text-danger">{{ $errors->first('course') }}</span>
        </div>

        <div class="mb-3">
            <label class="form-label">Year Level:</label>
            <input type="number" name="year_level" class="form-control" 
                   value="{{ $student->year_level }}">
            <span class="text-danger">{{ $errors->first('year_level') }}</span>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Update Student
        </button>
    </form>

</body>
</html>