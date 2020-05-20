CREATE TABLE `Klient` (
  `id_klient` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `imie` varchar(255),
  `nazwisko` varchar(255),
  `email` varchar(255),
  `haslo` varchar(255),
  `nr_telefonu` int
);

CREATE TABLE `Sprzet` (
  `id_sprzet` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `marka` varchar(255),
  `model` varchar(255),
  `typ_sprzetu` varchar(255),
  `cena` int,
  `kaucja` int,
  `zdjecie` varchar(255)
);

CREATE TABLE `Pracownicy` (
  `id_pracownik` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `imie` varchar(255),
  `nazwisko` varchar(255),
  `email` varchar(255),
  `haslo` varchar(255),
  `nr_telefonu` int
);

CREATE TABLE `Wypozyczenia` (
  `id_wypozyczenia` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_sprzet` int,
  `id_klient` int,
  `id_pracownik` int,
  `data_odb` date,
  `status` varchar(255)
);

ALTER TABLE `Wypozyczenia` ADD FOREIGN KEY (`id_sprzet`) REFERENCES `Sprzet` (`id_sprzet`);

ALTER TABLE `Wypozyczenia` ADD FOREIGN KEY (`id_klient`) REFERENCES `Klient` (`id_klient`);

ALTER TABLE `Wypozyczenia` ADD FOREIGN KEY (`id_pracownik`) REFERENCES `Pracownicy` (`id_pracownik`);
