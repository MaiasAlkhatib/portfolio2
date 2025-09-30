<h1>Create New Project</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}" required>
    <br><br>
    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea>
    <br><br>
    <button type="submit">Create Project</button>
</form>

<a href="{{ route('projects.index') }}">Back to Projects</a>
