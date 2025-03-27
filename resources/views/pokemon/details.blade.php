<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ ucfirst($pokemon['name']) }}</title>
</head>
<body>
    <h1>{{ ucfirst($pokemon['name']) }}</h1>
    <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">

    <h3>Types:</h3>
    <ul>
        @foreach($pokemon['types'] as $type)
            <li>{{ ucfirst($type['type']['name']) }}</li>
        @endforeach
    </ul>

    <h3>Stats:</h3>
    <ul>
        @foreach($pokemon['stats'] as $stat)
            <li>{{ ucfirst($stat['stat']['name']) }}: {{ $stat['base_stat'] }}</li>
        @endforeach
    </ul>

    <a href="/pokemon/{{ $pokemon['id'] - 1 }}">Previous</a>
    <a href="/pokemon/{{ $pokemon['id'] + 1 }}">Next</a>
</body>
</html>
