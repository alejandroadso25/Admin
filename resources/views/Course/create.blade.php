<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Curso</title>
</head>
<body>
    <form action="{{ route('courses.store') }}" method="POST">
        <h1>Registrar Curso</h1>
        @csrf

        <label for="course_number">Número de curso</label>
        <input type="text" id="course_number" name="course_number" required>

        <label for="day">Día</label>
        <input type="text" id="day" name="day" required>

        <label for="area_id">Área</label>
        <select id="area_id" name="area_id">
            <option value="">Seleccionar área</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>

        <label for="training_center_id">Centro de Formación</label>
        <select id="training_center_id" name="training_center_id">
            <option value="">Seleccionar centro</option>
            @foreach ($training_centers as $center)
                <option value="{{ $center->id }}">{{ $center->name }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
        <a href="{{ url('/') }}">Volver</a>
    </form>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</body>
</html>
