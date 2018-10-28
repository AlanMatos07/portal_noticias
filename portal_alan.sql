-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2018 às 04:40
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_alan`
--
CREATE DATABASE IF NOT EXISTS `portal_alan` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portal_alan`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `cod_not` int(11) NOT NULL,
  `manchete_not` varchar(45) NOT NULL,
  `resumo_not` varchar(45) NOT NULL,
  `texto_not` longtext NOT NULL,
  `categoria_not` varchar(45) NOT NULL,
  `imagem_not` varchar(45) NOT NULL,
  `usuarios_cod_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`cod_not`, `manchete_not`, `resumo_not`, `texto_not`, `categoria_not`, `imagem_not`, `usuarios_cod_user`) VALUES
(11, 'Visual Studio Code', 'O Visual Studio Code Ã© um editor de cÃ³digo-', 'O Visual Studio Code Ã© um editor de cÃ³digo-fonte desenvolvido pela Microsoft para Windows, Linux e macOS. Ele inclui suporte para depuraÃ§Ã£o, controle Git incorporado, realce de sintaxe, complementaÃ§Ã£o inteligente de cÃ³digo, snippets e refatoraÃ§Ã£o de cÃ³digo. Ele tambÃ©m Ã© customizÃ¡vel, fazendo com que os usuÃ¡rios possam mudar o tema do editor, teclas de atalho e preferÃªncias. Ele Ã© um software livre e de cÃ³digo aberto,[7][8] apesar do download oficial estar sob uma licenÃ§a proprietÃ¡ria.[6]\r\n\r\nO Visual Studio Code Ã© baseado no Electron, uma framework que Ã© usada para desenvolver aplicativos Node.js para o desktop rodando no motor de layout Blink. Apesar de usar o Electron como framework,[9] o software nÃ£o usa o Atom e em seu lugar emprega o mesmo componente editor (codenomeado \"Monaco\") usado no Visual Studio Team Services (anteriormente chamado de Visual Studio Online).[10]', 'software', 'imagens/not_vs_code.jpg', 1),
(12, 'SSD externo Fledging Shell promete ser o mais', 'Novo SSD Ã© quase duas vezes mais rÃ¡pido do ', 'O Fledging Shell Ã© um SSD externo que promete ser o mais rÃ¡pido do mundo. Com taxas de transferÃªncia de 900 MB/s na leitura e escrita, a unidade de estado sÃ³lido Ã© duas vezes mais veloz que o T5, avanÃ§ado SSD portÃ¡til da Samsung, e atÃ© 10 vezes mais rÃ¡pido que um HD externo comum, de acordo com a fabricante. O produto estÃ¡ em financiamento no Kickstarter e jÃ¡ atingiu a meta de arrecadaÃ§Ã£o.\r\n\r\nLEIA: Fim do HD? SSD mais rÃ¡pido chega ao Brasil; veja preÃ§o\r\n\r\nA unidade mais barata do Fledging Shell tem capacidade de 256 GB e custa US$ 120 (cerca de R$ 445 em conversÃ£o direta, sem impostos de importaÃ§Ã£o). O SSD tambÃ©m estÃ¡ disponÃ­vel em versÃµes com 512 GB, 1 TB e 2 TB, com preÃ§o mÃ¡ximo de US$ 550 (aproximadamente R$ 2.035). Todas as variantes comeÃ§arÃ£o a ser entregues em dezembro, sem taxa de envio para o Brasil.\r\n\r\nEmbora as capacidades descritas acima sejam as indicadas no Kickstarter, os valores reais de armazenamento do SSD sÃ£o ligeiramente inferiores. A variante de 256 GB tem, na verdade, 240 GB de memÃ³ria, enquanto as outras trazem 480 GB, 960 GB e 1,92 TB.\r\n\r\nTodos os modelos tÃªm 10,2 cm de comprimento, 5,6 cm de largura e 0,9 cm de espessura e acompanham dois cabos: um USB-C para USB-C e outro USB-C para USB 3.1. Essa Ã© uma adiÃ§Ã£o essencial do componente, uma vez que ele sÃ³ atinge velocidade de quase 1 Gb/s se estiver conectado a uma porta USB 3.1 ou Thunderbolt 3.\r\n\r\nA comparaÃ§Ã£o com o Samsung T5 e com o HD externo de 2,5 polegadas da Western Digital foi feita em um MacBook Pro de 13 polegadas (modelo de 2017). Nos testes, o Shell superou seu prÃ³prio limite da ficha tÃ©cnica, chegando a 950 MB/s, enquanto os concorrentes atingiram velocidades de 500 Mb/s e 100 Mb/s, respectivamente.\r\n\r\nO SSD tambÃ©m conta com sistema de resfriamento prÃ³prio, prometendo maior vida Ãºtil ao dispositivo, que tem trÃªs anos de garantia. O aparelho pode ser usado com em PC e notebook com Windows ou Mac, smartTVs, consoles de vÃ­deo game, celulares Android e qualquer dispositivo com entrada compatÃ­vel.', 'hardware', 'imagens/not_fledging_shell.png', 1),
(13, 'Samsung Galaxy Book 2 traz processador Snapdr', 'Modelo traz processador Snapdragon 850 e desi', 'O Samsung Galaxy Book 2 Ã© o novo notebook 2 em 1 da fabricante sul-coreana com processador Snapdragon 850 e bateria de longa duraÃ§Ã£o. Anunciado na Ãºltima quinta-feira (18), o modelo Ã© feito para ficar sempre conectado via rede 4G, assim como um celular, desde que o usuÃ¡rio contrate um pacote de dados junto Ã  operadora. O design Ã© inspirado em produtos hÃ­bridos rivais, como o Microsoft Surface Pro 6, Surface Pro 5 e o Surface Go.\r\n\r\nO computador traz Windows 10 com o Modo S ativado, impedindo a instalaÃ§Ã£o de programas como o Photoshop. Por isso, o laptop Ã© voltado para profissionais e estudantes que usam principalmente navegaÃ§Ã£o na web e ferramentas de texto, planilhas e apresentaÃ§Ãµes. O produto estarÃ¡ disponÃ­vel para comprar nos Estados Unidos a partir de 2 de novembro pelo preÃ§o de US$ 999 (aproximadamente R$ 3.700, sem impostos), com teclado e caneta S Pen inclusos.', 'hardware', 'imagens/not_galaxy_book2.jpeg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_user` int(11) NOT NULL,
  `nome_user` varchar(45) NOT NULL,
  `perfil_user` varchar(45) NOT NULL,
  `login_user` varchar(45) NOT NULL,
  `senha_user` varchar(45) NOT NULL,
  `status_user` char(1) NOT NULL DEFAULT 'A',
  `imagem_user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_user`, `nome_user`, `perfil_user`, `login_user`, `senha_user`, `status_user`, `imagem_user`) VALUES
(1, 'Alan Matos', 'journalist', 'admin', '1', 'A', 'imagens/user_admin.jpg'),
(5, 'Marcos Henrique', 'journalist', 'Marcao', '1', 'A', 'imagens/user_marcao.jpg'),
(6, 'Aparecida Silva', 'journalist', 'Cida', '1', 'A', 'imagens/user_cida.jpg'),
(7, 'Wilson de Macedo', 'journalist', 'Wil', '1', 'A', 'imagens/user_wil.jpg'),
(8, 'Augusto Souza', 'technician', 'Guto', '1', 'A', 'imagens/user_guto.jpg'),
(9, 'Ana Bastos', 'technician', 'ana_b', '1', 'A', 'imagens/user_ana_b.jpg'),
(10, 'Solange Pacheco', 'technician', 'Sol', '1', 'A', 'imagens/user_sol.jpg'),
(11, 'Luis Fernando', 'journalist', 'Nandin', '1', 'A', 'imagens/user_alt.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`cod_not`),
  ADD KEY `usuarios_cod_user_idx` (`usuarios_cod_user`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `cod_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `usuarios_cod_user` FOREIGN KEY (`usuarios_cod_user`) REFERENCES `usuarios` (`cod_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
