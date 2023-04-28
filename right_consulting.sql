-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para right_consulting
CREATE DATABASE IF NOT EXISTS `right_consulting` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `right_consulting`;

-- Volcando estructura para tabla right_consulting.colores
CREATE TABLE IF NOT EXISTS `colores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_hexadecimal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla right_consulting.colores: ~50 rows (aproximadamente)
/*!40000 ALTER TABLE `colores` DISABLE KEYS */;
INSERT INTO `colores` (`id`, `nombre`, `codigo_hexadecimal`, `created_at`, `updated_at`) VALUES
	(1, 'Rojo', '#FF0000', NULL, NULL),
	(2, 'Verde', '#008000', NULL, NULL),
	(3, 'Azul', '#0000FF', NULL, NULL),
	(4, 'Amarillo', '#FFFF00', NULL, NULL),
	(5, 'Magenta', '#FF00FF', NULL, NULL),
	(6, 'Cian', '#00FFFF', NULL, NULL),
	(7, 'Blanco', '#FFFFFF', NULL, NULL),
	(8, 'Negro', '#000000', NULL, NULL),
	(9, 'Gris oscuro', '#A9A9A9', NULL, NULL),
	(10, 'Gris claro', '#D3D3D3', NULL, NULL),
	(11, 'Naranja', '#FFA500', NULL, NULL),
	(12, 'Azul marino', '#000080', NULL, NULL),
	(13, 'Verde oscuro', '#006400', NULL, NULL),
	(14, 'Verde claro', '#90EE90', NULL, NULL),
	(15, 'Violeta', '#EE82EE', NULL, NULL),
	(16, 'Rosa', '#FFC0CB', NULL, NULL),
	(17, 'Beige', '#F5F5DC', NULL, NULL),
	(18, 'Marrón', '#A52A2A', NULL, NULL),
	(19, 'Gris pardo', '#808000', NULL, NULL),
	(20, 'Turquesa', '#40E0D0', NULL, NULL),
	(21, 'Lavanda', '#E6E6FA', NULL, NULL),
	(22, 'Aguamarina', '#7FFFD4', NULL, NULL),
	(23, 'Caqui', '#F0E68C', NULL, NULL),
	(24, 'Dorado', '#FFD700', NULL, NULL),
	(25, 'Plata', '#C0C0C0', NULL, NULL),
	(26, 'Salmón', '#FA8072', NULL, NULL),
	(27, 'Coral', '#FF7F50', NULL, NULL),
	(28, 'Oliva', '#808000', NULL, NULL),
	(29, 'Índigo', '#4B0082', NULL, NULL),
	(30, 'Burdeos', '#800000', NULL, NULL),
	(31, 'Verde oliva', '#556B2F', NULL, NULL),
	(32, 'Azul cielo', '#87CEEB', NULL, NULL),
	(33, 'Melocotón', '#FFE5B4', NULL, NULL),
	(34, 'Aguacate', '#568203', NULL, NULL),
	(35, 'Lavanda gris', '#708090', NULL, NULL),
	(36, 'Menta', '#98FB98', NULL, NULL),
	(37, 'Azul turquesa', '#00CED1', NULL, NULL),
	(38, 'Bronce', '#CD7F32', NULL, NULL),
	(39, 'Mostaza', '#FFDB58', NULL, NULL),
	(40, 'Tostado', '#D2B48C', NULL, NULL),
	(41, 'Gris azulado', '#6699CC', NULL, NULL),
	(42, 'Azul verdoso', '#5F9EA0', NULL, NULL),
	(43, 'Gris verdoso', '#556B2F', NULL, NULL),
	(44, 'Rosa oscuro', '#FF1493', NULL, NULL),
	(45, 'Rojo anaranjado', '#FF4500', NULL, NULL),
	(46, 'Plata oscuro', '#A9A9A9', NULL, NULL),
	(47, 'Gris claro rosado', '#C0C0C0', NULL, NULL),
	(48, 'Azul petróleo', '#008080', NULL, NULL),
	(49, 'Rosado oscuro', '#C71585', NULL, NULL),
	(50, 'Oliva oscuro', '#556B2F', NULL, NULL);
/*!40000 ALTER TABLE `colores` ENABLE KEYS */;

-- Volcando estructura para tabla right_consulting.cuestionarios
CREATE TABLE IF NOT EXISTS `cuestionarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `id_color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla right_consulting.cuestionarios: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cuestionarios` DISABLE KEYS */;
INSERT INTO `cuestionarios` (`id`, `id_user`, `edad`, `id_color`, `created_at`, `updated_at`) VALUES
	(1, 1, 97, '#A9A9A9', '2023-04-26 08:40:36', '2023-04-26 08:50:13'),
	(2, 2, 1, '#A9A9A9', '2023-04-27 08:40:36', '2023-04-27 08:40:36'),
	(3, 3, 55, '#A9A9A9', '2023-04-27 08:40:36', '2023-04-27 08:40:36'),
	(4, 4, 1, '#A9A9A9', '2023-04-27 08:40:36', '2023-04-27 08:40:36');
/*!40000 ALTER TABLE `cuestionarios` ENABLE KEYS */;

-- Volcando estructura para tabla right_consulting.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla right_consulting.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla right_consulting.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla right_consulting.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2023_04_26_080346_create_respuestas_table', 2),
	(5, '2023_04_26_081217_create_colores_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla right_consulting.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla right_consulting.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla right_consulting.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla right_consulting.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Cristian Vidal Sanhueza', 'crvidals@gmail.com', NULL, '$2y$10$yvYdaIRXvM6H7m8eDcjZ/ueqK4CsnX16H9ZJPLLAbYk3BzWIJYa22', NULL, '2023-04-26 07:37:02', '2023-04-26 07:37:02'),
	(2, 'Rodrigo Sanhueza', 'crvidals@hotmail.com', NULL, '$2y$10$x4k7UuQvCLLndqoxISojgem74p81ddnddbjpa3TrStrdMGJIWA2Mi', NULL, '2023-04-26 08:51:46', '2023-04-26 08:51:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
