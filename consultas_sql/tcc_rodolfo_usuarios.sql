create table usuarios
(
    cod_usuario              int unsigned auto_increment,
    tipo_usuario_cod_tipousr int unsigned not null,
    nome_usuario             varchar(60)  null,
    email_usuario            varchar(60)  null,
    senha_usuario            varchar(32)  null,
    dtcad_usuario            date         null,
    primary key (cod_usuario, tipo_usuario_cod_tipousr),
    constraint usuarios_ibfk_1
        foreign key (tipo_usuario_cod_tipousr) references tipo_usuario (cod_tipousr)
);

create index usuarios_FKIndex1
    on usuarios (tipo_usuario_cod_tipousr);

