<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Pizzas</title>
</head>
<body>
    <h1>Nosso Menu de Pizzas</h1>
    <ul>
        @foreach($pizzas as $pizza)
            <li>
                <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a> - R$ {{ number_format($pizza->price, 2, ',', '.') }}
            </li>
        @endforeach
    </ul>
</body>
</html>
