create database if not exists Checklist;
use checklist;

create table if not exists pronto

(
  Codigo integer not null auto_increment,
  Descricao varchar(400),
  Prazo date,
  primary key (Codigo)
);

 create user 'Checklist'@'localhost' identified by 'senha123';
 
 grant all privileges on Checklist.* TO 'Checklist'@'localhost';
 
