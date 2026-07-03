<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('computers.store') }}" method="POST">
        @csrf
        <label for="number">Número de computador:</label>
        <input type="text" id="number" name="number" required>

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" required>

        <button type="submit">Registrar</button>
    </form>

    <pre>{{ session('record') }}</pre>

    <h2>Computadores registrados</h2>
    <ul>
        @foreach ($computers as $computer)
            <li>
                Número: {{ $computer->number }}, Marca: {{ $computer->brand }}
            </li>
        @endforeach
    </ul>
</body>
</html>