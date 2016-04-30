CREATE TABLE `form_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `form_id` (`form_id`),
  CONSTRAINT `form_content_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `form` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1