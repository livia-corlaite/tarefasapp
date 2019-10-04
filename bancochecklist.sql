create database if not exists Checklist;
use checklist;

create table if not exists Checklist

(
  Codigo integer not null auto_increment,
  Descricao varchar(400),
  Prazo date,
  concluida char(1),
  primary key (Codigo)
);

 create user 'Checklist'@'localhost' identified by 'senha123';
 
 grant all privileges on Checklist.* TO 'Checklist'@'localhost';
 
drop user 'Checklist'@'localhost';

select * from Checklist;

alter table Checklist add concluida CHAR(1);