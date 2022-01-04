-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 04. 13:36
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `games`
--
CREATE DATABASE IF NOT EXISTS `games` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `games`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `developer` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `genre` int(11) NOT NULL,
  `releaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `games`
--

INSERT INTO `games` (`id`, `name`, `developer`, `genre`, `releaseDate`) VALUES
(1, 'The Binding of Isaac: Rebirth', 'Edmund McMillen', 1, '2014-10-04'),
(2, 'Library of Ruina', 'Project Moon Games', 6, '2020-05-15'),
(3, 'Guild Wars 2', 'Arenanet', 3, '2012-08-28'),
(4, 'Arknights', 'Hypergryph', 7, '2019-05-01'),
(5, 'Ruined King', 'Airship Syndicate + Riot Forge', 4, '2021-11-16'),
(6, 'Danganronpa: Trigger Happy Havoc', 'Spike Chunsoft', 8, '2010-11-25'),
(7, 'Persona 5', 'Atlus', 4, '2016-09-15'),
(8, 'Control', 'Remedy Entertainment', 5, '2019-08-27'),
(9, 'Lobotomy Corporation', 'Project Moon Games', 7, '2016-12-17'),
(10, 'Legends of Runeterra', 'Riot Games', 6, '2020-04-29'),
(11, 'Magic The Gathering: Arena', 'Wizards of the Coast', 6, '2018-09-27'),
(12, 'Enter The Gungeon', 'Dodge Roll Entertainment', 1, '2016-04-05'),
(13, 'The Secret World', 'Funcom ltd.', 3, '2012-07-03'),
(14, 'Borderlands 3', 'Gearbox Software', 5, '2019-09-13'),
(15, 'Shadowrun: Dragonfall', 'Harebrained Schemes', 4, '2014-02-27');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Roguelike'),
(2, 'Action RPG'),
(3, 'MMORPG'),
(4, 'Classic RPG'),
(5, 'Shooter'),
(6, 'Card Game'),
(7, 'Strategy'),
(8, 'Visual Novel'),
(9, 'Metroidvania');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
