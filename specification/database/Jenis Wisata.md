# Jenis Alternatif
Jenis Alternatif table.

```sql
CREATE TABLE jenis_alternatif (
	id INT NOT NULL AUTO_INCREMENT,
	kode_jenis VARCHAR(100) NULL,
	nama_jenis VARCHAR(255) NULL,
	jenis_kriteria VARCHAR(50) NULL,
	bobot DOUBLE(18, 2) NULL,
    keterangan TEXT NULL,
	PRIMARY KEY (id)
);
```