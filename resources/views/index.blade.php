<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1>Student Information System</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Student
    </a>

    <form method="GET" action="{{ route('students.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" 
                   value="{{ $search ?? '' }}" placeholder="Search name...">
            <button class="btn btn-secondary" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year_level }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}" 
                       class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form method="POST" 
                          action="{{ route('students.destroy', $student->id) }}" 
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this student?')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>