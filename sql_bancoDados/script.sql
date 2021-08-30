SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

create database if not exists CarteiraVac;
use CarteiraVac;

create table usuarios(

CPF_usuario varchar(11) not null primary key,

nome_completo varchar(128) not null,

cod_SUS varchar(15) not null,

email varchar(40) not null,

senha varchar(80) not null,

permissao int default 2);
--1 adm, 2 user


create table vacinas(

ID_vacina int not null primary key auto_increment,

nome_vacina varchar(64) not null,

fabricante varchar(128) null,

vacinador varchar(128) null,

regProfVacinador varchar(10) null,

dose varchar(15) not null,

data_vac date not null);


alter table vacinas add column CPF_usuario varchar(11);

alter table vacinas add foreign key (CPF_usuario)

references usuarios(CPF_usuario);


insert into usuarios (CPF_usuario,nome_completo,cod_SUS,email,senha) values
('25510123824', 'Celia Silvério', '321654987789456','celiapetelin@gmail.com',md5('jujubabananada'));

select * from usuarios;

insert into vacinas (nome_vacina, fabricante,vacinador,regProfVacinador,dose,data_vac, CPF_usuario) values
('Coronavac', 'Butantan', 'Maria Claudia', '123456', 'primeira', ('2021-08-17'),'25510494824'),
('Pfaizer', 'Pfaizer', 'beatriz', '123489', 'primeira', ('2021-08-19'),'25510494824');

select vacinas.nome_vacina, usuarios.nome_completo 
from vacinas join usuarios
on usuarios.CPF_usuario = vacinas.CPF_usuario;

SELECT * from vacinas where CPF_usuario = '25510494824' order by data_vac asc;