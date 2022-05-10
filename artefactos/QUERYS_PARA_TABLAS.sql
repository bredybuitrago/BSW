use bsw;
-- QUERYS PARA TABLAS
INSERT INTO estado (estado) VALUES 
('Activo'),
('Inactivo');


INSERT INTO perfil (perfil, estado_id) VALUES 
('Usuario',1),
('Aliado',1);

-------
INSERT INTO barrio (barrio) VALUES ('La Guaca');
INSERT INTO barrio (barrio) VALUES ('Bochica');
INSERT INTO barrio (barrio) VALUES ('Carabelas');
INSERT INTO barrio (barrio) VALUES ('Ciudad Montes');
INSERT INTO barrio (barrio) VALUES ('El Sol');
INSERT INTO barrio (barrio) VALUES ('Jazmín');
INSERT INTO barrio (barrio) VALUES ('Jorge Gaitán Cortés');
INSERT INTO barrio (barrio) VALUES ('Villa Inés');
INSERT INTO barrio (barrio) VALUES ('La Asunción');
INSERT INTO barrio (barrio) VALUES ('La Camelia');
INSERT INTO barrio (barrio) VALUES ('Los Comuneros');
INSERT INTO barrio (barrio) VALUES ('Ponderosa');
INSERT INTO barrio (barrio) VALUES ('Primavera');
INSERT INTO barrio (barrio) VALUES ('Remanso');
INSERT INTO barrio (barrio) VALUES ('San Eusebio');
INSERT INTO barrio (barrio) VALUES ('Santa Matilde');
INSERT INTO barrio (barrio) VALUES ('Tibaná');
INSERT INTO barrio (barrio) VALUES ('Torremolinos');
INSERT INTO barrio (barrio) VALUES ('Alcalá');
INSERT INTO barrio (barrio) VALUES ('Alquería');
INSERT INTO barrio (barrio) VALUES ('Autopista Sur');
INSERT INTO barrio (barrio) VALUES ('La Coruña');
INSERT INTO barrio (barrio) VALUES ('Los Sauces');
INSERT INTO barrio (barrio) VALUES ('Muzú');
INSERT INTO barrio (barrio) VALUES ('Ospina Pérez');
INSERT INTO barrio (barrio) VALUES ('Santa Rita');
INSERT INTO barrio (barrio) VALUES ('Tejar');
INSERT INTO barrio (barrio) VALUES ('Villa del Rosario');
INSERT INTO barrio (barrio) VALUES ('Villa Sonia');
INSERT INTO barrio (barrio) VALUES ('Barcelona');
INSERT INTO barrio (barrio) VALUES ('Bisas del Galán');
INSERT INTO barrio (barrio) VALUES ('Camelia Sur');
INSERT INTO barrio (barrio) VALUES ('Colón');
INSERT INTO barrio (barrio) VALUES ('Galán');
INSERT INTO barrio (barrio) VALUES ('La Pradera');
INSERT INTO barrio (barrio) VALUES ('La Trinidad');
INSERT INTO barrio (barrio) VALUES ('El Arpay La Lira');
INSERT INTO barrio (barrio) VALUES ('Milenta');
INSERT INTO barrio (barrio) VALUES ('San Francísco');
INSERT INTO barrio (barrio) VALUES ('San Gabriel');
INSERT INTO barrio (barrio) VALUES ('San Rafael');
INSERT INTO barrio (barrio) VALUES ('San Rafael Industrial');
INSERT INTO barrio (barrio) VALUES ('Salazar Gomez ');
INSERT INTO barrio (barrio) VALUES ('Cundinamarca');
INSERT INTO barrio (barrio) VALUES ('El Ejido');
INSERT INTO barrio (barrio) VALUES ('Gorgonzola');
INSERT INTO barrio (barrio) VALUES ('Industrial Centenario');
INSERT INTO barrio (barrio) VALUES ('La Florida Occidental');
INSERT INTO barrio (barrio) VALUES ('Los Ejidos');
INSERT INTO barrio (barrio) VALUES ('Pensilvania');
INSERT INTO barrio (barrio) VALUES ('Batallón Caldas');
INSERT INTO barrio (barrio) VALUES ('Centro Industrial');
INSERT INTO barrio (barrio) VALUES ('Ortezal');
INSERT INTO barrio (barrio) VALUES ('Puente Aranda');


-----------------------
INSERT INTO `bsw`.`tipo_cancha` (`tipo_cancha`, `estado_id`) VALUES ('Futbol 5', '1');
INSERT INTO `bsw`.`tipo_cancha` (`tipo_cancha`, `estado_id`) VALUES ('Futbol 8', '1');
INSERT INTO `bsw`.`tipo_cancha` (`tipo_cancha`, `estado_id`) VALUES ('Futbol 11', '1');
