<h1 class="nombre-pagina">Actualizar Servicio</h1>
<p class="descripcion-pagina">Modifica los Valores del Formulario</p>

<?php 
@include_once __DIR__ . '/../templates/barra.php';
@include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" value="Actualizar Servicio" class="boton">
</form>