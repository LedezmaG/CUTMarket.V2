-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.3.9-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para cutmarket
CREATE DATABASE IF NOT EXISTS `cutmarket` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `cutmarket`;

-- Volcando estructura para tabla cutmarket.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(9) NOT NULL AUTO_INCREMENT,
  `id_tienda` int(9) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `FK_id_tienda` (`id_tienda`),
  CONSTRAINT `FK_id_tienda` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla cutmarket.producto: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`id_producto`, `id_tienda`, `nombre`, `descripcion`, `precio`) VALUES
	(1, 1, 'Pan', 'Pan', 6),
	(2, 1, 'Coca', 'Coca', 12),
	(3, 1, 'Paste', 'Paste', 18),
	(4, 1, 'Papas', 'Papas', 15),
	(5, 2, 'Yogurt', 'Yogurt', 9),
	(6, 2, 'Galletas', 'Galletas', 13),
	(7, 2, 'Gelatina', 'Gelatina', 15);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla cutmarket.tienda
CREATE TABLE IF NOT EXISTS `tienda` (
  `id_tienda` int(9) NOT NULL AUTO_INCREMENT,
  `codigo_udg` int(9) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `foto` blob NOT NULL,
  PRIMARY KEY (`id_tienda`),
  KEY `FK_tienda_usuario` (`codigo_udg`),
  KEY `FK_tienda_tipo_estado` (`estado`),
  CONSTRAINT `FK_tienda_tipo_estado` FOREIGN KEY (`estado`) REFERENCES `tipo_estado` (`id_estado`),
  CONSTRAINT `FK_tienda_usuario` FOREIGN KEY (`codigo_udg`) REFERENCES `usuario` (`codigo_udg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla cutmarket.tienda: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tienda` DISABLE KEYS */;
INSERT INTO `tienda` (`id_tienda`, `codigo_udg`, `nombre`, `ubicacion`, `descripcion`, `estado`, `foto`) VALUES
	(1, 211412157, 'Latienda', 'Edificio C', 'Sevende de todo', 1, _binary ''),
	(2, 211412158, 'Tiendita', 'Edificio D', 'Fruta y verdura', 1, _binary '');
/*!40000 ALTER TABLE `tienda` ENABLE KEYS */;

-- Volcando estructura para tabla cutmarket.tiendaxproducto
CREATE TABLE IF NOT EXISTS `tiendaxproducto` (
  `id_producto` int(9) NOT NULL,
  `id_tienda` int(9) NOT NULL,
  KEY `FK_tiendaxproducto_producto` (`id_producto`),
  KEY `FK_tiendaxproducto_tienda` (`id_tienda`),
  CONSTRAINT `FK_tiendaxproducto_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  CONSTRAINT `FK_tiendaxproducto_tienda` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla cutmarket.tiendaxproducto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tiendaxproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiendaxproducto` ENABLE KEYS */;

-- Volcando estructura para tabla cutmarket.tipo_estado
CREATE TABLE IF NOT EXISTS `tipo_estado` (
  `id_estado` int(1) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla cutmarket.tipo_estado: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_estado` DISABLE KEYS */;
INSERT INTO `tipo_estado` (`id_estado`, `estado`) VALUES
	(0, 'on'),
	(1, 'off');
/*!40000 ALTER TABLE `tipo_estado` ENABLE KEYS */;

-- Volcando estructura para tabla cutmarket.tipo_usuario
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo` int(1) NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla cutmarket.tipo_usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` (`id_tipo`, `tipo`) VALUES
	(1, 'Cliente'),
	(2, 'Vendedor'),
	(3, 'Admin');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla cutmarket.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo_udg` int(9) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_usuario` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`codigo_udg`),
  KEY `FK_usuario_tipo_usuario` (`tipo_usuario`),
  KEY `FK_status_vendedor` (`status`),
  CONSTRAINT `FK_status_vendedor` FOREIGN KEY (`status`) REFERENCES `tipo_estado` (`id_estado`),
  CONSTRAINT `FK_usuario_tipo_usuario` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla cutmarket.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`codigo_udg`, `nombre`, `telefono`, `correo`, `user`, `password`, `fecha_nacimiento`, `tipo_usuario`, `status`) VALUES
	(211412157, 'Israel', '3334424120', 'israel@gmail.com', 'Ledezma', '123', '2018-11-26', 2, 1),
	(211412158, 'David', '3334424122', 'David@gmail.com', 'Gurr', '123', '2018-11-26', 2, 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
