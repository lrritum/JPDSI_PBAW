-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Maj 2021, 02:30
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza_danych_sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie_produktow`
--

CREATE TABLE `kategorie_produktow` (
  `id_kategorii` int(11) NOT NULL,
  `nazwa_kategorii` varchar(30) NOT NULL,
  `opis_kategorii` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id_koszyka` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `id_uzytkownika1` int(11) NOT NULL,
  `produkty_id_produktu` int(11) NOT NULL,
  `uzytkownicy_id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_produktu` int(11) NOT NULL,
  `nazwa_produktu` varchar(30) NOT NULL,
  `opis_produktu` text DEFAULT NULL,
  `cena` int(11) NOT NULL,
  `id_kategoria` int(11) NOT NULL,
  `kategorie_produktow_id_kategorii` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola_uzytkownika`
--

CREATE TABLE `rola_uzytkownika` (
  `id_roli` int(11) NOT NULL,
  `nazwa_roli` varchar(30) NOT NULL,
  `opis_roli` text NOT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `email_uzytkownika` varchar(30) NOT NULL,
  `nazwa_uzytkownika` varchar(30) NOT NULL,
  `haslo_uzytkownika` varchar(30) NOT NULL,
  `rola_uzytkownika_id_roli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie_produktow`
--
ALTER TABLE `kategorie_produktow`
  ADD PRIMARY KEY (`id_kategorii`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id_koszyka`),
  ADD KEY `koszyk_produkty_fk` (`produkty_id_produktu`),
  ADD KEY `koszyk_uzytkownicy_fk` (`uzytkownicy_id_uzytkownika`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produktu`),
  ADD KEY `produkty_kategorie_produktow_fk` (`kategorie_produktow_id_kategorii`);

--
-- Indeksy dla tabeli `rola_uzytkownika`
--
ALTER TABLE `rola_uzytkownika`
  ADD PRIMARY KEY (`id_roli`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`),
  ADD KEY `uzytkownicy_rola_uzytkownika_fk` (`rola_uzytkownika_id_roli`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD CONSTRAINT `koszyk_produkty_fk` FOREIGN KEY (`produkty_id_produktu`) REFERENCES `produkty` (`id_produktu`),
  ADD CONSTRAINT `koszyk_uzytkownicy_fk` FOREIGN KEY (`uzytkownicy_id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`);

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_kategorie_produktow_fk` FOREIGN KEY (`kategorie_produktow_id_kategorii`) REFERENCES `kategorie_produktow` (`id_kategorii`);

--
-- Ograniczenia dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_rola_uzytkownika_fk` FOREIGN KEY (`rola_uzytkownika_id_roli`) REFERENCES `rola_uzytkownika` (`id_roli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
