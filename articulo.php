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
            <form action="carrito.php" method="POST">
            
                <h2 class="footer-title secondary-title"><?php echo $even['nombre'];?></h2>

                <div class="secondary-title text-secondary">
                     <p class="mt-2">
                     <?php echo $even['descripcion'];?>
                     </p>
                     <img src="<?php echo $even['ruta'];?>" alt="">
                     <address>
                         
                         <?php echo $even['detalles'];?>
                     </address>

                     <div class="px-1">
                         
                         <?php echo '$', $even['precio'];?>
                     </div>

                     <div class="px-1">
                         
                         <?php echo $even['categoria'];?>
                     </div>
                     <input class="inp" type="number" name="cantidad" value="1"><!--Catidad-->
                     
                            <select name="talla"><!--Talla-->
                                <option value =<?php echo $eventos2["talla1"]; ?>><?php echo $eventos2['talla1']; ?></option>
                                <option value =<?php echo $eventos2["talla2"]; ?>><?php echo $eventos2['talla2']; ?></option>
                                <option value =<?php echo $eventos2["talla3"]; ?>><?php echo $eventos2['talla3']; ?></option>
                                <option value =<?php echo $eventos2["talla4"]; ?>><?php echo $eventos2['talla4']; ?></option>
                                <option value =<?php echo $eventos2["talla5"]; ?>><?php echo $eventos2['talla5']; ?></option>
                            </select>
                           <!--<a href="carrito.php?id=<?php //echo $even['id'];?>"> Cambiar--> 
                            <?php 
                                //echo $producto;
                                session_start();
                                $_SESSION['id'] = $even['id'];
                                $_SESSION['idPro'] = $producto;
                            ?>      
                     <div class="text-center">

                        <button type="submit" class="btn btn-primary display-2 text-light mt-2">Comprar</button>
                    </div>
                </form>
                <?php }else{   ?>
                    <form action="cuenta.php">
                    <h2 class="footer-title secondary-title"><?php echo $even['nombre'];?></h2>

                    <div class="secondary-title text-secondary">
                    <p class="mt-2 ">
                    <?php echo $even['descripcion'];?>
                    </p>
                    <img src="<?php echo $even['ruta'];?>" alt="">
                    <address>
                        <i class="fas fa-map-marker-alt text-primary"></i> 
                        <?php echo $even['detalles'];?>
                    </address>

                    <div class="px-1">
                        <i class="fas fa-mobile text-primary"></i> 
                        <?php echo '$', $even['precio'];?>
                    </div>

                    <div class="px-1">
                        <i class="fas fa-envelope text-primary"></i> 
                        <?php echo $even['categoria'];?>
                    </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary display-2 text-light mt-2">Comprar</button>
                        </div>

                       
                        <input class="inp" type="number" name="cantidad" value="1"><!--Catidad-->
                            <select name="talla"><!--Talla-->
                                <option value =<?php echo $eventos2["talla1"]; ?>><?php echo $eventos2['talla1']; ?></option>
                                <option value =<?php echo $eventos2["talla2"]; ?>><?php echo $eventos2['talla2']; ?></option>
                                <option value =<?php echo $eventos2["talla3"]; ?>><?php echo $eventos2['talla3']; ?></option>
                                <option value =<?php echo $eventos2["talla4"]; ?>><?php echo $eventos2['talla4']; ?></option>
                                <option value =<?php echo $eventos2["talla5"]; ?>><?php echo $eventos2['talla5']; ?></option>
                            </select>
                    </form>    

                <?php }?>
                </div>
            </div>
            <div class="col-3">           
            </div>
            <?php } ?>
        <?php } ?> 

        
            <div class="col-3">
                       <h2 class="footer-title secondary-title">Articulos relacionados</h2>
                       <div class="feature-post">
                           <div class="flex-item">
                               <article class="article">
                                   <div class="d-flex">
                                       <a href="#">
                                           <img src="assets/img/producto-nike-espalda.jpg" class="object-fit px-1" alt="">
                                           <div class="px-1">
                                               <a href="#" class="text-title display-2 text-dark">
                                                Looking for some feedback for this rejected track
                                                technology
                                               </a>
                                               <p class="secondary-title text-secondary display-3">
                                                    <span><i class="far fa-clock text-primary"></i> Clock Wed 02, 2021 </span>
                                               </p>
                                           </div>
                                       </a>
                                   </div>
                               </article>
                           </div>
                           <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="#">
                                        <img src="assets/img/producto-nike-espalda.jpg" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                             Looking for some feedback for this rejected track
                                             technology
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                 <span><i class="far fa-clock text-primary"></i> Clock Wed 02, 2021 </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                             </div>
                             <div class="flex-item">
                                <article class="article">
                                    <div class="d-flex">
                                        <a href="#">
                                            <img src="assets/img/producto-nike-espalda.jpg" class="object-fit px-1" alt="">
                                            <div class="px-1">
                                                <a href="#" class="text-title display-2 text-dark">
                                                 Looking for some feedback for this rejected track
                                                 technology
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </article>
                            </div>
                       </div>
                   </div>
        </div>
    </div>
<!-- footer -->
<?php include_once 'templates/foolder.php';?> 
<!-- .footer -->
   
</body>
</html>