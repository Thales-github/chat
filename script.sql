create database chat;
use chat;

create table MENSAGENS(
	MEN_CODIGO int not null primary key auto_increment,
    MEN_USUARIO varchar(30) not null,
    MEN_CONTEUDO varchar(500) not null,
    MEN_DATA datetime default current_timestamp
);

select * from MENSAGENS;