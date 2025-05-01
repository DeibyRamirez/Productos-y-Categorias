<!DOCTYPE html>
<html>
<head>
    <title>Crear nuevo Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        span {
            margin-top: 10px;
            font-weight: bold;
            color: #555555;
        }
        input {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear nuevo producto</h1>
        <form action="" method="PUT"> {{-- El action apunta hacia una ruta de tipo POST --}}
            @csrf
            @method('POST')
            <span>Nombre:</span>
            <input type="text" name="nombre" placeholder="Ingrese el nombre del producto">
            <span>Precio:</span>
            <input type="number" name="precio" step="0.01" placeholder="Ingrese el precio">
            <span>Stock:</span>
            <input type="number" name="stock" placeholder="Ingrese el stock">
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>