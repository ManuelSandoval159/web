    <!-- .Header -->
    <link rel="shortcut icon" href="favicon.ico">
    <?php include_once 'templates/header.php';?> 
    <!-- .Header -->

    <!-- .Carrito -->
    <?php include_once 'includes/funciones/crearCarrito.php';?> 
    <!-- .Carrito -->
 

     <!---Detalles del Carrito-->
     <div class="mini-contenedor cart-peg">
            <table>
                <tr>
                    <th><h2>Bolsa de compras</h2></th>
                    <th><h2>Resumen</h2></th>
                </tr>
            <?php 
                //foreach($datos as $dinero => $lista){ 
                if(isset($_SESSION['carrito'])){ 
                    $arregloCarrito =$_SESSION['carrito'];
                    //echo count($arregloCarrito);
                    //$idCuenta_Pedidos ="";
                    if(isset($_SESSION['IDECUENTA']))
                        $idUsuario__Pedidos = $_SESSION['IDECUENTA'];
                    //$numPedido_Pedidos =$_POST['cu_Passward'];
                    $idProducto_Pedidos = $_SESSION['idPro'];;
                    $cantidad__Pedidos = $arregloCarrito[0]["cantidad"];
                    for($i = 0; $i < count($arregloCarrito); $i++){ 
                        $imagen_fina =$arregloCarrito[$i]['descripcion'];?> 
                    
                <tr>
                    <td>
                        <div class="cart-info">
                        <img src = "<?php echo $arregloCarrito[$i]['descripcion'];?>">
                            <div>
                                <p><h3><?php echo $arregloCarrito[$i]['nombre']; ?></h3></p>
                                <p><?php echo $arregloCarrito[$i]['precio']; ?></p>
                                <small>Talla: <?php echo $arregloCarrito[$i]["talla"];?></small>
                                <br>
                                <small>Cantidad: <input type="number" value=<?php echo $arregloCarrito[$i]['cantidad']; ?>></small>
                                <br>
                                <a>Precio: $<?php echo $arregloCarrito[$i]['imagen']; ?></a>
                                <br>
                                <form method="POST"action="includes/funciones/eliminar-producto.php?id=<?php  echo $arregloCarrito[$i]['id'];?>" >
                                    <button type="submit" class="btn">Eliminar</button>
                                </form>
                                <!--<a href="" class = "Eliminar" data-id = "" >Remover</a>-->
                            </div>
                        </div>        
                    </td>
                    <td>SubTotal</td>
                    <td>$<?php echo $arregloCarrito[$i]['imagen'] * $arregloCarrito[$i]['cantidad'];?></td>
                     <?php $total += $arregloCarrito[$i]['precio'] * $arregloCarrito[$i]['cantidad'];
                           //$idUsuario__Pedidos = 
                           ?>   
                           
                      
                </tr>
            <?php } }else{echo "Noo";} ?>
                        
            </table>
            <div class="total-precio">
                <table>
                    <tr>
                        <td>Gastos de envio</td>
                        <td>$90.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$<?php echo ($total)+17+90 ; ?></td>
                    </tr>
                    <tr>
                        <td>
                                <?php 
                                    if(isset($_SESSION['idPro'])){
                                        echo "<form  method=POST action=Terminar.php?imagen=$imagen_fina&pedidp=$idUsuario__Pedidos >";
                                          
                                          require 'includes\BD_Conection.php';
                                          $numPedi ="SELECT pe_NumeroPedido from pedidos order by pe_NumeroPedido desc limit 1";
                                          
                                          $consult_numPedido = mysqli_query($coneccion,$numPedi);
                                          if($consult_numPedido){
                                              
                                            $isnsertarPedido = "INSERT INTO pedidos (idPedidos, idCuenta, pe_NumeroPedido, idProducto, pe_Cantidad) 
                                                             VALUES (NULL, $idUsuario__Pedidos, 10, $idProducto_Pedidos, $cantidad__Pedidos);";
                                            //echo $isnsertarPedido;
                                            $consult_insertar = mysqli_query($coneccion,$isnsertarPedido);
                                            if($consult_insertar){
                                               echo "Yess";
                                               //SELECT stock - 1 as Resta FROM productos WHERE idProducto LIKE 1
                                               $isnsertarPedido = "SELECT stock - $cantidad__Pedidos as Resta FROM productos WHERE idProducto LIKE idProducto_Pedidos";
                              
                                                $consult_insertar = mysqli_query($coneccion,$isnsertarPedido);
                                                
                                            }else{
                                                
                                                echo "nelson =$consult_insertar";
                                            }
                                        }else{
                                            
                                            echo "nel =$consult_numPedido";
                                        }


                                        
                                    }else{
                                        echo "<form action=productos.php>";
                                    }
                                ?>
                                <button type="submit"class="btnPagar">Comprar</button>
                            </form>
                        </td>
                    </tr> 
                </table>
            </div>
           
        </div>       

  <!-- footer -->
  <?php   include_once 'templates/foolder.php';?> 
    <!-- .footer -->