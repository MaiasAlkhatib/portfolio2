<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <h1>Customers List</h1>
    <ul>
        @foreach($customers as $customer)
            <li>{{ $customer->first_name }} {{ $customer->last_name }} - {{ $customer->email }}</li>
        @endforeach
    </ul>
</body>
</html>
