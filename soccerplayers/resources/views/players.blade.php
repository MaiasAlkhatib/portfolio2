<!DOCTYPE html>
<html>
<head>
    <title>Soccer Players</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Soccer Players</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Sport</th>
            <th>Club</th>
            <th>Salary</th>
            <th>Active</th>
            <th>Date of Birth</th>
            <th>Total Goals</th>
        </tr>
        @foreach($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->sport }}</td>
            <td>{{ $player->club }}</td>
            <td>{{ $player->salary }}</td>
            <td>{{ $player->active ? 'Yes' : 'No' }}</td>
            <td>{{ $player->date_of_birth }}</td>
            <td>{{ $player->total_goals }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
