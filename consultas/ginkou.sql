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

create table Finanzas (
    id_finanzas int primary key,
    id_usuario INT,
    iban varbinary(73),  
    Saldo decimal(10,2),
    Prestamos decimal(10,2),
    foreign key (id_usuario) references usuarios(id)
);







select * from usuarios;