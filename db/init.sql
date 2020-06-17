 
CREATE DATABASE IF NOT EXISTS univille;

USE univille;


CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
);

GRANT ALL PRIVILEGES ON univille.* TO 'root'@'%' WITH GRANT OPTION; 
FLUSH PRIVILEGES;

GRANT ALL PRIVILEGES ON univille.* TO 'bob'@'%' WITH GRANT OPTION; 
FLUSH PRIVILEGES;