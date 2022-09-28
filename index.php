<?php

require('master.php');

if($_POST) {

    if(is_dir('data') === false) {
        mkdir('data');
    }

    $json = json_encode($_POST);

    file_put_contents('data/' .time(). '.json', $json);
}

plantilla::aplicar()

?>

<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

  <div class="container" style="margin-top: 40px; padding:40px; border-radius: 10px">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el tipo de animal" type="text" name="tipo">
                <label><b>Tipo</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el codigo del animal" type="text" name="codigo">
                <label><b>Codigo</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa la url" type="text" name="urlFoto">
                <label><b>URL de foto</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el nombre" type="text" name="nombre">
                <label><b>Nombre</b></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el sexo" type="text" name="sexo">
                <label><b>Sexo</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el correo" type="text" name="correo">
                <label><b>Correo</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el telefono" type="text" name="telefono">
                <label><b>Telefono</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa la descripcion" type="text" name="descripcion">
                <label><b>Descripcion</b></label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa la fecha" type="text" name="fecha">
                <label><b>Fecha</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa el color" type="text" name="color">
                <label><b>Color</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa la ubicacion" type="text" name="latitud">
                <label><b>Ubicacion/Latitud</b></label>
            </div>
            <div class="input-field col s12 m6 l3">
                <input required placeholder="Ingresa la ubicacion" type="text" name="longitud">
                <label><b>Ubicacion/Longitud</b></label>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </form>
  </div>

  <hr>

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
                <td><a class='btn waves-effect waves-light red lighten-2' href='delete.php?f={$archivo}'>X</a></td>
            </tr>
            ";
        }
    }
}

?>
    </tbody>
</table>

 