<h1>{{ $project->name }}</h1>
<p>{{ $project->description }}</p>

<a href="{{ route('projects.edit', $project->id) }}">Edit</a>
<form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<br><br>
<a href="{{ route('projects.index') }}">Back to Projects</a>
