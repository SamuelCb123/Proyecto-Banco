DROP DATABASE IF EXISTS ginkou;
CREATE DATABASE ginkou;
use ginkou;

create table usuarios(
id int primary key auto_increment,
nombre varchar(43),
apellidos varchar(55),
DNI char(8),
email varchar( 34),
Pais varchar(34),
fechadenacimiento datetime,
direccion varchar(44),
codigopostal int,
ciudad varchar(44),
provincia varchar(44),
iban int



);

create table Finanzas (
    id_finanzas int primary key,
    id_usuario INT,
    iban varchar(73),  
    Saldo decimal(10,2),
    Prestamos decimal(10,2),
    foreign key (id_usuario) references usuarios(id)
);







select * from usuarios;