<!DOCTYPE html>
<html>
<head>
    <title>Projects List</title>
</head>
<body>
    <h1>Projects List</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('projects.create') }}">+ Add New Project</a>

    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project) }}">
                    {{ $project->name }} - {{ $project->client }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
