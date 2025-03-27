<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }}</title>
</head>
<body>
    <h1>{{ $name }}</h1>
    @if($image)
        <img src="{{ $image }}" alt="{{ $name }}">
    @else
        <p>No image available.</p>
    @endif
    <h3>Types:</h3>
    <ul>
        @foreach($types as $type)
            <li>{{ ucfirst($type) }}</li>
        @endforeach
    </ul>
    <h3>Stats:</h3>
    <ul>
        @foreach($stats as $stat)
            <li>{{ ucfirst($stat['stat']['name']) }}: {{ $stat['base_stat'] }}</li>
        @endforeach
    </ul>
    <a href="/">Go Back</a>
</body>
</html>
