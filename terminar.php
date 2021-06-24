     <!-- .Header -->
     <link rel="shortcut icon" href="favicon.ico">
     <?php include_once 'templates/header.php';?> 
    <!-- .Header -->

    <!-- post footer -->
    <div class="post-footer mb-3">
                       <div class="post-author text-center">
                        <div class="author-avatar">
                            <img src=" <?php isset($_GET["imagen"]) ? print $_GET["imagen"] : ""; ?>" class="rounded" alt="">
                        </div>

                        <div class="author-info py-2">
                           
                            <p class="text-dark secondary-title">
                            Nuemro de pedido: <?php isset($_GET["pedidp"]) ? print $_GET["pedidp"] : ""; rand()?>
                            </p><?php
                                $fecha = date("y-m-d");
                                $hora = date("H:i:s");
                                $fechaH = $fecha." ".$hora;?>
                            <p class="text-dark secondary-title">
                            Su envio llegara en los proximo dias  
                            </p>
                            <p class="text-dark secondary-title">
                             <?php echo $fechaH;?> 
                            </p>
                            
                            <div class="text-center">
                                <button onclick="imprimirPagina();" type="submit" class="btn btn-primary display-2 text-light mt-2">Descargar pdf</button>
                            </div>
                        </div>

                    </div>

                       
                    </div>

                </div>
                <!-- .post footer -->

            </section>
        <!-- .Post Content -->
  
    <!-- footer -->
  <?php   include_once 'templates/foolder.php';?> 
    <!-- .footer -->
    <script src="imprimir.js"></script> 