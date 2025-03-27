<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Info App</title>
</head>
<body>
    <h1>Pokémon Info App</h1>
    <form action="" method="GET" onsubmit="return searchPokemon(event)">
        <input type="text" id="pokemonInput" placeholder="Enter Pokémon name or ID">
        <button type="submit">Search</button>
    </form>

    <script>
        function searchPokemon(event) {
            event.preventDefault();
            let input = document.getElementById("pokemonInput").value;
            if (input.trim() !== "") {
                window.location.href = "/pokemon/" + input;
            }
        }
    </script>
</body>
</html>
