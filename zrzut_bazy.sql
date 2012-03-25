-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 25 Mar 2012, 14:56
-- Wersja serwera: 5.1.54
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `ztw_kino`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `bilety`
--

CREATE TABLE IF NOT EXISTS `bilety` (
  `idBiletu` int(11) NOT NULL AUTO_INCREMENT,
  `idSeansu` int(11) NOT NULL,
  `rzad` varchar(1) COLLATE utf8_polish_ci NOT NULL,
  `miejsce` int(11) NOT NULL,
  `rodzaj` enum('Normalny','Ulgowy','Studencki','Seniorski') COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL,
  `idWidza` int(11) DEFAULT NULL,
  `idPracownika` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBiletu`),
  KEY `idWidza` (`idWidza`),
  KEY `idPracownika` (`idPracownika`),
  KEY `idSeansu` (`idSeansu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `bilety`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `filmy`
--

CREATE TABLE IF NOT EXISTS `filmy` (
  `idFilmu` int(11) NOT NULL AUTO_INCREMENT,
  `tytul` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `gatunek` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `rok` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `rezyser` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`idFilmu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`idFilmu`, `tytul`, `gatunek`, `rok`, `opis`, `rezyser`) VALUES
(1, 'baba', 'rr', 2131, 'Blahahahahah aeag a', 'Rrror'),
(2, 'Film2', 'Terror', 1990, 'Terror ferror', 'Bha ha'),
(4, 'FilmKasjera', 'tere', 2222, 'af', 'a'),
(5, 'FilmKasjera', 'tere', 2222, 'af', 'awfaw'),
(6, 'FilmKasjera', 'tere', 2222, 'af', 'awfaw');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `pracownicy`
--

CREATE TABLE IF NOT EXISTS `pracownicy` (
  `idPracownika` int(4) NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` enum('Kasjer','Kierownik') COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`idPracownika`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`idPracownika`, `imie`, `nazwisko`, `stanowisko`, `login`, `haslo`) VALUES
(1, 'Maciej', 'W', 'Kierownik', 'antivirus', '8744b5b855cc15ae75b5b4a44d0c1a10ab9da6bc6f9ba8fde12dab036fbd8dca5aef9c394de77eaff2fd5fb950174712078f5b9464f7072d61ffc410a5cbf633'),
(2, 'Marcin', 'Koralewski', 'Kierownik', 'koral', 'dbc4036725fc4619709fccd763afef27aa49129c6ec68ccc26b625ccc6ae2e510e4fc51dcc66805a5bef12d1416268afefc01fac02e55380baca705c7a1556b6'),
(5, 'Jan', 'Kowalski', 'Kasjer', 'jkowalski', '39796a227b83541e3dc61467d372523e757e6c2830d87c05c27847ac037c1e3039db487ff2814ee661fbbdf12c97305091a25c2b0d87b1b903300c5a0808c47b');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `idSali` int(4) NOT NULL,
  `rzedy` int(4) NOT NULL,
  `miejsca` int(4) NOT NULL,
  PRIMARY KEY (`idSali`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `sale`
--

INSERT INTO `sale` (`idSali`, `rzedy`, `miejsca`) VALUES
(1, 20, 20);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `seans`
--

CREATE TABLE IF NOT EXISTS `seans` (
  `idSeansu` int(11) NOT NULL AUTO_INCREMENT,
  `idSali` int(11) NOT NULL,
  `idFilmu` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`idSeansu`),
  KEY `idSali` (`idSali`),
  KEY `idFilmu` (`idFilmu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `seans`
--

INSERT INTO `seans` (`idSeansu`, `idSali`, `idFilmu`, `data`) VALUES
(1, 1, 1, '2010-04-01 23:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `widzowie`
--

CREATE TABLE IF NOT EXISTS `widzowie` (
  `idWidza` int(4) NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`idWidza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `widzowie`
--


--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `bilety`
--
ALTER TABLE `bilety`
  ADD CONSTRAINT `bilety_ibfk_3` FOREIGN KEY (`idWidza`) REFERENCES `widzowie` (`idWidza`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `bilety_ibfk_4` FOREIGN KEY (`idPracownika`) REFERENCES `pracownicy` (`idPracownika`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `bilety_ibfk_5` FOREIGN KEY (`idSeansu`) REFERENCES `seans` (`idSeansu`) ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `seans`
--
ALTER TABLE `seans`
  ADD CONSTRAINT `seans_ibfk_1` FOREIGN KEY (`idSali`) REFERENCES `sale` (`idSali`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `seans_ibfk_2` FOREIGN KEY (`idFilmu`) REFERENCES `filmy` (`idFilmu`) ON UPDATE NO ACTION;
