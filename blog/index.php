<?php include 'template/header.php'; ?>
<?php include '../admin/conexion-admin.php'; ?>

<?php

$newConnection4=new conexionBDD();

$queryData=$newConnection4->consultar("SELECT * FROM `blog` ");


// print_r($queryData);

?>

    <div class="blog section">
        <div class="title-blog">
            <h2>EXPERIENCIAS</h2>
        </div>
        <div class="container-blog">
            <?php foreach($queryData as $item){ ?>
            
                <div class="item">
                <div class="color"></div>
                <h3 class="titulo"><?php echo $item[1];?></h3>
                <p class="descripcion"><?php echo $item[2]?></p>
            </div>
            
            <?php } ?>

        </div>
    </div>

<?php include 'template/footer.php'; ?>
