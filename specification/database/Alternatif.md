# Alternatif
Alternatif table.

```sql
CREATE TABLE alternatif (
	id INT NOT NULL AUTO_INCREMENT,
	kode VARCHAR(100) NULL,
	nama VARCHAR(100) NULL,
    latitude DOUBLE (18,6) NULL,
    longitude DOUBLE (18,6) NULL,
	gambar VARCHAR(50) NULL,
   	keterangan VARCHAR(255) NULL,
	PRIMARY KEY (id)
);
```