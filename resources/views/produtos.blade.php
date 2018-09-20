<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <ul>
        @foreach($produtos as $produto)
            <li>{{$produto->nome}} &nbsp; ({{$produto->descricao}})</li>
        @endforeach
    </ul>
</body>
</html>
