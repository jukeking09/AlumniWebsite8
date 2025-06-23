<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Search</title>
</head>
<body>
    <div class="container">
    <h3>Search Results</h3>

    @if($users->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Year of Passing</th>
                    <th>Area of Interest</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->department->department_name ?? 'N/A' }}</td>
                        <td>{{ $user->year_of_passing }}</td>
                        <td>{{ $user->area_of_interest }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    @else
        <p>No users found.</p>
    @endif
</div>
    
</body>
</html>