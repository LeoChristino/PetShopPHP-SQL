create database bdPets CHARACTER SET utf8 COLLATE utf8_general_ci;
use bdPets;
create table tbAnimal(
    codAnimal int not null auto_increment,
    nome varchar(100) not null,
    especie varchar(50) not null,
    sexo char(1) default "F" check(sexo in('F','M')),
    raca varchar(100) not null,
    cor varchar(25) not null,
    nascimento date,
    primary key(codAnimal))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;