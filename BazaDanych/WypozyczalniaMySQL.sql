CREATE TABLE `Klient` (
  `id_klient` int PRIMARY KEY,
  `imie` varchar(255),
  `nazwisko` varchar(255),
  `email` varchar(255),
  `haslo` varchar(255),
  `nr_telefonu` int
);

CREATE TABLE `Pojazdy` (
  `id_pojazdu` int PRIMARY KEY,
  `marka` varchar(255),
  `model` varchar(255),
  `silnik` varchar(255),
  `klimatyzacja` varchar(255),
  `nr_rej` varchar(255),
  `rodz_paliwa` varchar(255),
  `cena` int,
  `kaucja` int,
  `zdjecie` varchar(255)
);

CREATE TABLE `Pracownik` (
  `id_pracownik` int PRIMARY KEY,
  `imie` varchar(255),
  `nazwisko` varchar(255),
  `email` varchar(255),
  `haslo` varchar(255),
  `nr_telefonu` int
);

CREATE TABLE `Miejsce` (
  `id_miejsce` int PRIMARY KEY,
  `id_pracownik` int,
  `id_sprzet` int,
  `ulica` varchar(255),
  `numer` varchar(255),
  `miasto` varchar(255),
  `kod` varchar(255),
  `numer_tel` int
);

CREATE TABLE `Wypozyczenie` (
  `id_wypozyczenia` int PRIMARY KEY,
  `id_sprzet` int,
  `id_klient` int,
  `data_odb` date,
  `data_zwr` date,
  `status` varchar(255)
);


ALTER TABLE `Miejsce` ADD FOREIGN KEY (`id_pracownik`) REFERENCES `Pracownik` (`id_pracownik`);

ALTER TABLE `Miejsce` ADD FOREIGN KEY (`id_sprzet`) REFERENCES `Pojazdy` (`id_pojazdu`);

ALTER TABLE `Wypozyczenie` ADD FOREIGN KEY (`id_sprzet`) REFERENCES `Pojazdy` (`id_pojazdu`);

ALTER TABLE `Wypozyczenie` ADD FOREIGN KEY (`id_klient`) REFERENCES `Klient` (`id_klient`);
