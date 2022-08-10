<?php include 'template/header.php' ?>
<?php include 'conexion-admin.php' ?>

<?php


if($_POST){
    if(empty($_POST['inputAgregar-title'])==false){
        $titulo=$_POST['inputAgregar-title'];
        $descripcion=$_POST['inputAgregar-descripcion'];
        $nuevaConexion1=new conexionBDD();
        $datoId=$nuevaConexion1->ejecutar("INSERT INTO `blog` (`id`, `titulo`, `descripcion`) VALUES (NULL, '$titulo', '$descripcion')");
    }else{
        echo 'vacio';
    }
}

?>

    <div class="admin-agregar section">

        <h1>Agregar</h1>

        <form class="admin-form" action="agregar.php" method="post">
            <p>Titulo</p>
            <input type="text" name="inputAgregar-title" class="input-text">
            <p>Descripcion</p>
            <textarea class="input-text" name="inputAgregar-descripcion" id="" cols="30" rows="8"></textarea>
            <input class="btn" type="submit" value="Agregar">
        </form>

    </div>

<?php include 'template/footer.php' ?>
