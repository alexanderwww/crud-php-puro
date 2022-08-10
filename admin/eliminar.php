<?php include 'template/header.php' ?>
<?php include 'conexion-admin.php' ?>

<?php

$nuevaConexion2=new conexionBDD();

if($_GET){
    if(isset($_GET['itemID'])){
        $idEliminar=$_GET['itemID'];
        $eliminarSQL='DELETE FROM blog WHERE `blog`.`id` ='.$idEliminar;
        $datoEliminado=$nuevaConexion2->ejecutar($eliminarSQL);
        header('location:eliminar.php');

    }

}

$datosConsulta=$nuevaConexion2->consultar("SELECT * FROM `blog` ");
print_r($datosConsulta);
?>

    <div class="admin-eliminar section">
        <h1>Eliminar</h1>
        <div class="container-eliminar">

            <?php foreach($datosConsulta as $item){ ?>
                <!-- para llamar a una funcion se puede usar el metodo post ,
                solo poniendo el item como un form y verificamos con php  y es como llamar a una funcion -->
        
                <div class="item">
                    <div class="item-info">
                        <h2><?php echo $item[0]; ?></h2>
                        <h3 class="titulo"><?php echo $item[1]; ?></h3>
                        <p class="descripcion"><?php echo $item[2]; ?></p>
                    </div>
                    <div class="item-btn">
                        <a href="?itemID=<?php echo $item[0]; ?>" id='btn-eliminar'>X</a>
                    </div>
                </div>

            <?php } ?>
            
        </div>
    </div>

<?php include 'template/footer.php' ?>