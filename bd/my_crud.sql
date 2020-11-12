-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2020 às 03:21
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `etiquetas`
--

CREATE TABLE `etiquetas` (
  `id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `nome_destinatario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etiqueta` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data_consulta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_etiqueta` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `etiquetas`
--

INSERT INTO `etiquetas` (`id`, `pessoa_id`, `nome_destinatario`, `etiqueta`, `data_consulta`, `status_etiqueta`) VALUES
(3, 0, 'Fabio Ribeiro', 'PM299917309BR', '2020-11-12 02:18:19', 'Objeto entregue ao destinatÃ¡rio'),
(4, 0, 'Joao Todesco', 'PQ060671666BR', '2020-11-12 02:18:23', 'Objeto postado'),
(5, 0, 'Bianca Bradesco', 'OL370892271BR', '2020-11-12 02:18:25', 'Objeto em trÃ¢nsito - por favor aguarde'),
(6, 0, 'Luis Pen Drive', 'PQ088213609BR', '2020-11-12 02:18:27', 'Objeto em trÃ¢nsito - por favor aguarde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `contato`, `data_cadastro`) VALUES
(27, 'Fabio Ribeiro', '41-97354774', '2020-11-12 02:13:18'),
(28, 'Joao Todesco', '41-999958585', '2020-11-12 02:13:36'),
(29, 'Bianca Bradesco', '27-9595959595', '2020-11-12 02:13:46'),
(30, 'Luis Pen Drive', '88-8585858585', '2020-11-12 02:13:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
