CREATE DATABASE db_inmet;
USE db_inmet;

select * from tb_pampulha_2023;

alter table tb_pampulha_2023 change `Umi. Ins. (%)` `umi_ins` int;
alter table tb_pampulha_2023 change `﻿"Data"` `data` DATE;
alter table tb_pampulha_2023 change `Hora (UTC)` `hora` int;
alter table tb_pampulha_2023 change `Temp. Ins. (C)` `temp_ins` DOUBLE;

rename table `generatedBy_react-csv` to tb_pampulha_2023;

CREATE TABLE tb_pampulha (
	id_pampulha INT PRIMARY KEY,
    data DATE,
    hora_utc INT(5),
    temp_ins_c DECIMAL(2,2),
    temp_max_c DECIMAL(2,2),
    temp_min DECIMAL(2,2),
    umi_ins INT(3),
    umi_max INT(3),
    umi_min INT(3),
    pto_orvalho_ins DECIMAL(2,2),
    pto_orvalho_max DECIMAL(2,2),
    pto_orvalho_min DECIMAL(2,2),
    pressao_ins_hpa DECIMAL(4,2),
    pressao_max_hpa DECIMAL(4,2),
    pressao_min_hpa DECIMAL(4,2),
    vel_vento_ms DECIMAL(2,2),
    dir_vento_ms INT(3),
    raj_vento_ms DECIMAL(2,1),
    radiacao_kjm DECIMAL(4,2),
    chuva_mm DECIMAL(2,2)
    );
    
LOAD DATA INFILE '/home/rubem/Downloads/generatedBy_react-csv.csv'
INTO TABLE tb_pampulha
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'generatedBy_react-csv.csv'
INTO TABLE tb_pampulha
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

LOAD DATA INFILE '/home/rubem/Downloads/generatedBy_react-csv.csv'
INTO TABLE tb_pampulha
FIELDS TERMINATED BY ','
IGNORE 1 ROWS;

LOAD DATA INFILE '/home/rubem/Downloads/generatedBy_react-csv.csv' INTO TABLE tb_pampulha
FIELDS TERMINATED BY ',' ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;

SELECT * FROM tb_pampulha;

select * from `generatedBy_react-csv`;