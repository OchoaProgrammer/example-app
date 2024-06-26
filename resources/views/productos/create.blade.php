<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos</title>
    <style>

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

select:focus {
    outline: none;
    border-color: #007bff; /* Color del borde al estar enfocado */}
        body {
            font-family: Arial, sans-serif;

    background: linear-gradient(to right, #004ff8, #a4cee2);
    color: rgb(0, 0, 0);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrar Producto</h2>
        <form action="{{route ('producto.store') }}" method="POST">
            @csrf
            <label for="categoria_id">Categoría:</label>
            <select id="categoria_id" name="categoria_id" required>
                <option value="" disabled selected>Selecciona una categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" required>

            <label for="stock">cantidad:</label>
            <input type="number" id="stock" name="stock" placeholder="cantidad del producto" min="0" step="0.01" required>

            <label for="preciocomprado">Precio de Compra:</label>
            <input type="number" id="preciocomprado" name="preciocomprado" placeholder="preciocomprado" min="0" required>

            <label for="precioventa">Precio de Venta:</label>
            <input type="number" id="precioventa" name="precioventa" placeholder="precio al vender" min="0" required>


            <button type="submit">Guardar Producto</button>
        </form>
    </div>
</body>
</html>
