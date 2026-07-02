<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Centro de Formación</title>
</head>
<body>
    <form action="{{ route('training-centers.store') }}" method="POST">
        <h1>Registrar Centro de Formación</h1>
        @csrf

        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>

        <label for="location">Ubicación</label>
        <input type="text" id="location" name="location" required>

        <button type="submit">Guardar</button>
        <a href="{{ url('/') }}">Volver</a>
    </form>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <h2>Centros de formación registrados</h2>
    @if($trainingCenters->isEmpty())
        <p>No hay centros de formación registrados.</p>
    @else
        <ul>
            @foreach ($trainingCenters as $center)
                <li>
                    <strong>{{ $center->name }}</strong> - {{ $center->location }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
