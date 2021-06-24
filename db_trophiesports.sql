-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2021 at 04:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trophiesports`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE `cuentas` (
  `id_Cuenta` int(11) NOT NULL,
  `cu_Usuario` varchar(50) NOT NULL,
  `cu_Email` varchar(50) NOT NULL,
  `cu_Passward` varchar(8) NOT NULL,
  `cu_Direccon` varchar(50) NOT NULL,
  `cu_Celular` int(11) NOT NULL,
  `cu_Privilegio` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`id_Cuenta`, `cu_Usuario`, `cu_Email`, `cu_Passward`, `cu_Direccon`, `cu_Celular`, `cu_Privilegio`) VALUES
(1, 'adm', 'adm@gmail.com', '123', 'dddd', 871736, 0),
(3, 'Jorge M', 'JorgeM@gmail.com', '12345', 'Torreon', 11111115, 0),
(4, 'sdasd asd', 'qwertyuiopasdfgh@asdas.com', '12345678', 'asdasd asdsa', 1234678901, 0);

-- --------------------------------------------------------

--
-- Table structure for table `domicilio`
--

CREATE TABLE `domicilio` (
  `idDomicilio` int(11) NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `do_Calle` varchar(255) NOT NULL,
  `do_Colonia` varchar(255) NOT NULL,
  `do_Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `domicilio`
--

INSERT INTO `domicilio` (`idDomicilio`, `idCuenta`, `do_Calle`, `do_Colonia`, `do_Descripcion`) VALUES
(1, 1, 'Calle terceraa', 'centroaaaaa', 'casa blanca dos pisos en la esquinaa'),
(3, 3, 'calle cuarta', 'Centro', 'casa');

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `pe_NumeroPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `pe_Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`idPedidos`, `idCuenta`, `pe_NumeroPedido`, `idProducto`, `pe_Cantidad`) VALUES
(1, 3, 1, 8, 1),
(2, 3, 2, 1, 1),
(3, 1, 3, 4, 1),
(10, 3, 10, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `pro_Nombre` varchar(50) NOT NULL,
  `pro_Descripcion` varchar(70) NOT NULL,
  `pro_Detalles` varchar(255) NOT NULL,
  `pro_Precio` int(11) NOT NULL,
  `pro_RutaImagen` varchar(100) NOT NULL,
  `pro_Categorias` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `idTalla` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`idProducto`, `pro_Nombre`, `pro_Descripcion`, `pro_Detalles`, `pro_Precio`, `pro_RutaImagen`, `pro_Categorias`, `stock`, `idTalla`) VALUES
