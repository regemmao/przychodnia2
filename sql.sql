CREATE TABLE pracownicy (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  imie VARCHAR(20) NOT NULL,
  nazwisko VARCHAR(45) NOT NULL,
  tytul VARCHAR(20) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE pacjenci (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  imie VARCHAR(20) NULL,
  nazwisko VARCHAR(45) NULL,
  PESEL INT UNSIGNED ZEROFILL NULL,
  PRIMARY KEY(id)
);

CREATE TABLE dyzury (
  pracownicy_id INTEGER UNSIGNED NOT NULL,
  pacjenci_id INTEGER UNSIGNED NOT NULL DEFAULT 0,
  data_2 DATETIME NOT NULL,
  czas_od TIME NOT NULL,
  czas_do TIME NOT NULL,
  PRIMARY KEY(pracownicy_id, pacjenci_id),
  INDEX dyzury_FKIndex1(pracownicy_id),
  INDEX dyzury_FKIndex2(pacjenci_id),
  FOREIGN KEY(pracownicy_id)
    REFERENCES pracownicy(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(pacjenci_id)
    REFERENCES pacjenci(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


