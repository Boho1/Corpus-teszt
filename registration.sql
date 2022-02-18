-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Feb 18. 19:18
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `corpus`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `registration`
--

INSERT INTO `registration` (`id`, `name`, `password`) VALUES
(1, 'franciaagy', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Dina', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'Dinaee', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Dina', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Dinafghf', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
