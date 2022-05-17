create table tipo_usuario
(
    cod_tipousr   int unsigned auto_increment
        primary key,
    desc_tipousr  varchar(40)            null,
    nivel_tipousr int unsigned default 9 null
);

INSERT INTO tcc_rodolfo.tipo_usuario (cod_tipousr, desc_tipousr, nivel_tipousr) VALUES (1, 'Administrador', 1);
INSERT INTO tcc_rodolfo.tipo_usuario (cod_tipousr, desc_tipousr, nivel_tipousr) VALUES (2, 'Usuario Comum', 9);
