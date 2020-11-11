<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="form-register" action="/envio" method="POST" enctype="multipart/form-data">
        @csrf
        <h4> Formulario de Piezas </h4>
        <h2>Nombre de la Pieza:</h2>
        <input class="controls" type="text" name="Nombre" placeholder="Ingresa el Nombre de la Pieza"/><br>
        <h2>Descripcion:</h2>
        <input class="controls"  type="text" name="Descripcion" placeholder="Descripcion de la Pieza"/><br>
        <h2>Numero de Piezas:</h2>
        <input class="controls"  type="text" name="NumeroPiezas" placeholder="Numero de Piezaa"/><br>
        <h2>Costo:</h2>
        <input class="controls"  type="text" name="Costo" placeholder="Costo de la Pieza"/><br>
        <button class="buttons" type="submit" class="btn btn-secondary">Enviar</button><br>

        <a href="{{url('/muestraDatos')}}">
            <button type="button" class="buttons" >Regresar</button>
        </a>
    </form>    

    
</body>
</html>