create table tipo
(
    cod_tipo  int unsigned auto_increment
        primary key,
    nome_tipo varchar(40) null
);

INSERT INTO tcc_rodolfo.tipo (cod_tipo, nome_tipo) VALUES (1, 'MURO');
INSERT INTO tcc_rodolfo.tipo (cod_tipo, nome_tipo) VALUES (2, 'LAJE');
INSERT INTO tcc_rodolfo.tipo (cod_tipo, nome_tipo) VALUES (3, 'TELHADO');
INSERT INTO tcc_rodolfo.tipo (cod_tipo, nome_tipo) VALUES (4, 'PISCINA');
INSERT INTO tcc_rodolfo.tipo (cod_tipo, nome_tipo) VALUES (5, 'CILÍNDRICO RESERVATÓRIO');
