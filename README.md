## JOIN 
- SELECT * FROM pelanggan RIGHT JOIN pesan ON pelanggan.id_pelanggan=pesan.id_pelanggan

## AGREGAT
- SELECT {fungsi agregat} (nama_field) AS {alias} FROM {nama_table}
- AVG = Rata-rata
- MIN = minimum 
- MAX = maksimum 
- SUM = hitung total nilai 
- COUNT = hitung banyak row 
- ORDER BY {field} ASC | ORDER BY {field} DESC
- contoh SELECT SUM(stok_barang) FROM barang GROUP BY jenis_barang;

## STORE PROCEDURE
DELIMITER $$
CREATE PROCEDURE nama_procedure()
BEGIN
	{perintah sql contoh SELECT * FROM mahasiswa;}
END $$
DELIMITER ;

## STORE FUNCTION
DELIMITER $$
CREATE FUNCTION nama_function(parameter)
RETURN return_type
BEGIN
	...
RETURN return_value
END$$
DELIMITER ;

- DECLARE variable_name datatype(size) [DEFAULT default_value];
- INTO
- SET variable_name = value;

## TRIGGER
- BEFORE INSERT
- AFTER INSERT
- BEFORE UPDATE
- AFTER UPDATE
- BEFORE DELETE
- AFTER DELETE
- format
DELIMITER $$
CREATE TRIGGER trigger_time trigger_name trigger_event
EVENT ON table_name
FOR EACH ROW
BEGIN
...
END$$
DELIMITER ;
- SHOW TRIGGER \G;


## COMMIT ROLLBACK
- START TRANSACTION;
- ...
- ROLLBACK;
- COMMIT;
