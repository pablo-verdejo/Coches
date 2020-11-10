create database db_cursa;
use db_cursa;
create table tbl_cursa(
    id_cursa int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_cursa varchar(255) NOT NULL,
    total_parit varchar(255) NOT NULL,
);

create table tbl_categ(
    id_categ int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria varchar(255) NOT NULL,
    edad_min DECIMAL(2,2) NOT NULL,
    edad_max DECIMAL(2,2) NOT NULL,
)

create table tbl_participante(
    DNI_participante varchar(9) NOT NULL PRIMARY KEY AUTO_INCREMENT,
)