<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Search</title>
</head>
    @include('imports.headimport')
    @include('fragments.topbar')
    @include('fragments.navbar')
<body>
    <div class="container">
        <div class="mt-5">
            <h3>Search Results</h3>

            @if($users->count())
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
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
                                    <td style="word-break:break-all;">{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $users->links() }}
                </div>
            @else
                <p>No users found.</p>
            @endif
        </div>
    </div>
    @include('imports.footimport')
    @include('fragments.footer')
    <style>
        @media (max-width: 575.98px) {
            h3 {
                font-size: 1.2rem;
            }
            .table th, .table td {
                font-size: 0.85rem;
                padding: 0.4rem;
            }
        }
    </style>
</body>
</html>