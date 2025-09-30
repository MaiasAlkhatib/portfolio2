<h1>Edit Project</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $project->name) }}" required>
    <br><br>
    <label>Description:</label>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
    <br><br>
    <button type="submit">Update Project</button>
</form>

<a href="{{ route('projects.index') }}">Back to Projects</a>
