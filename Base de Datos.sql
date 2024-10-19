create database CRM_1;
use CRM_1;

create table Usuarios(
idusuario int primary key auto_increment,
email varchar(50),
contraseña varchar(200),
nombre varchar(50),
apellido varchar(50)
);

create table Direccion(
idDireccion int primary key,
calle varchar(50),
CP varchar(50),
NumExterior varchar(50)
);

create table Cliente(
idCliente int primary key,
empresa varchar(50),
CdMatriz varchar(50),
presupuesto decimal(10,2),
estatus varchar(50),
fkidDireccion int,
foreign key (fkidDireccion) references Direccion(idDireccion)
);

create table Especiales(
idEspecial int primary key,
TipoEspecial varchar(50),
cantidad int,
FechaInicio date,
FechaLimite date
);

create table DetOrdenes(
idDetOrden int primary key,
cantidad int,
FechaInicio date,
FechaLimite date,
estatus varchar(50)
);

create table Ordenes(
idOrden int primary key,
fkidDetOrdenes int,
FechaInicio date,
FechaFinal date,
fkidCliente int,
fkidEspecial int,
foreign key (fkidDetOrdenes) references DetOrdenes(idDetOrden),
foreign key (fkidCliente) references Cliente(idCliente),
foreign key (fkidEspecial) references Especiales(idEspecial)
);

insert into Direccion values ('1','Portal Del Sol','27442','3314');
insert into Cliente values ('1','Chevrolet','Detroit',10000,'Activo','1');

delimiter $$
create procedure  sp_cambiarestado(in estado varchar(50),in id int)
begin 
update Cliente set estatus =estado where idCliente=id;
end
$$

delimiter $$
create procedure  sp_cambiarestadoOrden(in estado varchar(50),in id int)
begin 
update DetOrdenes set estatus =estado where idDetOrdenid;
end
$$
select * from Cliente

delimiter $$
call sp_cambiarestado('Inactivo','1');
$$