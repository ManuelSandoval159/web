    <!-- .Header -->
    <link rel="shortcut icon" href="favicon.ico">
    <?php include_once 'templates/header.php';?> 
    <!-- .Header -->
       <!---Productos destacados-->
    <div class="mini-contenedor">
        <h2 class="titulo">Nike</h2>
        <?php include_once 'includes/funciones/pro_categoriaNike.php';?>  

        <h2 class="titulo">Adidas</h2>
        <?php include_once 'includes/funciones/pro_categoriaAdidas.php';?>  

        <h2 class="titulo">Puma</h2>
        <?php include_once 'includes/funciones/pro_categoriaPuma.php';?>    
    </div>
    <!-- footer -->
    <?php include_once 'templates/foolder.php';?> 
    <!-- .footer -->

</body>
</html>