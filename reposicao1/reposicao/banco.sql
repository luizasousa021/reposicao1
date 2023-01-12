create database reposicao;

use reposicao;
create table cargo(
    idcargo int primary key auto_increment,
    nomecargo varchar(50)
);

insert into cargo values(null,"TI desenvolvedor");
insert into cargo values(null,"Analista");
insert into cargo values(null,"Vendedor");
insert into cargo values(null,"Suporte");
insert into cargo values(null,"Gerente");

select * from cargo;

create table funcionario(

    idfuncionario int primary key auto_increment,
    nome varchar (50),
    email varchar (50)unique,
    admissao date,
    idcargo int,
    foreign key(idcargo)references cargo(idcargo)

);

insert into funcionario values(null,'ana','ana@senac','2023-01-09',1);
select * from funcionario;


create table endereco(
    indereco int primary key auto_increment,
    cidade varchar(50),
    estado char(2),
    idfuncionario int,
    foreign key(idfuncionario) references funcionario(idfuncionario)on delete cascade
);

insert into endereco values(null,'Rio de janeiro','rj',1);

select * from endereco;
select * from funcionario;
select * from cargo;