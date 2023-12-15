DROP DATABASE IF EXISTS ginkou;
CREATE DATABASE ginkou;
use ginkou;

CREATE TABLE administradores (
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(43),
    email VARCHAR(43)
);

CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(43),
    apellidos VARCHAR(55),
    DNI VARCHAR(9),
    email VARCHAR(34),
    Pais VARCHAR(34),
    fechadenacimiento DATETIME,
    direccion VARCHAR(44),
    codigopostal INT,
    ciudad VARCHAR(44),
    provincia VARCHAR(44),
    iban INT,
    foto VARCHAR(122),
    id_admin INT,
    FOREIGN KEY (id_admin) REFERENCES administradores(id_admin)
);

CREATE TABLE ingresos_retiros (
    id_movimiento INT PRIMARY KEY AUTO_INCREMENT,
       cantidad DECIMAL(10, 2),
       saldo_actual DECIMAL(10, 2),
    fecha_movimiento DATETIME,
    tipo_movimiento VARCHAR(255),
    cantidad_retiro DECIMAL(10,2) DEFAULT 0,
    saldo_retiro decimal(10,2) default 0,
      id_usuario INT,
    id_admin INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_admin) REFERENCES administradores(id_admin)
);


CREATE TABLE PRESTAMOS(
     id_prestamo INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    monto_prestamo DECIMAL(10, 2),
    motivo VARCHAR(255),
    estado VARCHAR(20) DEFAULT 'PENDIENTE',
    fecha_solicitud DATETIME,
    fecha_vencimiento DATETIME
    
    );
INSERT INTO administradores (nombre, email) VALUES
('admin1', 'admin@gmail.com');


select * from ingresos_retiros;
select * from usuarios;

select * from administradores;

INSERT INTO administradores (nombre, email) VALUES
('admin1', 'admin@gmail.com');


select * from ingresos_retiros;
select * from usuarios;

select * from administradores;