/**
 * Provincias
 *  2013-02-01
 * Font: http://www.ine.es/daco/daco42/codmun/cod_provincia.htm
 */

CREATE TABLE IF NOT EXISTS `provincias` (
  `provincia_id` int(11) NOT NULL,
  `comunidad_id` tinyint(4) default NULL,
  `nom_provincia` varchar(45) default NULL,
  PRIMARY KEY  (`provincia_id`),
  KEY `comunidad_id` (`comunidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `provincias`
--

INSERT INTO `provincias` (`provincia_id`, `comunidad_id`, `nom_provincia`) VALUES
(1, 16, 'Araba/Álava'),
(2, 8, 'Albacete'),
(3, 10, 'Alicante/Alacant'),
(4, 1, 'Almería'),
(5, 7, 'Ávila'),
(6, 11, 'Badajoz'),
(7, 4, 'Balears, Illes'),
(8, 9, 'Barcelona'),
(9, 7, 'Burgos'),
(10, 11, 'Cáceres'),
(11, 1, 'Cádiz'),
(12, 10, 'Castellón/Castelló'),
(13, 8, 'Ciudad Real'),
(14, 1, 'Córdoba'),
(15, 12, 'Coruña, A'),
(16, 1, 'Cuenca'),
(17, 9, 'Girona'),
(18, 1, 'Granada'),
(19, 1, 'Guadalajara'),
(20, 16, 'Gipuzkoa'),
(21, 1, 'Huelva'),
(22, 2, 'Huesca'),
(23, 1, 'Jaén'),
(24, 7, 'León'),
(25, 9, 'Lleida'),
(26, 17, 'Rioja, La'),
(27, 12, 'Lugo'),
(28, 13, 'Madrid'),
(29, 1, 'Málaga'),
(30, 14, 'Murcia'),
(31, 15, 'Navarra'),
(32, 12, 'Ourense'),
(33, 3, 'Asturias'),
(34, 7, 'Palencia'),
(35, 5, 'Palmas, Las'),
(36, 12, 'Pontevedra'),
(37, 7, 'Salamanca'),
(38, 5, 'Santa Cruz de Tenerife'),
(39, 6, 'Cantabria'),
(40, 7, 'Segovia'),
(41, 1, 'Sevilla'),
(42, 7, 'Soria'),
(43, 9, 'Tarragona'),
(44, 2, 'Teruel'),
(45, 8, 'Toledo'),
(46, 10, 'Valencia/València'),
(47, 7, 'Valladolid'),
(48, 16, 'Bizkaia'),
(49, 7, 'Zamora'),
(50, 2, 'Zaragoza'),
(51, 18, 'Ceuta'),
(52, 19, 'Melilla');

--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `provincias_ibfk_1` FOREIGN KEY (`comunidad_id`) REFERENCES `comunidades` (`id_comunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;
