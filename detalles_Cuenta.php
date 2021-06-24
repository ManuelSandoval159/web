    <!-- .Header -->
    <link rel="shortcut icon" href="favicon.ico">
    <?php include_once 'templates/header.php';?> 
    <!-- .Header -->


    <footer id="footer">
        <div class="container">
            <div class="row mb-3">
                <div class="col-3">
                <?php
                    session_start();
                    if(isset($_SESSION['username'])){?>
                    <a href = 'includes/funciones/cerrarCuenta.php'>cerrar
                        <!--<img src="" width="95px" height="25px"></img>-->
                    </a>
                    <?php }else{
                    header("location: ../../cuentas.php");
                    }
                ?> 
                <h2 class="footer-title secondary-title">Datos de cuenta</h2>
                    <div class="tags">
                        <div class="d-flex flex-wrap">
                            <div class="comment-form">
                                <?php
                                try{
                                    require_once('includes/BD_Conection.php');
                                    if(isset($_SESSION['username'])){
                                        $correo = $_SESSION['username'];
                                        $sql = "SELECT * FROM cuentas WHERE cu_Email LIKE '$correo';";
                                        $resultado = $coneccion->query($sql);
                                    }else{
                                        //echo"<h2>No existe</h2>";
                                    }
                                }catch(Exception $e){
                                    echo $e->getMessage();
                                }
                                ?>
                                <?php 
                                $datos  = array();
                                while($eventos = $resultado->fetch_assoc()){
                                    $celular =$eventos['cu_Celular'];
                                    $eventos = array(
                                        'idCuenta'    =>$eventos['id_Cuenta'],
                                        'nombre'    =>$eventos['cu_Usuario'],
                                        'email'     =>$eventos['cu_Email'],
                                        'password'  =>$eventos['cu_Passward'],
                                        'direccion' =>$eventos['cu_Direccon'],
                                        'celular'   =>$eventos['cu_Celular']
                                    );
                                $datos[$celular][] = $eventos;
                                ?>    
                                <?php } ///fin while            ?>
                                <form method="POST" action="includes/funciones/Guardar_Actualizar/gu_DatosCuenta.php" >
                                <?php
                                    foreach($datos as $celular => $lista){ ?>
                                    <?php foreach($lista as $even){?>   
                                        <div class="d-flex justify-content-between flex-wrap" >
                                            <input type="text" class="form-control"  name="usr_nombre" value="<?php echo $even['nombre'];?>">
                                            <input type="email" class="form-control"  name="usr_email" value="<?php echo $even['email'];?>">
                                            <input type="text" class="form-control"  name="usr_direccion"value="<?php echo $even['direccion'];?>">
                                            <input type="text" class="form-control"  name="usr_celular" value="<?php echo $even['celular'];?>">
                                            <input type="password" class="form-control"  name="usr_password" value="<?php echo $even['password'];?>">
                                            <?php $_SESSION['id'] = $even['idCuenta'];?>    
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary display-2 text-light mt-2">Actualizar</button>
                                        </div> 
                                    <?php } ?>
                                <?php } ?>  
                                </form>   
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-3">
                    <br>
                    <h2 class="footer-title secondary-title">Pedidos</h2>
                    <?php
                        try{
                            require_once('includes/BD_Conection.php');
                            if(isset($_SESSION['username'])){
                                $correo = $_SESSION['username'];                                            
                                $sql_id = "SELECT * FROM cuentas WHERE cu_Email LIKE '$correo';";

                                $consult_id = mysqli_query($coneccion,$sql_id);
                                $array_id = mysqli_fetch_array($consult_id);

                                $sql = "SELECT * FROM pedidos WHERE idCuenta LIKE $array_id[0];";
                                $resultado = $coneccion->query($sql);
                                $_SESSION['IDECUENTA'] =$array_id[0];
                                
                            }else{
                                //echo"<h2>No existe</h2>";
                            }
                        }catch(Exception $e){
                            echo $e->getMessage();
                        }
                        ?>
                        <?php 
                        $datos  = array();
                        while($eventos = $resultado->fetch_assoc()){
                            $pedido =$eventos['idCuenta'];
                            $eventos = array(
                                'numeroP'=>$eventos['pe_NumeroPedido'],
                                'producto'=>$eventos['idProducto'],
                                'cantidad'=>$eventos['pe_Cantidad']
                            );
                        $datos[$pedido][] = $eventos;
                       
                        ?>    
                        <?php } ///fin while            ?>
                    <div class="feature-post">
                        <div class="flex-item">
                        <?php 
                        //if(isset($datos[$pedido])){  
                            foreach($datos as $pedido => $lista){ ?>
                            <?php foreach($lista as $even){?>   
                            <article class="article">
                                <div class="d-flex">
                                    <a href="#">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                            Numero de pedido: <?php echo $even['numeroP'];?>
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i>Cantidad: <?php echo $even['cantidad'];?></span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                            <?php } ?>
                        <?php } ?>
                       
                        <?php// }?> 
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-3">
                    <br>    
                    <h2 class="footer-title secondary-title">Domicilio</h2>
                        <div class="tags">
                            <div class="d-flex flex-wrap">
                                <div class="comment-form">
                                    <?php
                                    try{
                                        require_once('includes/BD_Conection.php');
                                        if(isset($_SESSION['username'])){
                                            $correo = $_SESSION['username'];                                            
                                            $sql_id = "SELECT * FROM cuentas WHERE cu_Email LIKE '$correo';";

                                            $consult_id = mysqli_query($coneccion,$sql_id);
                                            $array_id = mysqli_fetch_array($consult_id);

                                            $sql_count = "SELECT COUNT(*) as contar FROM domicilio WHERE idCuenta LIKE $array_id[0];";
                                            $cons_count = mysqli_query($coneccion,$sql_count);
                                            $array_count = mysqli_fetch_array($cons_count);
                                            
                                            if($array_count['contar'] > 0){
                                                $band_Domi = true;
                                                $sql = "SELECT * FROM domicilio WHERE idCuenta LIKE $array_id[0];";
                                                $resultado = $coneccion->query($sql);
                                            }else{
                                                $band_Domi = false;
                                            }
                                            
                                        }else{
                                            //echo"<h2>No existe</h2>";
                                        }
                                    }catch(Exception $e){
                                        echo $e->getMessage();
                                    }
                                    ?>
                                    <?php 
                                        if($band_Domi = true){
                                            $datos_Dom  = array();
                                            while($eventos = $resultado->fetch_assoc()){
                                                $cuenta =$eventos['idCuenta'];
                                                $eventos = array(
                                                    'calle'         =>$eventos['do_Calle'],
                                                    'colonia'       =>$eventos['do_Colonia'],
                                                    'descripcion'   =>$eventos['do_Descripcion']
                                                ); 
                                                $datos_Dom[$cuenta][] = $eventos;
                                            }  ///fin while  
                                    ?>    
                                    <?php }///fin if             ?>
                                                                                
                                    <?php if(isset($datos_Dom[$cuenta]) ){ ?>
                                    <form method="POST" action="includes/funciones/Guardar_Actualizar/gu_Domicilio.php" >
                                        <?php  foreach($datos_Dom as $cuenta => $lista){ ?>
                                            <?php foreach($lista as $even){?>   
                                                <div class="d-flex justify-content-between flex-wrap" >
                                                    <input type="text" class="form-control"  name="do_calle" value="<?php echo $even['calle'];?>">
                                                    <input type="text" class="form-control"  name="do_colonia" value="<?php echo $even['colonia'];?>">
                                                    <textarea class="form-control mt-3" placeholder="Message" rows="5"  name="do_Descripcion" ><?php echo $even['descripcion'];?></textarea>
                                                    <?php $_SESSION['id'];?> 
                                                </div>
                                                <?php } ?>
                                        <?php } ?> 
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary display-2 text-light mt-2">Actualizar</button>
                                            </div>
                                    <?php }else{  ?>
                                        <form method="POST" action="includes/funciones/Guardar/gu_Domicilio.php" > 
                                            <div class="d-flex justify-content-between flex-wrap" >
                                                <input type="text" class="form-control"  name="do_calle" placeholder="Calle">
                                                <input type="text" class="form-control"  name="do_colonia" placeholder="Colonia">
                                                <textarea class="form-control mt-3" placeholder="Descripcion" rows="5"  name="do_Descripcion" ></textarea>
                                                <?php $_SESSION['id'];?> 
                                            </div>  
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary display-2 text-light mt-2">Guardar</button>
                                            </div> 
                                    <?php } ?> 
                                </form>   
                                </div>
                            </div>
                        </div>                 
                </div>
                <div class="col-3">
                    <br>    
                    <h2 class="footer-title secondary-title">Tarjeta</h2>
                        <div class="tags">
                            <div class="d-flex flex-wrap">
                                <div class="comment-form">
                                    <?php
                                    try{
                                        require_once('includes/BD_Conection.php');
                                        if(isset($_SESSION['username'])){
                                            $correo = $_SESSION['username'];                                            
                                            $sql_id = "SELECT * FROM cuentas WHERE cu_Email LIKE '$correo';";

                                            $consult_id = mysqli_query($coneccion,$sql);
                                            $array_id = mysqli_fetch_array($consult_id);

                                            $sql_count = "SELECT COUNT(*) as contar FROM tarjeta WHERE idCuenta LIKE $array_id[0];";
                                            $cons_count = mysqli_query($coneccion,$sql_count);
                                            $array_count = mysqli_fetch_array($cons_count);

                                            if($array_count['contar'] > 0){
                                                $band_Tarj = true;
                                                $sql = "SELECT * FROM tarjeta WHERE idCuenta LIKE $array_id[0];";
                                                $resultado = $coneccion->query($sql);
                                            }else{
                                                $band_Tarj = false;
                                            }

                                        }else{
                                            //echo"<h2>No existe</h2>";
                                        }
                                    }catch(Exception $e){
                                        echo $e->getMessage();
                                    }
                                    ?>
                                    <?php 
                                        if($band_Tarj = true){
                                            $datos  = array();
                                            while($eventos = $resultado->fetch_assoc()){
                                                $celular =$eventos['idCuenta'];
                                                $eventos = array(
                                                    'numeros'=>$eventos['ta_Numeros'],
                                                    'tarjeta'=>$eventos['ta_tipoTarjeta'],
                                                    'fecha'=>$eventos['ta_fecha'],
                                                    'pin'=>$eventos['ta_pin']
                                                );
                                            $datos[$celular][] = $eventos;
                                        ?>    
                                        <?php } }///fin while            ?>
                                  
                                    <?php if(isset($datos[$celular]) ){ ?>
                                    <form method="POST" action="includes/funciones/Guardar_Actualizar/gu_Tarjeta.php" >
                                    <?php foreach($datos as $celular => $lista){ ?>
                                        <?php foreach($lista as $even){?>   
                                                <div class="d-flex justify-content-between flex-wrap" >
                                                    <input type="text" class="form-control"  name="ta_numeros" value="<?php echo $even['numeros'];?>">
                                                    <input type="text" class="form-control"  name="ta_tarjeta" value="<?php echo $even['tarjeta'];?>">
                                                    <input type="text" class="form-control"  name="ta_fecha"value="<?php echo $even['fecha'];?>">
                                                    <input type="text" class="form-control"  name="ta_pin" value="<?php echo $even['pin'];?>">
                                                    <?php $_SESSION['id'] = $array_id[0];?> 
                                                </div>
                                            <?php } ?>
                                        <?php } ?> 
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary display-2 text-light mt-2">Actualizar</button>
                                            </div>
                                    <?php }else{?> 
                                        <form method="POST" action="includes/funciones/Guardar_Actualizar/gu_Tarjeta.php" > 
                                            <div class="d-flex justify-content-between flex-wrap" >
                                                <input type="text" class="form-control"  name="ta_numeros" placeholder="Numeros">
                                                <input type="text" class="form-control"  name="ta_tarjeta" placeholder="Debito/Credito">
                                                <input type="text" class="form-control"  name="ta_fecha" placeholder="Fecha dd/nn/mm">
                                                <input type="text" class="form-control"  name="ta_pin" placeholder="PIN">
                                                <?php $_SESSION['id']; ?> 
                                            </div> 
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary display-2 text-light mt-2">Guardar</button>
                                            </div> 
                                    <?php } ?>          
                                    </form>   
                                </div>
                            </div>
                        </div>                 
                </div>
        </div>
    </footer>
 <!-- .main -->
  <!-- footer -->
  <?php   include_once 'templates/foolder.php';?> 
    <!-- .footer -->