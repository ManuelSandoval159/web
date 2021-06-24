<link rel="shortcut icon" href="favicon.ico">
<?php include_once 'templates/header.php';?> 

    
    <div class="mini-contenedor">
        <div class="filas filas-2">
            <h2>Todos los productos</h2>
        </div>
       
        <?php include_once 'includes/funciones/productos.php';?>  
       
        </div> 
    </div> 
        <!-- Swiper slider -->
        <section class="slider">
                    <div class="container">

                        <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img1.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                     <!-- Slides -->
                                      <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img2.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                     <!-- Slides -->
                                      <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img3.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                        <!-- Slides -->
                                             <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img4.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <a href="#">
                                                <img src="./assets/slider/img5.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                            <!-- Slides -->
                                            <div class="swiper-slide">
                                                <a href="#">
                                                    <img src="./assets/slider/img6.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                                <!-- Slides -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img src="./assets/slider/img7.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                    <!-- Slides -->

                                </div>
                            </div>

                    </div>
                </section>
             <!-- .Swiper slider -->
    
    <!-- footer -->
        <?php include_once 'templates/foolder.php';?> 
    <!-- .footer -->
    
    <!-- masonry libray for horizontal grid -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>

    <!-- swiper slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js" integrity="sha512-1LlEYE0qExJ/GUfAJ0k2K2fB5sIvMv/q6ueo3syohvQ3ElWDQVSMUOf39cxaDWHtNu7M6lF6ZC1H6A1m3SvheA==" crossorigin="anonymous"></script>

    <!-- custom javascript main.js file -->
    <script src="main.js"></script>
</body>
</html>