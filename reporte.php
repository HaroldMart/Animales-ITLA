<?php

require('master.php');

plantilla::aplicar()

?>

<table class="striped centered container" style="margin-top: 30px; width: 100%">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Color</th>
            <th>Latitud</th>
            <th>Longitud</th>
        </tr>
    </thead>
    <tbody>

<?php

if(is_dir('data')) {
    $archivos = scandir('data');

    foreach($archivos as $archivo) {

        if($archivo != '.' && $archivo != '..') {
            $json = file_get_contents('data/' .$archivo);

            $datos = json_decode($json);

            echo "
            <tr>
                <td>{$datos -> tipo}</td>
                <td>{$datos -> codigo}</td>
                <td>{$datos -> nombre}</td>
                <td>{$datos -> sexo}</td>
                <td>{$datos -> correo}</td>
                <td>{$datos -> telefono}</td>
                <td>{$datos -> descripcion}</td>
                <td>{$datos -> fecha}</td>
                <td>{$datos -> color}</td>
                <td>{$datos -> latitud}</td>
                <td>{$datos -> longitud}</td>
                <td><a class='btn waves-effect waves-light blue darken-2' href='detalles.php?f={$archivo}'>Detalles</a></td>
            </tr>
            ";
        }
    }
}

?>
    </tbody>    
</table>


 