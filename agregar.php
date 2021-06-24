<!-- .Header -->
<link rel="shortcut icon" href="favicon.ico">
<?php include_once 'templates/header.php';?> 
   <!-- .Header -->

   <footer id="footer">
        <div class="container">
            <div class="row mb-3">
            <h2 class="footer-title secondary-title">Agregar </h2>
                <div class="col-3">
                <div class="tags">
                <h2 class="footer-title secondary-title"> un nuevo producto </h2>
                         <div class="d-flex flex-wrap">
                             <div class="comment-form">
                             <form  method="POST" action="includes/funciones/registrar_producto.php">
                             <a id="mensaje"></a>
                            <div class="form__div">
                                <label id ="labelCorreo" for="" class="form__label">Nombre del producto</label>
                                <input id ="correo" type="text" class="form__input" placeholder=" " name="nom_prod">
                            </div>    
                            <div class="form__div">
                                
                                <label id ="labelContra" for="" class="form__label">Descripcion corta</label>
                                <input id ="text" type="text" class="form__input" placeholder=" " name="desc_prod">
                            </div>
                            <div class="form__div">
                                <label id ="labelCelular" for="" class="form__label">Detalles</label>
                                <textarea class="form-control mt-3" rows="5" name="deta_prod"></textarea>
                            </div>
                            <div class="form__div">
                               
                                <label id ="labelNombre" for="" class="form__label">Precio</label>
                                <input id ="nombre" type="text" class="form__input" placeholder=" " name="precio_prod">
                            </div>
                            <div class="form__div">
                                
                                <label id ="labelApellido" for="" class="form__label">Ruta de la imagen</label>
                                <input id ="apellido" type="text" class="form__input" placeholder=" " name="ruta_prod">
                            </div>    
                             
                             </div>
                         </div>
                     </div>                    
                </div>
                <div class="col-3">
                     <div class="tags">
                     <h2 class="footer-title secondary-title">_</h2>
                         <div class="d-flex flex-wrap">
                             <div class="comment-form">
                            
                             <a id="mensaje"></a>
                            <div class="form__div">
                                <label id ="labelCorreo" for="" class="form__label">Categoria</label>
                                <select name="cate_prod"><!--Talla-->
                                    <option value ="Nike">Nike</option>
                                    <option value ="Adidas">Adidas</option>
                                    <option value ="Puma">Puma</option>
                                </select>
                            </div>    
                            <div class="form__div">
                                
                                <label id ="labelContra" for="" class="form__label">Stok</label>
                                <input id ="number" type="text" class="form__input" placeholder=" " name="stok_prod">
                            </div>                         
                                 <div class="text-center">
                                     <button type="submit" class="btn btn-primary display-2 text-light mt-2">Agregar</button>
                                 </div>
                             </form>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer -->
<?php include_once 'templates/foolder.php';?> 
<!-- .footer -->
</body>
</html>