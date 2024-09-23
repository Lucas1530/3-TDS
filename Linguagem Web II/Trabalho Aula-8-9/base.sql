CREATE DATABASE IF NOT EXISTS jogos_db;
USE jogos_db;

CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `genero` enum('Ação','Aventura','Estratégia','RPG','Esporte','Simulação') NOT NULL,
  `plataforma` enum('PC','PlayStation','Xbox','Nintendo Switch') NOT NULL,
  `ano_lancamento` year NOT NULL,
  `icone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
