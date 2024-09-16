-- Criação da base de dados
CREATE DATABASE IF NOT EXISTS jogos_db;

-- Seleção da base de dados
USE jogos_db;

-- Criação da tabela 'jogos'
CREATE TABLE IF NOT EXISTS jogos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    genero ENUM('Ação', 'Aventura', 'Estratégia', 'RPG', 'Esporte', 'Simulação') NOT NULL,
    plataforma ENUM('PC', 'PlayStation', 'Xbox', 'Nintendo Switch') NOT NULL,
    ano_lancamento YEAR NOT NULL
);
