# Kriteria
Kriteria table.

```sql
CREATE TABLE kriteria (
	id INT NOT NULL AUTO_INCREMENT,
	kode VARCHAR(100) NULL,
	nama VARCHAR(255) NULL,
	jenis_kriteria VARCHAR(50) NULL,
	bobot DOUBLE(18, 2) NULL,
    keterangan TEXT NULL,
	PRIMARY KEY (id)
);
```