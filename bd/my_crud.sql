-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2020 às 08:02
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
  `nome_destinatario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etiqueta` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data_consulta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_etiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `etiquetas`
--

INSERT INTO `etiquetas` (`id`, `nome_destinatario`, `etiqueta`, `data_consulta`, `status_etiqueta`) VALUES
(1, 'fabio ribeiro', '0256545112@@@@', '2020-11-11 02:49:19', 66),
(2, 'tete da silva', '0215412531', '2020-11-11 02:59:02', 0),
(5, 'fabio do testeee', '081232154sad', '2020-11-11 03:05:07', 0),
(7, 'ASASDA', 'ASDASDASD12312', '2020-11-11 05:39:34', 121),
(8, 'fafaf', 'afaf1231', '2020-11-11 05:39:48', 0),
(9, 'teste do', '154152321a@', '2020-11-11 06:09:08', 532),
(10, 'etiqueta_teste', '1231@@#@', '2020-11-11 06:13:36', 13);

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
(1, 'fabio', '1212312312', '2020-11-11 02:00:08'),
(2, 'fabio2111', '419797979797', '2020-11-11 02:02:48'),
(3, 'teste5', '12123123', '2020-11-11 02:09:04'),
(4, 'teste', '13123123', '2020-11-11 02:13:19'),
(7, 'adada', 'asdaasda', '2020-11-11 02:34:24'),
(8, 'fabio222', '24414141', '2020-11-11 02:38:25'),
(9, 'fabio55', '44141', '2020-11-11 02:40:38'),
(12, 'fabiop teste', '4158458748', '2020-11-11 02:59:13'),
(13, 'fabiooo', '2121212121', '2020-11-11 02:59:32'),
(14, 'fabio', '1313131', '2020-11-11 03:04:39'),
(16, 'rogerio', '4199797979797', '2020-11-11 05:34:20'),
(17, 'rodrigo', '13131313', '2020-11-11 05:35:23'),
(18, 'zaza', '41-44848484', '2020-11-11 05:36:07'),
(19, 'zazaxxxxxxaxa', '414141411', '2020-11-11 05:38:23');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
