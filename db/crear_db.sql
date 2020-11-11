create database db_cursa;
use db_cursa;
create table tbl_cursa(
    id_cursa int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_cursa varchar(255) NOT NULL,
    total_parit varchar(255) NOT NULL
);

create table tbl_categ(
    id_categ int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria varchar(255) NOT NULL,
    edad_min DECIMAL(2,2) NOT NULL,
    edad_max DECIMAL(2,2) NOT NULL,
    id_cursa int(10) NOT NULL
);

create table tbl_participante(
    DNI_participante varchar(9) NOT NULL PRIMARY KEY,
    nombre_participante varchar(255) NOT NULL,
    apellido1_participante varchar(255) NOT NULL,
    apellido2_participante varchar(255) NOT NULL,
    fecha_nacimiento date,
    email_participante varchar(255) NOT NULL,
    genero_participante enum ('Hombre','Mujer'),
    id_categ int(10) NOT NULL
);

ALTER TABLE tbl_categ
ADD CONSTRAINT FK_id_cursa FOREIGN KEY (id_cursa) REFERENCES tbl_cursa(id_cursa);

ALTER TABLE tbl_participante
ADD CONSTRAINT FK_id_catg FOREIGN KEY (id_categ) REFERENCES tbl_categ(id_categ);