CREATE TABLE `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `categoria` varchar(1) NOT NULL,
  `criacao_datahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizacao_datahora` datetime DEFAULT NULL,
  primary key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1