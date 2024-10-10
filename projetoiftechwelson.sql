-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2024 às 22:34
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
('Treino de Ataque', 'treino de ataque.', '2024-10-10', '2024-12-10', 'Avancado', '01:00', 'Melhorar o ataque para que tenha uma maior efetividade em jogos.', 'https://www.youtube.com/embed/bAoFSE3L9as?si=brCcTvcaGcAGnKjH', 'img/ataque.jpg', 'Tecnico'),
('Treino de Passe', 'Treino de passe.', '2024-10-10', '2024-10-10', 'Basico', '01:00', 'Foco em  melhorar seu passe para  ter uma base de jogo.', 'https://www.youtube.com/embed/paBHsq0lBcM?si=30VTOKCMozAzhk4n', 'img/passevolei.png', 'Tecnico'),
('Treino de saques avançados', 'Treino de saque viagem.', '2024-10-10', '2024-10-11', 'Avancado', '01:00', 'melhorar seu saque, um dos principais fundamentos.', 'https://www.youtube.com/embed/ljqmhNAZ2xc?si=B9MIdVB1UMgmAnBm', 'img/saque.jpg', 'Tecnico');

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