(4, 'TENIS ULTRABOOST OG editar', 'UNISEX TAMAÑO HOMBR ad', 'Ivp Ultra Boost Og es un nuevo producto para Unisex de adidas. Te invitamos a ver las imágenes para apreciar más detalles desde diferentes ángulos.  eda', 4591, 'assets/img/Adidas/producto-adidas-3.jpg', 'Adidas', 50, NULL),
(5, 'Nike Air Force 1 07', 'Calzado para hombre ', 'El fulgor vive en el Nike Air Force 1 ’07, el modelo original de básquetbol que le da un toque novedoso a las características más recordadas ', 1999, 'assets/img/Nike/producto-nike-2.jpg', 'Nike', 50, NULL),
(6, 'Nike Air Force 1 Experimental', 'Calzado para hombre', 'Experimenta lo extraordinario en el Nike Air Force 1 Experimental, el modelo original del básquetbol que le da un toque fresco a las características más recordadas', 2699, 'assets/img/Nike/producto-nike-2.jpg', 'Nike', 50, NULL),
(7, 'Nike Air Max 90 EOI', 'Calzado para hombre', 'No hay nada tan ligero, tan demostrado y tan cómodo: el Nike Air Max 90 EOI lleva décadas reafirmando su estatus de ícono.', 2599, 'assets/img/Nike/producto-nike-3.jpg', 'Nike', 50, NULL),
(8, 'Nike Air Force 1 \'07 LV8', 'Calzado para hombre', 'El fulgor vive en el Nike Air Force 1 ’07 PRM, el modelo original del básquetbol que le da un toque fresco a las características más recordadas: revestimientos cosidos', 2199, 'assets/img/Nike/producto-nike-4.jpg', 'Nike', 50, NULL),
(9, 'Nike Air Max 90', 'Calzado para hombre', 'Nada más ligero, nada más cómodo, nada más probado: el Nike Air Max 90 se mantiene fiel a sus raíces originales con la icónica suela tipo wafle', 2599, 'assets/img/Nike/producto-nike-5.jpg', 'Nike', 50, NULL),
(10, 'Nike Blazer Mid \'77 Infinite', 'Calzado para hombre', 'El Nike Blazer Mid \'77 Infinite refuerza el ícono de básquetbol de la vieja escuela que se convirtió en el favorito de las calles. Los detalles de goma duraderos en la punta.', 2299, 'assets/img/Nike/producto-nike-7.jpg', 'Nike', 50, NULL),
(11, 'Nike SB Nyjah Free 2', 'Calzado de skateboarding', 'El Nike SB Nyjah Free 2 es una secuela digna de su predecesor. Inspirado en el icónico Nike Air Zoom Spiridon', 1999, 'assets/img/Nike/producto-nike-8.jpg', 'Nike', 50, NULL),
(12, 'Nike Air Zoom-Type', 'Calzado para hombre', 'Celebra la innovación y la herencia deportiva de Nike con el Nike Air Zoom-Type. Te permite llevar a la calle una estética deconstruida y artesanal gracias a las costuras en zigzag y a los colores inspirados en la cultura urbana de Japón. ', 2479, 'assets/img/Nike/producto-nike-9.jpg', 'Nike', 50, NULL),
(13, 'Nike Air Max Excee', 'Calzado para hombre', 'El Nike Air Max Excee, inspirado en el Nike Air Max 90, es una celebración de un clásico bajo una nueva óptica', 1329, 'assets/img/Nike/producto-nike-10.jpg', 'Nike', 50, NULL),
(14, 'TENIS NITE JOGGER', 'UNISEX TAMAÑO HOMBRE', 'Ivp Nitejogger es un nuevo producto para Unisex de adidas. Te invitamos a ver las imágenes para apreciar más detalles desde diferentes ángulos. ', 3599, 'assets/img/Adidas/producto-adidas-2.jpg', 'Adidas', 50, NULL),
(15, 'TENIS NITE JOGGER', 'UNISEX TAMAÑO HOMBRE', 'Ivp Nitejogger es un nuevo producto para Unisex de adidas. Te invitamos a ver las imágenes para apreciar más detalles desde diferentes ángulos.', 3599, 'assets/img/Adidas/producto-adidas-4.jpg', 'Adidas', 50, NULL),
(16, 'TENIS STAN SMITH UNISEX', 'UNISEX TAMAÑO HOMBRE', 'Un diseño atemporal recibe un nuevo look divertido en la colección adidas Originals x Disney, Stan Smith, gracias a la aparición de personajes de los universos de Disney, Pixar, Marvel y Star Wars.\r\n', 1999, 'assets/img/Adidas/producto-adidas-5.jpg', 'Adidas', 50, NULL),
(17, 'TENIS FORUM MID', 'TAMAÑO HOMBRE', 'omemos un momento para rendir homenaje a un ícono. ¿Será la leyenda que desafiaba la gravedad en los años 80? ¿O tal vez los tenis que le daban estatus a los pies de raperos? De hecho, ambos. ', 2099, 'assets/img/Adidas/producto-adidas-6.jpg', 'Adidas', 50, NULL),
(18, 'ZAPATILLAS FORUM 84 HI GIRLS ARE AWESOME', 'UNISEX TAMAÑO HOMBRE', 'Forum 84 Hi Girls Are Awesome es un nuevo producto para Unisex de adidas. Te invitamos a ver las imágenes para apreciar más detalles desde diferentes ángulos.', 4299, 'assets/img/Adidas/producto-adidas-7.jpg', 'Adidas', 50, NULL),
(19, 'TENIS D.O.N. ISSUE #2 MARVEL SPIDEY SENSE', 'UNISEX TAMAÑO HOMBRE', 'La versión número dos de los exclusivos tenis Donovan Mitchell de adidas Basketball combina velocidad, fuerza e instintos sobrehumanos en uno.', 2499, 'assets/img/Adidas/producto-adidas-8.jpg', 'Adidas', 50, NULL),
(20, 'TENIS FORUM LOW', 'TAMAÑO HOMBRE', 'Más que un calzado, es una declaración de estilo. Los adidas Forum llegaron a la escena en el 84 y ganaron seguidores en la cancha y en el mundo de la música. Este par de tenis clásicos trae de vuelta la actitud de los 80', 199, 'assets/img/Adidas/producto-adidas-9.jpg', 'Adidas', 50, NULL),
(21, 'TENIS NMD_R1', 'UNISEX TAMAÑO HOMBRE', 'El pasado inspira el futuro. Estos tenis NMD_R1 combinan lo mejor de las últimas innovaciones tecnológicas de adidas con un look que rinde tributo al pasado.', 2999, 'assets/img/Adidas/producto-adidas-10.jpg', 'Adidas', 50, NULL),
(23, 'Tenis Pacer Future Classic', 'Callzado', 'Estas zapatillas de fuerte inspiración atlética son modernas y unisex. Cuentan con una estructura de TPU llamativa en los dos paneles laterales, que proporciona una sujeción cómoda, pero firme, para el pie. ', 1899, 'assets/img/Puma/producto-puma-3.jpg', 'Puma', 50, NULL),
(24, 'Tenis Electron E PUMA Adulto', 'Callzado', 'HISTORIA DEL PRODUCTO abrir nuevos caminos en el concepto zapatilla de running con nuestra determinación de los zapatos corrientes, equipadas con lo último en tecnología de atletismo incluyendo CMEVA', 1599, 'assets/img/Puma/producto-puma-4.jpg', 'Puma', 50, NULL),
(26, 'Tenis SpeedCat LS', 'Callzado', 'En 1981, PUMA lanzó los SpeedCat OG para llevar el estilo de una pista de la Fórmula 1 a las calles. Este año se estrena el relanzamiento de esta silueta icónica con el SpeedCat LS,', 2099, 'assets/img/Puma/producto-puma-6.jpg', 'Puma', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tallas`
--

CREATE TABLE `tallas` (
  `idTallas` int(11) NOT NULL,
  `ta_talla1` varchar(25) NOT NULL,
  `ta_talla2` varchar(25) NOT NULL,
  `ta_talla3` varchar(25) NOT NULL,
  `ta_talla4` varchar(25) NOT NULL,
  `ta_talla5` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tallas`
--

INSERT INTO `tallas` (`idTallas`, `ta_talla1`, `ta_talla2`, `ta_talla3`, `ta_talla4`, `ta_talla5`) VALUES
(1, '25', '26', '27', '28', '29'),
(2, '25', '26', '27', '28', ''),
(3, '25', '26', '27', '', ''),
(4, '25', '26', '', '', ''),
(5, '25', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tarjeta`
--

CREATE TABLE `tarjeta` (
  `idPago` int(11) NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `ta_Numeros` int(16) NOT NULL,
  `ta_tipoTarjeta` varchar(20) NOT NULL,
  `ta_fecha` varchar(20) NOT NULL,
  `ta_pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tarjeta`
--

INSERT INTO `tarjeta` (`idPago`, `idCuenta`, `ta_Numeros`, `ta_tipoTarjeta`, `ta_fecha`, `ta_pin`) VALUES
(1, 1, 123456781, 'Credito', '25/02/2025', 1234),
(2, 3, 12312312, 'Credito', '25/02/2025', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id_Cuenta`);

--
-- Indexes for table `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`idDomicilio`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indexes for table `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`idTallas`);

--
-- Indexes for table `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`idPago`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id_Cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `idDomicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tallas`
--
ALTER TABLE `tallas`
  MODIFY `idTallas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
