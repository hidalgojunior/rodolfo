create table calc_superficie
(
    id_calc       int unsigned auto_increment,
    tipo_cod_tipo int unsigned not null,
    desc_calc     varchar(40)  null,
    primary key (id_calc, tipo_cod_tipo),
    constraint calc_superficie_ibfk_1
        foreign key (tipo_cod_tipo) references tipo (cod_tipo)
);

create index calc_superficie_FKIndex1
    on calc_superficie (tipo_cod_tipo);

INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (5, 1, '50 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (6, 1, '50 mais');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (7, 1, '20 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (8, 2, '50 menos protegida');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (9, 2, '50 mais protegida');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (10, 2, '20 menos protegida');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (11, 2, '50 menos exposta');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (12, 2, '50 mais exposta');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (13, 2, '20 menos exposta');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (14, 3, '50 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (15, 3, '50 mais');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (16, 3, '20 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (17, 4, '50 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (18, 4, '50 mais');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (19, 4, '20 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (20, 5, '50 menos');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (21, 5, '50 mais');
INSERT INTO tcc_rodolfo.calc_superficie (id_calc, tipo_cod_tipo, desc_calc) VALUES (22, 5, '20 menos');
