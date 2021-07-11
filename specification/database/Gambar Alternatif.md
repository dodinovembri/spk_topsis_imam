# Gambar Alternatif
Gambar Alternatif table.

```sql
CREATE TABLE gambar_alternatif (
	id INT NOT NULL AUTO_INCREMENT,
	id_alternatif INT NOT NULL,
	gambar VARCHAR(50) NULL,
    latitude DOUBLE (18,6) NULL,
    longitude DOUBLE (18,6) NULL,
	gambar VARCHAR(50) NULL,
   	keterangan TEXT NULL,
	PRIMARY KEY (id)
);
```