CREATE TABLE `idoso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nome_contato` varchar(50) NOT NULL,
  `grau_parentesco` varchar(50) NOT NULL,
  `telefone_contato` varchar(10) DEFAULT NULL,
  `celular_contato` varchar(11) NOT NULL,
  `possui_necessidades_especiais` varchar(1) NOT NULL,
  `necessidades_especiais` varchar(50) DEFAULT NULL,
  primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1