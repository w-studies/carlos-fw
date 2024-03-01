drop schema if exists `my-database`;
create schema `my-database`;
use `my-database`;
--
--
--

drop table if exists cadastros;
create table cadastros (
  id varchar(192) not null primary key,
  email varchar(192) unique,
  name varchar(192),
  password varchar(192),
  status tinyint(1) comment '0=desativado;1=ativo',
  created_by varchar(192),
  created_at timestamp default current_timestamp,
  updated_at datetime null
) Engine = InnoDB;
insert into cadastros (id, email, name, password)
values (
    'b2a22bfa-0fd0-406b-8904-ece488003e21',
    'carlos@email.br',
    'Carlos Admin',
    '$2y$10$JnA1Tcf2ZhyFf7lPRqYptezjuaf3yv0FhOZCJWjiW18uQexNd1YL.'
  );