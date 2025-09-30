<!DOCTYPE html>
<html>
<head>
    <title>Project Details</title>
</head>
<body>
    <h1>{{ $project->name }}</h1>
    <p>Client: {{ $project->client }}</p>
    <p>Start Date: {{ $project->start_date }}</p>
    <p>End Date: {{ $project->end_date ?? 'Ongoing' }}</p>

    <br>
    <a href="{{ route('projects.index') }}">← Back to Projects List</a> |
    <a href="{{ route('projects.edit', $project) }}">✏️ Edit</a>

    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">🗑️ Delete</button>
    </form>
</body>
</html>
