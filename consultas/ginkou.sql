DROP DATABASE IF EXISTS ginkou;
CREATE DATABASE ginkou;
use ginkou;

create table usuarios(
id_usuario int primary key auto_increment,
nombre varchar(43),
apellidos varchar(55),
DNI VARCHAR(9) ,
email varchar( 34),
Pais varchar(34),
fechadenacimiento datetime,
direccion varchar(44),
codigopostal int,
ciudad varchar(44),
provincia varchar(44),
iban int,
foto varchar(122)


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