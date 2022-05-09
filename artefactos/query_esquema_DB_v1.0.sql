use BSW;

CREATE TABLE estado (
    estado_id INT NOT NULL AUTO_INCREMENT,
    estado VARCHAR(30) NOT NULL,
    PRIMARY KEY (estado_id)
);

CREATE TABLE perfil (
    perfil_id INT NOT NULL AUTO_INCREMENT,
    perfil VARCHAR(30) NOT NULL,
    estado_id INT NOT NULL,
    PRIMARY KEY (perfil_id),
    FOREIGN KEY (estado_id)
        REFERENCES estado (estado_id)
);

CREATE TABLE horario (
    horario_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dias VARCHAR(50) NOT NULL,
    hora_inicio VARCHAR(10),
    hora_fin VARCHAR(10)
);

-- tipo_cancha
CREATE TABLE tipo_cancha (
    tipo_cancha_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tipo_cancha VARCHAR(250) NOT NULL,
    estado_id INT NOT NULL,
    FOREIGN KEY (estado_id) REFERENCES estado (estado_id)
);

-- EMPRESA
CREATE TABLE empresa (
    empresa_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_empresa VARCHAR(150) NOT NULL,
    nit VARCHAR(50),
    correo_empresa VARCHAR(150),
    contacto_empresa VARCHAR(150),
    nombre_representante VARCHAR(150),
    contacto_representante VARCHAR(150)   
);

-- BARRIO
CREATE TABLE barrio (
    barrio_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    barrio VARCHAR(250) NOT NULL
);

-- LOCAL
CREATE TABLE local (
    local_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT NOT NULL,
	horario_id INT NOT NULL,
	nombre_local VARCHAR(150) NOT NULL,
    barrio_id INT NOT NULL,
    numero_canchas INT,
    contacto  VARCHAR(150),
    correo VARCHAR(150),
    administrador VARCHAR(150),
    direccion VARCHAR(150),
    estado_id INT NOT NULL,
    FOREIGN KEY (empresa_id) REFERENCES empresa (empresa_id),
	FOREIGN KEY (horario_id) REFERENCES horario (horario_id),
    FOREIGN KEY (estado_id) REFERENCES estado (estado_id),
    FOREIGN KEY (barrio_id) REFERENCES barrio (barrio_id)
);

ALTER TABLE `bsw`.`local` 
ADD COLUMN `cordenadas_lat` VARCHAR(45) NULL DEFAULT NULL AFTER `estado_id`,
ADD COLUMN `cordenadas_lon` VARCHAR(45) NULL DEFAULT NULL AFTER `cordenadas_lat`;



-- CANCHA
CREATE TABLE cancha
(
	cancha_id INT NOT null auto_increment PRIMARY KEY, 
    tipo_cancha_id INT not null,
    local_id INT,
    tarifa_por_hora decimal(15,2),
    estado_id INT NOT NULL,
    identificacion VARCHAR(100) NULL,
    observacion VARCHAR(255) NULL,
    FOREIGN KEY (estado_id) REFERENCES estado (estado_id),
	FOREIGN KEY (tipo_cancha_id) REFERENCES tipo_cancha (tipo_cancha_id),
    FOREIGN KEY (local_id) REFERENCES local (local_id)
);


-- FOTOS_CANCHA
CREATE TABLE fotos_cancha (
    fotos_cancha_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cancha_id INT NOT NULL,
    ruta VARCHAR(250),
    estado_id INT NOT NULL,
    FOREIGN KEY (estado_id) REFERENCES estado (estado_id), 
    FOREIGN KEY (cancha_id) REFERENCES cancha (cancha_id)
);

-- MENU
CREATE TABLE menu (
    menu_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    menu VARCHAR(250),
    icono VARCHAR(250)
);

-- PERMISOS_PERFIL
CREATE TABLE permisos_perfil (
    permisos_perfil_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    menu_id INT NOT NULL,
    perfil_id INT NOT NULL,
    estado_id INT NOT NULL,
    FOREIGN KEY (menu_id) REFERENCES menu (menu_id),
	FOREIGN KEY (perfil_id) REFERENCES perfil (perfil_id),
    FOREIGN KEY (estado_id) REFERENCES estado (estado_id)
);

-- USUARIO
CREATE TABLE usuario (
    usuario_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    perfil_id INT NOT NULL,
    identificacion VARCHAR(250) NOT NULL,
    usuario VARCHAR(250) NOT NULL,
    nombre VARCHAR(250) NOT NULL,
    correo VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL,
    estado_id INT NOT NULL,    
    empresa_id INT NOT NULL,
    FOREIGN KEY (perfil_id) REFERENCES perfil (perfil_id),
    FOREIGN KEY (estado_id) REFERENCES estado (estado_id),
    FOREIGN KEY (empresa_id) REFERENCES empresa (empresa_id)
);

-- MENBRESIA
 CREATE TABLE membresia (
    membresia_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    cancelada INT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuario (usuario_id)
);

-- RESERVA
 CREATE TABLE reserva (
    reserva_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cancha_id INT NOT NULL,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    hora_inicio varchar(10) NOT NULL,
    hora_fin varchar(10) NOT NULL,
    cantidad_horas INT NOT NULL,
    FOREIGN KEY (cancha_id) REFERENCES cancha (cancha_id),
    FOREIGN KEY (usuario_id) REFERENCES usuario (usuario_id)
);




