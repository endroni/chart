CREATE DATABASE pampulha;
USE pampulha;

RENAME TABLE tabela_teste TO inmet;
SELECT Data FROM inmet;

# DROP TABLE inmet;

ALTER TABLE inmet CHANGE `Data` `data` DATE; 
ALTER TABLE inmet CHANGE `Hora (UTC)` `hora` int;
ALTER TABLE inmet CHANGE `Temp. Ins. (C)` `tempInc` DOUBLE;
ALTER TABLE inmet CHANGE `Temp. Max. (C)` `tempMax` DOUBLE;
ALTER TABLE inmet CHANGE `Temp. Min. (C)` `tempMin` DOUBLE;

SELECT * FROM inmet;
SELECT tempInc, hora FROM inmet WHERE data='2018-01-01';
