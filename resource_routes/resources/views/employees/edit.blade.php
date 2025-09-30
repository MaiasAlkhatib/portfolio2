<h1>Edit Employee</h1>
<form action="{{ route('employees.update', $employee) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="firstname" value="{{ $employee->firstname }}">
    <input type="text" name="lastname" value="{{ $employee->lastname }}">
    <button type="submit">Update</button>
</form>
