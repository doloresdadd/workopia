<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs List</title>
</head>
<body>
    <header>
        <h1>{{$title}}</h1>
    </header>
    <main>
        @if(!empty($jobs))
        <ul>
            @forelse($jobs as $job)
                <li>
                    {{$job}}
                </li>
            @empty
                <li>No jobs found.</li>
            @endforelse
        </ul>
        @else
            <p>No jobs found.</p>
        @endif
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Workopia. All rights reserved.</p>
    </footer>
</body>
</html>