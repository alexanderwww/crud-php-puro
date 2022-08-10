<?php include 'template/header.php' ?>
<?php include 'conexion-admin.php' ?>

<?php

$nuevaConexion3=new conexionBDD();

$idConsulta='';
$tituloConsulta='';
$descripcionConsulta='';

$avisoId=false;
$msID='';

if($_POST){
    // BUSCAR ID
    if(empty($_POST['input-idBuscar'])==false){
    
        $sqlID="SELECT `id` FROM `blog`";
        $arrayID=$nuevaConexion3->consultarID($sqlID);

        foreach($arrayID as $id){
            if($id[0]==$_POST['input-idBuscar']){
                global $idConsulta;
                global $tituloConsulta;
                global $descripcionConsulta;
        
                print_r($_POST['input-idBuscar']);
                $idBuscar=$_POST['input-idBuscar'];
        
                $consultaID="SELECT `id`, `titulo`, `descripcion` FROM `blog` WHERE id=".$idBuscar;
                $datosConsulta2=$nuevaConexion3->consultarID($consultaID);
        
                $idConsulta=$datosConsulta2[0][0];
                $tituloConsulta=$datosConsulta2[0][1];
                $descripcionConsulta=$datosConsulta2[0][2];
                $avisoId=true;
            }
        }
        $msID='ID NO ENCONTRADO';
    }

    if(empty($_POST['input-title'])==false && empty($_POST['input-descripcion'])==false ){
        $idUpdate=$_POST['input-id'];
        $titleUpdate= $_POST['input-title'];
        $descripcionUpdate= $_POST['input-descripcion'];

        $updateSQL="UPDATE `blog` SET `titulo` = '$titleUpdate', `descripcion` = '$descripcionUpdate' WHERE `blog`.`id` =".$idUpdate;
        
        $datosUpdate=$nuevaConexion3->ejecutar($updateSQL);
        print_r ($datosUpdate);
    }

}


?>

    <div class="admin-actualizar section">
        <h1>Actualizar</h1>

        <h4><?php if($avisoId==false){echo $msID;} ?></h4>
        <form class='admin-form' action="actualizar.php" method="post">
                <p>ID Buscar</p>
                <input type="number" name="input-idBuscar" class="input-text input-id">
                <input type="submit" value="Buscar">
        </form>

        <form class="admin-form" action="actualizar.php" method="post">
            <p>ID</p>
            <input type="number" name="input-id" class="input-text" readonly value=<?php echo $idConsulta;?>>
            <p>Titulo</p>
            <input type="text" name="input-title" class="input-text" value=<?php echo $tituloConsulta;?>>
            <p>Descripcion</p>
            <textarea class="input-text" name="input-descripcion" id="" cols="30" rows="5"><?php echo $descripcionConsulta;?></textarea>
            <input class="btn" type="submit" value="Actualizar">
        </form>
        
    </div>

<?php include 'template/footer.php' ?>