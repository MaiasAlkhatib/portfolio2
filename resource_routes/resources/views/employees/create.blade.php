<h1>Add Employee</h1>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <input type="text" name="firstname" placeholder="First name">
    <input type="text" name="lastname" placeholder="Last name">
    <button type="submit">Save</button>
</form>
