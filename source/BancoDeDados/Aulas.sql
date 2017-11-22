/*
create database cadastro;
use cadastro;
*/
/*
create table pessoas(
	nome varchar(30),
    idade tinyint,
    sexo char(1),
    peso float,
    altura float,
    nacionalidade varchar(20)
);
*/
/*
describe pessoas;
*/
/* Apagando o BD */ 
/*drop database cadastro;*/

/*
create database cadastro 
default character set utf8
default collate utf8_general_ci;
*/
/*
use cadastro;
*/
/*
create table pessoas (
	id int not null auto_increment,
	nome varchar(30) not null,
    nascimento date,
    sexo enum('M','F'),
    peso decimal(5,2),
    altura decimal(3,2),
    nacionalidade varchar(20) default 'Brasil',
    primary key(id)
    
)default charset = utf8;
*/
/*
insert into pessoas
(nome, nascimento, sexo, peso, altura)
values
('Maaria','1953-04-07','F','60.8','1.60');
*/
/*
insert into pessoas values
(default,'Louco','1982-05-22','M','63.8','1.76','Japão'),
(default,'Outro','1980-04-16','M','86.6','1.90', default),
(default,'Doidão','1981-11-26','M','96.4','2.03',default);
*/
/*
alter table pessoas
add column profissao varchar(10);
*/
/*
alter table pessoas
drop column profissao;
*/
/*
alter table pessoas
add column profissao varchar(20) not null default '' after nome;
*/
/*
alter table pessoas
add column codigo int first;
*/
/*
alter table pessoasid
drop column prof;
*/
/*
alter table pessoas 
modify column profissao varchar(20) not null default '';
*/
/*
alter table pessoas 
change column profissao prof varchar(20) not null default '';
*/
/*
alter table teste
rename to pessoas;
*/
/*
select * from cursos;
*/
/*
create table if not exists cursos (
	nome varchar(30) not null unique,
    descri text,
    carga int unsigned,
    totaulas int unsigned,
    ano year default '2017'
) default charset = utf8;
*/
/*
alter table cursos
add column idcurso int first;
*/
/*
alter table cursos
add primary key(idcurso);
*/
/*
alter table cursos
modify column idcurso int auto_increment;
*/
/*
drop table teste;
*/
/*
insert into cursos values
('1','HTML4','Curso de HTML5','40','37','2014'),
('2','Algoritmo','Lógica de Programação','20','16','2015'),
('3','NodeJS','Estudo com Javascript no Servidor','50','56','2016'),
('4','PGP','Curso PHP para iniciantes','40','20','2016'),
('5','Jarva','Introdução a linguagem Java','10','30','2016'),
('6','MySQL','Banco de dados MySQL','30','15','2016'),
('7','Word','Curso de Word Completo','40','30','2016'),
('8','Ajax','Estudo de PHP AJAX assíncrono','30','30','2016'),
('9','CSS3','Compreensão da linguagem de estilo','50','40','2016'),
('10','Python','Estudo de Python','50','56','2016');
*/
/*
insert into cursos 
(nome, descri,carga,totaulas,ano)
values
('Curso de Debug','Aprendendo com seus p´roprios erros','20','56','2016');
*/
/*
update cursos
set nome = 'HTML5'
where idcurso = '1';
*/
/*
update cursos
set nome = 'PHP', ano = '2017'
where idcurso = '4';
*/
/*
update cursos
set nome = 'Java',carga='40', ano = '2017'
where idcurso = '5';
*/
/*
delete from cursos
where idcurso = '7';
*/
/*truncate*/
/*desc Cursos*/
/*
select * from cursos
order by nome;
*/
/*
select * from cursos
order by nome desc;
*/
/*
select ano, carga,nome  from cursos
order by ano, nome;
*/
/*
select nome, carga from cursos
where ano = '2017'
order by nome;
*/
/*
select nome, descri, carga from cursos
where ano = '2016'
order by nome;
*/
/*
select nome, descri, carga, ano from cursos
where ano < '2017'
order by nome, ano;
*/
/*/*
> maior
< menor
!= <> diferente
*/
/*
select nome, descri, carga, ano from cursos
where ano <> '2017'
order by nome, ano;
*/
/*
select * from cursos
where totaulas between 20 and 40
order by nome desc, ano asc;
*/
/*
select nome, ano from cursos
where ano between 2015 and 2016;
*/
/*
update cursos
set ano = '2014'
where idcurso = '8';
*/
/*
select nome, descri, ano from cursos
where ano in (2014,2016)
order by ano;
*/
/*
select * from cursos
where carga > 35 and totaulas < 40
order by nome;
*/
/*
select * from cursos
where carga > 35 or totaulas < 40
order by nome;
*/
/*
select * from cursos
where nome = 'PHP';
*/
/*
select * from cursos
where nome like 'P%';
*/
/*
select * from cursos
where nome like '%A';
*/
/*
select * from cursos
where nome like '%A%';
*/
/*
select * from cursos
where nome not like '%A%';
*/
/*
select * from cursos
where nome like 'PH%P';
*/
/*
select * from cursos
where nome like 'PH%P%';
*/
/*
select * from cursos
where nome like '%o%e%_';
*/
/*
select distinct carga from cursos;
*/
/*
select distinct nacionalidade from pessoas;
order by nacionalidade
*/
/*
select distinct carga from cursos
order by carga;
*/
/*
select count(*) from cursos;
*/
/*
select count(*) from cursos
where carga > 30;
*/
/*
select max(totaulas) from cursos;
*/
/*
select max(totaulas) from cursos
where ano = 2015;
*/
/*
select nome, min(totaulas) from cursos
where ano = 2015;
*/
/*
select sum(carga) from cursos;
*/
/*
select sum(totaulas) from cursos;
*/
/*
select avg(totaulas) from cursos;
*/
/*
select nome from pessoas;
*/
/*
select * from pessoas
where nascimento between '2000-01-01' and '2015-12-31';
*/
/*
select * from pessoas
where nome like 'g%'and
nacionalidade = 'Brasil' and
sexo = 'F';
*/
/*
select nome, nacionalidade from pessoas
where nome like '%i%' and
nacionalidade <> 'Brasil' and
peso < 100 and
sexo = 'M';
*/
/*
select max(altura) from pessoas
where nacionalidade = 'Brasil' and sexo = 'M';
*/
/*
select min(peso) from pessoas
where sexo = 'M' and nacionalidade <> 'Brasil' and 
nascimento between '1980-01-01' and '2000-12-31';
*/
/*
select count(*) from pessoas
where sexo = 'M' and altura > 1.90;
*/
/*
select carga from cursos
group by carga;
*/
/*
select carga, count(nome) from cursos
group by carga;
*/
/*
select totaulas, count(*) from cursos
group by totaulas
order by totaulas;
*/
/*
select carga, count(nome) from cursos where totaulas = 56
group by carga;
*/

