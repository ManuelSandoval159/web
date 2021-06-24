    <!-- .Header -->
    <link rel="shortcut icon" href="favicon.ico">
    <?php include_once 'templates/header.php';?> 
    <!-- .Header -->

   
<!-- main -->
       <footer id="footer">
        <div class="container">
            <div class="row mb-3">
                <?php
                    session_start();
                    if(isset($_SESSION['username'])){
                        header("location: detalles_Cuenta.php");
                        echo "<p>si entra</p>";
                    }else{
                         //echo"no";
                        //header("location: datos-usuario.php");
                    }   
                ?>
                <div class="col-3">
                    <h2 class="footer-title secondary-title">Iniciar sesion</h2>
                    <div class="tags">
                        <div class="d-flex flex-wrap">
                            <div class="comment-form">
                            <form method="POST" action="includes/funciones/cu_iniciarSecion.php" >
                            <?php if(isset($_GET['error'])){
                                if($_GET['error'] = 1564582)?>
                                    <a id="mensaje2">
                                        <?php echo "Dato incorrectos";?>
                                    </a>
                            <?php }?>
                                <div class="d-flex justify-content-between flex-wrap" >
                                    <input type="email" class="form-control" placeholder="Email" name="usr_correo">
                                    <input type="password" class="form-control " placeholder="Password" name="user_contraseña">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary display-2 text-light mt-2">Entrar</button>
                                </div>
                             </form>   
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-3">                    
                </div>
                <div class="col-3">
                     <h2 class="footer-title secondary-title">Registro</h2>
                     <div class="tags">
                         <div class="d-flex flex-wrap">
                             <div class="comment-form">
                             <form  method="POST" action="includes/funciones/cu_registrar.php">
                             <a id="mensaje"></a>
                            <div class="form__div">
                                <label id ="labelCorreo" for="" class="form__label">Email</label>
                                <input id ="correo" type="text" class="form__input" placeholder=" " name="usr_correor">
                            </div>    
                            <div class="form__div">
                                
                                <label id ="labelContra" for="" class="form__label">Contraseña</label>
                                <input id ="password" type="password" class="form__input" placeholder=" " name="user_contraseñar">
                            </div>
                            <div class="form__div">
                                <label id ="labelCelular" for="" class="form__label">N Celular</label>
                                <input id ="celular" type="text" class="form__input" placeholder=" " name="user_celular">
                            </div>
                            <div class="form__div">
                               
                                <label id ="labelNombre" for="" class="form__label">Nombre</label>
                                <input id ="nombre" type="text" class="form__input" placeholder=" " name="user_nombre">
                            </div>
                            <div class="form__div">
                                
                                <label id ="labelApellido" for="" class="form__label">Direccion</label>
                                <input id ="apellido" type="text" class="form__input" placeholder=" " name="user_apellido">
                            </div>    
                                                           
                                 <div class="text-center">
                                     <button type="submit" class="btn btn-primary display-2 text-light mt-2">Registrar</button>
                                 </div>
                             </form>
                             </div>
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
    <script src="validaciones.js"> </script>

</body>
</html>