<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Bancos</title>
</head>
<body>

<div class="container fixed-top">

    <div class="col-md-12">
    <h1 class="d-flex justify-content-center">Busca el banco que deseas ver</h1>
    </div>

    <div class="col-md-12 d-flex justify-content-center">
        <input id="Claves" type="number" min="0" max="999" maxlength="1" value="000">
        <button class="btn btn-primary float-right" onclick="searchClave()">Buscar</button>
    </div>
    <h2 class="d-flex justify-content-center mt-3" id="NomCort"></h2>

</div>

<div class="container">
    <table class="table w-25 table-striped">
        <tr>
            <td class="text-center">Clave</td>
            <td class="text-center">Nombre corto</td>
        </tr>

        @foreach($catalogo_bancos as $catalogo_banco)
        <tr>
            <td class="text-center">{{$catalogo_banco -> clave}}</td>
            <td class="text-center">{{$catalogo_banco-> nombre_corto}}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>

<script>

function searchClave(){
    $("#NomCort").html('');
    var html = '';

   
    const selectClave = document.getElementById('Claves').value;

    
    const claves = {!! json_encode($catalogo_bancos->pluck('clave')->all()) !!};
    const nombresCortos = {!! json_encode($catalogo_bancos->pluck('nombre_corto')->all()) !!};

    
    const index = claves.indexOf(selectClave);
    if (index !== -1) {
        const nombreCorto = nombresCortos[index];
        html += `<h1>${nombreCorto}</h1>`;
        $("#NomCort").html(html);
    } else {
        $("#NomCort").html('<h2>No se encontró un nombre corto para la clave ingresada.</h2>');
    }
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>