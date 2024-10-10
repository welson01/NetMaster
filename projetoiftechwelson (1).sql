-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2024 às 21:36
-- Versão do servidor: 8.0.29
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoiftechwelson`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `Imagem` varchar(100) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Genero` varchar(10) DEFAULT NULL,
  `NomeCompleto` varchar(100) DEFAULT NULL,
  `IdUsuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinos`
--

CREATE TABLE `treinos` (
  `nomeTreino` varchar(50) NOT NULL,
  `descricaoTreino` text NOT NULL,
  `data_inicioTreino` date NOT NULL,
  `data_fimTreino` date NOT NULL,
  `nivelTreino` varchar(100) NOT NULL,
  `duracaoTreino` varchar(100) NOT NULL,
  `objetivosTreino` text NOT NULL,
  `urlTreino` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fotoTreino` varchar(250) DEFAULT NULL,
  `tipoTreino` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `treinos`
--

INSERT INTO `treinos` (`nomeTreino`, `descricaoTreino`, `data_inicioTreino`, `data_fimTreino`, `nivelTreino`, `duracaoTreino`, `objetivosTreino`, `urlTreino`, `fotoTreino`, `tipoTreino`) VALUES
('treino passe', 'fará seus passes começarem a funcionar', '2024-10-15', '2025-01-01', 'Intermediario', '00:59', 'melhorar a base de seus passes', 'https://www.youtube.com/watch?v=paBHsq0lBcM&ab_channel=SIKANABrasil%2FPortugu%C3%AAs', 'img/jogo.png', 'Tecnico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int NOT NULL,
  `nomeUsuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `emailUsuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senhaUsuario` varchar(255) DEFAULT NULL,
  `cidadeUsuario` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `cidadeUsuario`) VALUES
(1, 'WELSON OLIVEIRA', 'sim@gmail.com', '202cb962ac59075b964b07152d234b70', 'tibagi'),
(2, 'WELSON OLIVEIRA', 'sim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'telemaco'),
(3, 'WELSON GONCALVES DOS SANTOS OLIVEIRA', 'welson.oliveira877@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'telemaco');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
