# TCC - CalculaImper

## Trabalho de Conclusão de Curso

### Tabelas Criadas

#### Calculo de Superficies
```mysql
create table calc_superficie
(
    id_calc       int unsigned auto_increment,
    tipo_cod_tipo int unsigned not null,
    desc_calc     varchar(40)  null,
    primary key (id_calc, tipo_cod_tipo),
    constraint calc_superficie_ibfk_1
        foreign key (tipo_cod_tipo) references tipo (cod_tipo)
);
```



#### Tipos de Superficies
```mysql
create table tipo
(
    cod_tipo  int unsigned auto_increment
        primary key,
    nome_tipo varchar(40) null
);
```



#### Tipos de Usuários
```mysql
create table tipo_usuario
(
    cod_tipousr   int unsigned auto_increment
        primary key,
    desc_tipousr  varchar(40)            null,
    nivel_tipousr int unsigned default 9 null
);
```




#### Usuários
```mysql
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


```

####  Tabela de Valores
```mysql
create table valores
(
    id_valor                      int unsigned auto_increment,
    calc_superficie_tipo_cod_tipo int unsigned   not null,
    calc_superficie_id_calc       int unsigned   not null,
    manta3desc                    decimal(10, 2) null,
    manta3alum                    decimal(10, 2) null,
    manta2morpl                   decimal(10, 2) null,
    plastipegante                 decimal(10, 2) null,
    diplas                        decimal(10, 2) null,
    mao_obra                      decimal(10, 2) null,
    primary key (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc),
    constraint valores_ibfk_1
        foreign key (calc_superficie_id_calc, calc_superficie_tipo_cod_tipo) references calc_superficie (id_calc, tipo_cod_tipo)
);
```

