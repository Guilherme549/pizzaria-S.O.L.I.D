<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pizza->name }}</title>
</head>
<body>
    <h1>{{ $pizza->name }}</h1>
    <p>{{ $pizza->description }}</p>
    <p>Preço: R$ {{ number_format($pizza->price, 2, ',', '.') }}</p>
    <a href="/pizzas">Voltar ao Menu</a>
</body>
</html>
