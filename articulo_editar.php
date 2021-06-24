    <!-- .Header -->
    <link rel="shortcut icon" href="favicon.ico">
    <?php include_once 'templates/header.php';?> 
    <!-- .Header -->
    <?php include_once 'includes/funciones/QueryProductosId.php';?> 


    <div class="container">
        <div class="row mb-3">
        <?php 
        foreach($datos as $dinero => $lista){ ?>
            <?php foreach($lista as $even){?>
            <div class="col-3">
            <?php
                session_start();
                if(isset($_SESSION['username'])){
                    $producto = $even['id'];                     
            ?>
            <form action="includes\funciones\editar_prod.php?id=<?php echo $producto?>" method="POST">
        
                <input id ="correo" type="text" class="form__input" value="<?php echo $even['nombre'];?>" name="upb_nombre">
                <div class="secondary-title text-secondary">
                     
                     <input id ="correo" type="text" class="form__input" value="<?php echo $even['descripcion'];?>" name="upb_descripcion">
                
                     <img src="<?php echo $even['ruta'];?>" alt="">
                     <input id ="correo" type="text" class="form__input" value="<?php echo $even['ruta'];?>" name="upb_ruta">
                    <textarea class="form-control"  rows="5" name="upb_detalles"><?php echo $even['detalles'];?></textarea>

                     <div class="px-1">
                         
                         <input id ="correo" type="text" class="form__input" value="<?php echo $even['precio'];?>" name="upb_precio">
                     </div>

                     <div class="px-1">
                         
                         <?php echo $even['categoria'];?>
                     </div>
                     <a>STOK</a>
                     <input id ="correo" type="text" class="form__input" value="<?php echo $even['stock'];?>" name="upb_stok">
                     

                            <!-- select name="talla">
                                <option value =<?php echo $eventos2["talla1"]; ?>><?php echo $eventos2['talla1']; ?></option>
                                <option value =<?php echo $eventos2["talla2"]; ?>><?php echo $eventos2['talla2']; ?></option>
                                <option value =<?php echo $eventos2["talla3"]; ?>><?php echo $eventos2['talla3']; ?></option>
                                <option value =<?php echo $eventos2["talla4"]; ?>><?php echo $eventos2['talla4']; ?></option>
                                <option value =<?php echo $eventos2["talla5"]; ?>><?php echo $eventos2['talla5']; ?></option>
                            </select -->
                           <!--<a href="carrito.php?id=<?php //echo $even['id'];?>"> Cambiar--> 
                            <?php 
                                //echo $producto;
                                session_start();
                                $_SESSION['id'] = $even['id'];
                                $_SESSION['idPro'] = $producto;
                            ?>      
                     <div class="text-center">

                        <button type="submit" class="btn btn-primary display-2 text-light mt-2">Actualizar</button>
                    </div>
                </form>
                <?php }   ?>
            <?php } ?>
        <?php } ?> 
        </div>
        </div>
    </div>
    
<!-- footer -->
<?php include_once 'templates/foolder.php';?> 
<!-- .footer -->
   
</body>
</html>