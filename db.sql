drop database if exists proyecto_final_web1;
create database if not exists proyecto_final_web1;
use proyecto_final_web1;
create table usuarios(id int not null auto_increment primary key,
						nombre varchar(50) not null,
                        usuario varchar(50) not null,
                        pass varchar(20) not null, 
                        cellnum varchar(12), 
                        email varchar(50), 
                        fecha_registro datetime not null default current_timestamp, 
                        permisos int(11) not null default '1');
                        
insert into usuarios (nombre, usuario,pass, cellnum, email, permisos) values('Admin', 'Admin', 'admin123', '1111111111', 'admin','2');
insert into usuarios (nombre, usuario,pass, cellnum, email, permisos) values('Ricardo Madrigal', 'Madris', '123456',  '5515856833', 'ricmad142@gmail.com','1');

select * from usuarios;