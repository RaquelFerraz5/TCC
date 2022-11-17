create database bdBenizi;
use bdBenizi;

create table tbCadPaciente(
Codigo int primary key auto_increment,
Nome varchar(30),
Sobrenome varchar(50),
Data_nasc date,
Email varchar(50) unique,
Senha varchar(25),
Sexo varchar(2)
);

create table tbCadMedico(
Codigo int primary key auto_increment,
Nome varchar(30),
Sobrenome varchar(50),
Crm varchar(9) unique,
Data_nasc date,
Email varchar(50) unique,
Senha varchar(25),
Sexo varchar(2)
);

create table tbConsulta(
Codigo int primary key auto_increment,
NomePaciente varchar(30),
NomeMedico varchar(30),
Data_comentario date,
Comentario varchar(600)
);
select*from tbCadPaciente;