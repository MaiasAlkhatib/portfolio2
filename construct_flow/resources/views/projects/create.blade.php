<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>
</head>
<body>
    <h1>Add New Project</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Client:</label><br>
        <input type="text" name="client" required><br><br>

        <label>Start Date:</label><br>
        <input type="date" name="start_date" required><br><br>

        <label>End Date:</label><br>
        <input type="date" name="end_date"><br><br>

        <button type="submit">Save Project</button>
    </form>

    <br>
    <a href="{{ route('projects.index') }}">← Back to Projects List</a>
</body>
</html>
