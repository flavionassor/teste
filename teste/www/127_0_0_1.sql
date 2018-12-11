DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(222) NOT NULL,
  `senha` varchar(222) NOT NULL,
  `endereco` varchar(222) NOT NULL,
  `telefone` varchar(222) NOT NULL,
  `funcao` int(11) NOT NULL,
  `idcontratado` varchar(222) NOT NULL,
  `especialidade` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
)DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `endereco`, `telefone`, `funcao`, `idcontratado`, `especialidade`) VALUES
(1, '1', '1', '1', '1', 0, '0', '1'),
(2, '2', '2', '2', '2', 0, '0', '2'),
(3, '3', '3', '3', '3', 1, '0', '0'),
(4, '4', '4', '4', '4', 1, '0', '1'),
(5, '5', '5', '5', '5', 0, '0', '5');
COMMIT;
