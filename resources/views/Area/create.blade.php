<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Área</title>
</head>
<body>
    <form action="{{ route('areas.store') }}" method="POST">
        <h1>Registrar Área</h1>
        @csrf

        <label for="name">Nombre del área</label>
        <input type="text" id="name" name="name" required>

        <button type="submit">Guardar</button>
        <a href="{{ url('/') }}">Volver</a>
    </form>

    <pre>{{ session('record') }}</pre>

    <h2>Áreas registradas</h2>
    <ul>
        @foreach ($areas as $area)
            <li>{{ $area->name }}</li>
        @endforeach
    </ul>
</body>
</html>