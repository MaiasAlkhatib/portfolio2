<h1>Employees List</h1>
<a href="{{ route('employees.create') }}">Add Employee</a>
<ul>
    @foreach ($employees as $employee)
        <li>
            {{ $employee->firstname }} {{ $employee->lastname }}
            <a href="{{ route('employees.show', $employee) }}">Show</a>
            <a href="{{ route('employees.edit', $employee) }}">Edit</a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
