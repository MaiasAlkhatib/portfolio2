<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $project->name }}" required><br><br>

        <label>Client:</label><br>
        <input type="text" name="client" value="{{ $project->client }}" required><br><br>

        <label>Start Date:</label><br>
        <input type="date" name="start_date" value="{{ $project->start_date }}" required><br><br>

        <label>End Date:</label><br>
        <input type="date" name="end_date" value="{{ $project->end_date }}"><br><br>

        <button type="submit">Update Project</button>
    </form>

    <br>
    <a href="{{ route('projects.show', $project) }}">← Back to Project Details</a>
</body>
</html>
