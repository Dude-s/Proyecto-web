CREATE TABLE IF NOT EXISTS `forms` (
  `id` int NOT NULL,
  `nombre` varchar(50),
  `telefono` varchar(10),
  `email` varchar(70),
  `mensaje` varchar(300)

);

ALTER TABLE `forms`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `forms`
MODIFY `id` int NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;

