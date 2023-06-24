CREATE TABLE IF NOT EXISTS `datos_personales` (
  `id` int NOT NULL,
  `nombres` varchar(50),
  `apellidos` varchar(50),
  `direccion` varchar(50),
  `telefono` varchar(10),
  `email` varchar(70),
  `documento` varchar(70),
  `fecha_nacimiento` varchar(11),
  `curso` varchar(5),
  `horario` varchar(50),
  `Lunes` bit,
  `Martes` bit,
  `Miercoles` bit,
  `Jueves` bit,
  `Viernes` bit,
  `Pago_Contado_Moneda` bit,
  `Pago_Tarjeta` bit,
  `num_contrato` varchar(20),
  `persona_que_atendio` varchar(50),
  `fecha_inscripcion` date
);

ALTER TABLE `datos_personales`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `datos_personales`
MODIFY `id` int NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;

/*show tables;
select * from datos_personales;*/
