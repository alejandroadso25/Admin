<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Instructor</title>
</head>
<body>
    <form action="{{ route('teachers.store') }}" method="POST">
        <h1>Registrar Instructor</h1>
        @csrf

        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Correo</label>
        <input type="email" id="email" name="email" required>

        <label for="area_id">Área</label>
        <select id="area_id" name="area_id" required>
            <option value="">Seleccionar área</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>

        <label for="training_center_id">Centro de Formación</label>
        <select id="training_center_id" name="training_center_id" required>
            <option value="">Seleccionar centro</option>
            @foreach ($trainingCenters as $center)
                <option value="{{ $center->id }}">{{ $center->name }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
        <a href="{{ url('/') }}">Volver</a>
    </form>

    <pre>{{ session('record') }}</pre>

    <h2>Docentes registrados</h2>
    <ul>
        @foreach ($teachers as $teacher)
            <li>ID: {{ $teacher->id }} - Nombre: {{ $teacher->name }} - Email: {{ $teacher->email }} - Área_id: {{ $teacher->area_id }} - Training_center_id: {{ $teacher->training_center_id }}</li>
        @endforeach
    </ul>
</body>
</html>
