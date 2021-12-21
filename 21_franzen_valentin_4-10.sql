-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Dez 2021 um 15:58
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `21_franzen_valentin_4-10`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `Benutzername` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `Passwort` varchar(11) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`Benutzername`, `Passwort`) VALUES
('123', 'ABC'),
('Grieche', 'Passwort'),
('Julian', 'Passwort'),
('Julian1', 'Passwort'),
('Valentin', 'Passwort'),
('admin', 'Passwort'),
('admin1', 'Passwort'),
('admin3', '1'),
('admin4', '1');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `P_ID` int(11) NOT NULL,
  `Nachname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Vorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Geschlecht` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Wohnort` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`P_ID`, `Nachname`, `Vorname`, `Geschlecht`, `Wohnort`) VALUES
(93, 'Nachname1', 'Vorname1', 'männlich', 'Nieder-Olm'),
(94, 'Nachname2', 'Vorname2', 'männlich', 'Nieder-Olm'),
(95, 'Nachname3', 'Vorname3', 'männlich', 'Nieder-Olm'),
(98, 'Nachname6', 'Vorname6', 'männlich', 'Nieder-Olm'),
(99, 'Nachname7', 'Vorname7', 'männlich', 'Nieder-Olm'),
(103, 'Limburg', 'Julian', 'männlich', 'Sörgenloch'),
(115, 'Statha', 'Alex', 'männlich', 'Klowinternheim');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`Benutzername`);

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
