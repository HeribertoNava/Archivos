<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de archivos</title>

    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f9; /* Fondo gris claro */
    color: #333;
}

.container {
    margin: 20px auto;
    max-width: 800px;
    background-color: #ffffff; /* Fondo blanco */
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.btn {
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #ff9a8d; /* Color melocotón pastel */
    color: #fff;
}

.btn-danger {
    background-color: #ffb3b3; /* Color rosa pastel */
    color: #fff;
}

.btn-primary:hover, 
.btn-danger:hover {
    opacity: 0.9;
}

.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 8px; /* Espacio entre las filas de la tabla */
}

.table th, 
.table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2; /* Fondo gris pastel */
    border-bottom: 3px solid #d1d1d1; /* Línea estética en la parte inferior de las cabeceras */
}

.alert {
    margin-top: 20px;
    padding: 15px;
    border-radius: 8px;
    background-color: #e6ffe6; /* Fondo verde pastel para alertas */
    border: 1px solid #b3ffb3; /* Borde verde claro para alertas */
}

.form-control {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Estilos para los enlaces */
a {
    display: inline-block;
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    text-align: center;
    color: #fff;
    background-color: #a8d5e2; /* Color azul pastel */
    text-decoration: none;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #86abbf; /* Color azul más oscuro al pasar el mouse */
}

    </style>
</head>
<body>
    <nav>
        <ul>
            <a href="encabezado.php">Inicio</a>
            <a href="logout.php">Cerrar sesión</a>
        </ul>
    </nav>
    <main>
