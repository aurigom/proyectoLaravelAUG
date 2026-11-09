<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        form { width: 400px; margin: 40px auto; padding: 20px; background: #fff; }
        div { margin-bottom: 12px; }
        label { font-weight: bold; }
        input[type="text"], input[type="email"], textarea { display: block; width: 100%; box-sizing: border-box; }
    </style>
</head>
<body>
    @if (session('exito'))
        <p>Gracias, {{ session('nombre') }}. Hemos recibido tu consulta sobre: {{ session('asunto') }}.</p>
    @endif
    <form action="/contacto" method="POST">
	@csrf      

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required minlength="2" maxlength="50">
            @error('nombre') <div style="color:red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email') <div style="color:red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="asunto">Asunto</label>
            <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" required minlength="5" maxlength="50">
            @error('asunto') <div style="color:red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="5" required minlength="10" maxlength="50">{{ old('mensaje') }}</textarea>
            @error('mensaje') <div style="color:red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <input type="checkbox" id="aceptacion" name="aceptacion" required>
            <label for="aceptacion">Acepto las condiciones</label>
            @error('aceptacion') <div style="color:red;">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>

</body>
</html>
