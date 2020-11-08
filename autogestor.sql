-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela autogestor.clientcategories: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `clientcategories` DISABLE KEYS */;
INSERT INTO `clientcategories` (`id`, `category`) VALUES
	(1, 'Basic'),
	(2, 'Silver'),
	(3, 'Gold'),
	(4, 'VIP');
/*!40000 ALTER TABLE `clientcategories` ENABLE KEYS */;

-- Copiando dados para a tabela autogestor.clients: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `name`, `phone`, `id_category`) VALUES
	(1, 'Paulo', '(41)9900-12345', 1),
	(2, 'Ricardo', '(41)9800-00000', 3),
	(3, 'Maria', '(41)9900-00000', 1),
	(4, 'Luis', '(41) 9999-12345', 2),
	(5, 'Ana', '(41) 9999-54321', 4);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
