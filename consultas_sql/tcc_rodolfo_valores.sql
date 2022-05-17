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

create index valores_FKIndex1
    on valores (calc_superficie_id_calc, calc_superficie_tipo_cod_tipo);

INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (1, 1, 5, 557.00, 624.00, 641.00, 412.00, 93.00, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (2, 1, 6, 376.16, 422.43, 435.50, 279.73, 61.85, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (3, 1, 7, 557.00, 624.00, 641.00, 412.00, 93.00, 800.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (4, 2, 8, 557.00, 624.00, 641.00, 412.00, 93.00, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (5, 2, 9, 376.16, 422.43, 435.50, 279.73, 61.85, 800.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (6, 2, 10, 557.00, 624.00, 641.00, 412.00, 93.00, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (7, 2, 11, 557.00, 624.00, 641.00, 412.00, 93.00, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (16, 2, 12, 376.16, 422.43, 435.50, 279.73, 61.85, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (17, 2, 13, 557.00, 624.00, 641.00, 412.00, 93.00, 800.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (18, 3, 14, 557.00, 624.00, 641.00, 412.00, 93.00, 67.60);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (19, 3, 15, 624.00, 669.00, 419.17, 279.73, 61.85, 67.60);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (20, 3, 16, 624.00, 669.00, 641.00, 412.00, 93.00, 800.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (21, 4, 17, 557.00, 624.00, 641.00, 412.00, 93.00, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (22, 4, 18, 376.16, 422.43, 435.50, 279.73, 61.85, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (23, 4, 19, 557.00, 624.00, 641.00, 412.00, 93.00, 800.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (24, 5, 20, 557.00, 624.00, 641.00, 412.00, 93.00, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (25, 5, 21, 376.16, 422.43, 435.50, 279.73, 61.85, 42.00);
INSERT INTO tcc_rodolfo.valores (id_valor, calc_superficie_tipo_cod_tipo, calc_superficie_id_calc, manta3desc, manta3alum, manta2morpl, plastipegante, diplas, mao_obra) VALUES (26, 5, 22, 557.00, 624.00, 641.00, 412.00, 93.00, 800.00);
