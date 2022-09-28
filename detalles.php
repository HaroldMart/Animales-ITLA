<?php

require('master.php');
plantilla::aplicar()

?>

<style>
    .container {
        width: 500px;
        margin: 20px auto;
        justify-content: center;
        align-items: center;
        background-color: grey;
        border-radius: 10px;
    }

    img {
        width: 100%;
        
    }

    .card-content {
        display: grid;
        align-items: center;
        justify-content: center;
        gap: 10px;
        grid-template-columns: 1fr 1fr;
    }

</style>

<?php

$f = $_GET['f'];


if(file_exists('data/' .$f)) {

    $json = file_get_contents('data/' .$f);

    $dato = json_decode($json, false);

    
    $tipo = $dato -> tipo;
    $codigo = $dato -> codigo;
    $foto = $dato -> urlFoto;
    $nombre = $dato -> nombre;
    $sexo = $dato -> sexo;
    $correo = $dato -> correo;
    $telefono = $dato -> telefono;
    $descripcion = $dato -> descripcion;
    $fecha = $dato -> fecha;
    $color = $dato -> color;
    $latitud = $dato -> latitud;
    $longitud = $dato -> longitud;
   
    echo "

       
    ";

}

?>

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $foto; ?>"> <br>
                    <span class="card-title"><h3><?php echo $nombre; ?></h3></sapn>
                </div>
                <hr>
            <div class="card-content">
                <p><b>Tipo: </b><?php echo $tipo; ?></p>
                <p><b>Codigo: </b><?php echo $codigo; ?></p>
                <p><b>Descripcion: </b><?php echo $descripcion; ?></p>
                <p><b>Sexo: </b><?php echo $sexo; ?></p>
                <p><b>Correo: </b><?php echo $correo; ?></p>
                <p><b>Telefono: </b><?php echo $telefono; ?></p>
                <p><b>Color: </b><?php echo $color; ?></p>
                <p><b>Fecha: </b><?php echo $fecha; ?></p>
                <p><b>Latitud: </b><?php echo $latitud; ?></p>
                <p><b>Longitud: </b><?php echo $longitud; ?></p>
            </div>
            <div class="card-action">
            <a class="btn primary no-print" onclick="print()" href="#"s>Imprimir</a>
            </div>
            </div>
        </div>
    </div>
</div>