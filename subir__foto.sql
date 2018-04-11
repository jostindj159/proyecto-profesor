-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla subir_foto.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `area` text,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subir_foto.articulos: ~3 rows (aproximadamente)
DELETE FROM `articulos`;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`id`, `titulo`, `area`, `foto`) VALUES
	(4, 'Texto en Html', '        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus sem quis est ultricies pretium. Nunc ut quam pretium, pretium ipsum ut, venenatis lorem. Etiam justo ipsum, egestas ut dui at, ultrices dignissim ex. Ut malesuada pharetra sagittis. Suspendisse fermentum nibh nisl. Donec ut laoreet tortor. Nulla convallis facilisis aliquam.\r\n\r\nDuis nec vulputate ligula, id consequat nisl. Aliquam convallis neque dapibus, volutpat orci in, ullamcorper turpis. Suspendisse quam eros, consequat vel rutrum ut, ullamcorper id est. Quisque rutrum sapien a est dictum, id bibendum lectus posuere. Nullam pharetra imperdiet viverra. Etiam in consectetur lectus. Mauris dignissim nulla ut nulla tempor malesuada. Morbi luctus at diam eu porta. Vivamus porta at sapien sed blandit. Maecenas et ultricies ex. Aliquam sed malesuada est. Mauris vel malesuada ante, a faucibus leo. Donec in nunc quis orci tempor bibendum sed ac metus.\r\n\r\nNunc ac nunc tempor, placerat neque nec, blandit eros. Etiam tincidunt eros luctus velit mattis convallis. Aliquam erat volutpat. Suspendisse potenti. Nunc metus sapien, elementum ut luctus quis, fringilla eget sapien. Nam at mattis arcu. Phasellus gravida, arcu in vulputate porta, neque urna bibendum orci, in tristique eros justo eget ex. Fusce dapibus turpis luctus lorem accumsan cursus.\r\n\r\nQuisque egestas libero quis dui egestas, quis blandit eros vestibulum. Donec magna neque, scelerisque eu malesuada ut, dictum quis diam. Quisque imperdiet tortor at libero euismod, id auctor sem luctus. Sed eu felis nisl. Sed venenatis turpis vel urna varius, consectetur eleifend ante posuere. Mauris nec maximus est, nec interdum ante. Etiam fringilla urna quis dolor finibus tincidunt. Praesent vel ligula augue. Nam consequat tincidunt purus sed consequat.\r\n\r\nEtiam ac sem sit amet ante egestas posuere et sed lectus. Morbi a scelerisque lorem. Phasellus luctus felis in erat lacinia, non dignissim nisl posuere. Vestibulum in enim lectus. Fusce sed mauris at lacus tempor finibus quis quis libero. Integer egestas mauris eu augue congue, quis commodo justo volutpat. Cras in posuere erat. Nam viverra porta feugiat. In sit amet erat lacinia, hendrerit diam sit amet, rhoncus erat. Donec eleifend venenatis quam at dictum. Nam sit amet sapien eros. Mauris gravida cursus urna, quis placerat eros pulvinar non.', '../img/portfolio/articulos/Penguins.jpg'),
	(5, 'otro articulo', '        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estÃ¡ndar de las industrias desde el aÃ±o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usÃ³ una galerÃ­a de textos y los mezclÃ³ de tal manera que logrÃ³ hacer un libro de textos especimen. No sÃ³lo sobreviviÃ³ 500 aÃ±os, sino que tambien ingresÃ³ como texto de relleno en documentos electrÃ³nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaciÃ³n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y mÃ¡s recientemente con software de autoediciÃ³n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '../img/portfolio/articulos/Desert.jpg'),
	(6, 'NUEVO LEON ENCONTRADO', 'Bienvenidos a un nuevo articulo donde el leon es leon', '../img/portfolio/articulos/lion.jpg');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

-- Volcando estructura para tabla subir_foto.clases
CREATE TABLE IF NOT EXISTS `clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `hora_i` varchar(50) DEFAULT NULL,
  `hora_f` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT '0',
  `paquete` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subir_foto.clases: ~2 rows (aproximadamente)
DELETE FROM `clases`;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
INSERT INTO `clases` (`id`, `nombre`, `dni`, `start`, `hora_i`, `hora_f`, `color`, `paquete`) VALUES
	(14, 'jostin', '74716278', '2018-02-26 00:00:00', '10:50', '', '#FFD700', 'preparacion de examenes internacionales'),
	(15, 'jostin', '46554646', '2018-02-26 00:00:00', '10:00', '12:00', '#FF0000', 'clase de ingles personalizado');
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;

-- Volcando estructura para tabla subir_foto.foto
CREATE TABLE IF NOT EXISTS `foto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subir_foto.foto: ~5 rows (aproximadamente)
DELETE FROM `foto`;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
INSERT INTO `foto` (`codigo`, `foto`) VALUES
	(34, '../img/portfolio/profesores/155787040-474677f7.jpeg'),
	(35, '../img/portfolio/profesores/1.jpg'),
	(42, '../img/portfolio/profesores/Article494.jpg'),
	(44, '../img/portfolio/profesores/8D8.jpg');
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;

-- Volcando estructura para tabla subir_foto.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subir_foto.usuario: ~0 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre_usuario`, `clave`) VALUES
	(1, 'profesor', '123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
