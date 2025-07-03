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
                    <span class="text-muted">* Due to privacy concerns, Phone Numbers are not displayed.</span>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <nav aria-label="User pagination">
                        <ul class="pagination pagination-sm mb-0">
                            {{-- Previous Page Link --}}
                            @if ($users->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                @if ($page == $users->currentPage())
                                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                @elseif ($page == 1 || $page == $users->lastPage() || abs($page - $users->currentPage()) <= 1)
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @elseif ($page == $users->currentPage() - 2 || $page == $users->currentPage() + 2)
                                    <li class="page-item disabled"><span class="page-link">…</span></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($users->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
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
    <style>
    .pagination .page-link {
        color: #0d6efd;
        border-radius: 0.25rem;
        transition: background 0.2s;
    }
    .pagination .page-item.active .page-link {
        background: #0d6efd;
        color: #fff;
        border-color: #0d6efd;
    }
    .pagination .page-link:hover {
        background: #e9ecef;
        color: #0a58ca;
    }
</style>
</body>
</html>