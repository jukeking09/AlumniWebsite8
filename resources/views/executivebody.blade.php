<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Body</title>
    @include('imports.headimport')

    <style>
        .executive-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }

        .executive-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            flex: 1 1 250px;
            max-width: 300px;
            transition: transform 0.2s ease;
        }

        .executive-card:hover {
            transform: translateY(-5px);
        }

        .executive-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .executive-card .name {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 1rem;
        }

        .executive-card .post {
            font-size: 1rem;
            color: #555;
        }

        @media (max-width: 768px) {
            .executive-container {
                padding: 1rem;
                gap: 1rem;
            }

            .executive-card {
                padding: 1rem;
            }

            .executive-card img {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .executive-card {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar')

    <div class="responsive-container-block outer-container">
        <div class="responsive-container-block inner-container">
            <p class="text-blk section-head-text text-center" style="font-size: 2rem; font-weight: bold;">
              Executive Members
            </p>

            <div class="executive-container">
                @foreach(
                    $executiveMembers->sortBy(function($member) {
                        $order = [
                            'President' => 1,
                            'Vice President' => 2,
                            'Secretary' => 3,
                            'Treasurer' => 4,
                            'Executive Member' => 5,
                            'Delegate' => 6
                        ];

                        foreach ($order as $key => $val) {
                            if (stripos($member->post, $key) !== false) {
                                return $val;
                            }
                        }
                        return 99;
                    }) as $member)
                    <div class="executive-card">
                        <img src="{{ route('executive.image', basename($member->picture)) }}" alt="{{ $member->name }}">
                        <p class="name">{{ $member->name }}</p>
                        <p class="post">{{ $member->post }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>
