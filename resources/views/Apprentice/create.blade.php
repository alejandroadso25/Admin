<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Aprendiz</title>
</head>
<body>
    <form action="{{ route('apprentices.store') }}" method="POST">
        <h1>Registrar Aprendiz</h1>
        @csrf

        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Correo</label>
        <input type="email" id="email" name="email" required>

        <label for="cell_number">Número celular</label>
        <input type="text" id="cell_number" name="cell_number" required>

        <label for="course_id">Curso</label>
        <select id="course_id" name="course_id" required>
            <option value="">Seleccionar curso</option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}">{{ $course->course_number }} - {{ $course->day }}</option>
            @endforeach
        </select>

        <label for="computer_id">Computador</label>
        <select id="computer_id" name="computer_id" required>
            <option value="">Seleccionar computador</option>
            @foreach ($computers as $computer)
                <option value="{{ $computer->id }}">{{ $computer->number }} - {{ $computer->brand }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
        <a href="{{ url('/') }}">Volver</a>
    </form>

    <pre>{{ session('record') }}</pre>

    <h2>Aprendices registrados</h2>
    <ul>
        @foreach ($apprentices as $apprentice)
            <li>ID: {{ $apprentice->id }} - Nombre: {{ $apprentice->name }} - Email: {{ $apprentice->email }} - Celular: {{ $apprentice->cell_number }} - Curso_id: {{ $apprentice->course_id }} - Computador_id: {{ $apprentice->computer_id }}</li>
        @endforeach
    </ul>
</body>
</html>
