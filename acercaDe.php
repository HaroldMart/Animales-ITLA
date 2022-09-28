<?php

require('master.php');

plantilla::aplicar()

?>

<style>
    .container {
        display: grid;
        margin-top: 10px;
        background-color: #06283D; 
        gap: 20px;
        border-radius: 10px;
        align-items: center;
        grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));
        padding: 20px;
    }
    .parrafo {
        color: #06283D; 
        font-size: large; 
        color:white; 
        padding: 10px;
        
    }

    img {
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }

</style>

<div class="container">
    <div class="imagen">
      <img src="perfil.jpg">    
    </div>
        <p class="parrafo">
          <b style="color: white">Nombre: </b> Haroldy Jose Martinez Guzman <br><br>
        <b style="color: white">Matricula: </b>2021-0428 <br><br>
           La tarea me parecio muy interesante y fue un reto para mi.
        </p>
</div>
