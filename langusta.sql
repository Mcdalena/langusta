-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2020, 23:49
-- Wersja serwera: 10.3.27-MariaDB-0+deb10u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `langusta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Admins`
--

CREATE TABLE `Admins` (
  `Id` int(11) NOT NULL,
  `Login` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `Admins`
--

INSERT INTO `Admins` (`Id`, `Login`, `Password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Leaders`
--

CREATE TABLE `Leaders` (
  `Id` int(11) NOT NULL,
  `Name` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `Nick` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Surname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Phone` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `Leaders`
--

INSERT INTO `Leaders` (`Id`, `Name`, `Nick`, `Surname`, `Phone`, `Email`) VALUES
(32, 'Katarzyna', 'Gira', 'Rober', '101010111', 'giera_kasia@giera.com'),
(31, 'Dominik', 'Waleczny', 'Fighter', '999999999', 'waleczny@fighter.com'),
(30, 'Jacek', 'Wisek', 'Jacekowski', '88888888', 'jasek@jasek.eu'),
(29, 'Edyta', 'Dyrygentka', 'Muchowiecka', '777777777', 'ignis@dyrygent.pl'),
(28, 'Robert', 'Robert', 'Roberto', '666666666', 'rob@ert.pl'),
(27, 'Piotr', 'Jab?o?', 'Jab?o?ski', '555555555', 'piotrus@piotrus.com'),
(26, 'Edyta', 'Edytka', 'Makowska', '444444444', 'edytka@edytka.com'),
(25, 'Krzysztof', 'Cris', 'Andrzejewicz', '222222222', 'cris@cris.pl'),
(24, '?ukasz', 'Luk', '?ukasiewicz', '111111111', 'luk@luk.com'),
(23, 'Magdalena', 'Mcda', 'Talarczyk', '664030266', 'mcdalena.talarczyk@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Matches`
--

CREATE TABLE `Matches` (
  `Id` int(11) NOT NULL,
  `WinnerTeam_id` int(11) NOT NULL,
  `DefeatTeam_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `Matches`
--

INSERT INTO `Matches` (`Id`, `WinnerTeam_id`, `DefeatTeam_id`) VALUES
(17, 13, 12),
(6, 5, 12),
(4, 7, 10),
(7, 5, 11),
(8, 5, 14),
(9, 14, 12),
(10, 12, 8),
(11, 5, 7),
(12, 10, 9),
(13, 5, 10),
(14, 6, 13),
(16, 7, 9),
(18, 11, 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Members`
--

CREATE TABLE `Members` (
  `Id` int(11) NOT NULL,
  `Name_surname` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `Nick` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `Members`
--

INSERT INTO `Members` (`Id`, `Name_surname`, `Nick`) VALUES
(158, 'Henryk Hubert', 'Heniu'),
(157, 'Krystian Karzek', 'Kruk'),
(156, 'Katarzyna Rober', 'Ludwik'),
(155, 'Katarzyna Rober', 'Gira'),
(154, 'Adam Nowak', 'Nowy'),
(153, 'Antonii Jakubczyk', 'Jakub'),
(152, 'Sebastian Sebusiowicz', 'Kasper'),
(151, 'Sebastian Sebusiowicz', 'Kaczka'),
(150, 'Przemyslaw Adam', 'Industry'),
(149, 'Jakub Fronczak', 'Kubek'),
(148, 'Jacek Jankiewicz', 'Wisek'),
(147, 'Jacek Jankiewicz', 'Jasek'),
(146, 'Przemek Grugek', 'Grug'),
(145, 'Antoni Jeremi', 'No_name'),
(144, 'Joanna Kuczek', 'Kuczek'),
(143, 'Zuzanna Kwiatek', 'Kopiec'),
(142, 'Zuzanna Kwiatek', 'Flower'),
(141, 'Kacper Zawisza', 'Zybu?'),
(140, 'Krystian Kowalczyk', 'Kowal'),
(139, 'Zenus April', 'Kulik'),
(138, 'Zenus April', 'April'),
(137, 'Wojtek Winny', 'Wina'),
(136, 'Jakub Soplica', 'Alko'),
(135, 'Kamil Kamilczuk', 'Robak'),
(134, 'Kamil Kamilczuk', 'Chudy'),
(133, 'Paulina Pauli?czuk', 'Paula'),
(132, 'Kinga Kurkiewicz', 'Kinia'),
(131, 'Ania Ankiewicz', 'Aniu'),
(130, 'Teresa Balka', 'Monia'),
(129, 'Teresa Balka', 'Renia'),
(128, 'Mikolaj Palkowski', 'Palu'),
(127, 'Maciej Mikolajkiewicz', 'Mikul'),
(126, 'Jakub P?aczek', 'Rozdzenka'),
(125, 'Jakub Placzek', 'Placzul'),
(124, 'Dominik Dominiczewski', 'Pseudo'),
(123, 'Sebastian Sebastianowicz', 'Kaczuszka'),
(122, '?ukasz ?ukasiewicz', 'Januszex'),
(121, '?ukasz ?ukasiewicz', 'Luk'),
(120, 'Grzegorz Grzegowski', 'GG'),
(119, 'Krzysztof Krzysztofiak', 'KK'),
(118, 'Adam Adamczyk', 'MM'),
(117, 'Adam Adamczyk', 'AA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Teams`
--

CREATE TABLE `Teams` (
  `Id` int(11) NOT NULL,
  `Name` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `Leader_id` int(11) NOT NULL,
  `Member1_id` int(11) NOT NULL,
  `Member2_id` int(11) NOT NULL,
  `Member3_id` int(11) NOT NULL,
  `Member4_id` int(11) NOT NULL,
  `Member5_id` int(11) DEFAULT NULL,
  `Member6_id` int(11) DEFAULT NULL,
  `Coach_name` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `Teams`
--

INSERT INTO `Teams` (`Id`, `Name`, `Leader_id`, `Member1_id`, `Member2_id`, `Member3_id`, `Member4_id`, `Member5_id`, `Member6_id`, `Coach_name`) VALUES
(7, 'Pomiatacze', 25, 125, 126, 127, 128, NULL, NULL, ''),
(5, 'Team D', 23, 117, 118, 119, 120, NULL, NULL, 'Magdalena Talarczyk'),
(6, 'Team Luk', 24, 121, 122, 123, 124, NULL, NULL, ''),
(8, 'GirlsPower', 26, 129, 130, 131, 132, 133, NULL, ''),
(9, 'Probki', 27, 134, 135, 136, 137, NULL, NULL, ''),
(10, 'ZespolR', 28, 138, 139, 140, 141, NULL, NULL, ''),
(11, 'Ignis Cantores', 29, 142, 143, 144, 145, 146, NULL, ''),
(12, 'Graphic Designers', 30, 147, 148, 149, 150, NULL, NULL, ''),
(13, 'Fighters', 31, 151, 152, 153, 154, NULL, NULL, 'Dominik Fighter'),
(14, 'Calki', 32, 155, 156, 157, 158, NULL, NULL, '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Leaders`
--
ALTER TABLE `Leaders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Matches`
--
ALTER TABLE `Matches`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `WinnerTeam_id` (`WinnerTeam_id`),
  ADD KEY `DefeatTeam_id` (`DefeatTeam_id`);

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Teams`
--
ALTER TABLE `Teams`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Lider_id` (`Leader_id`),
  ADD KEY `Member1_id` (`Member1_id`),
  ADD KEY `Member2_id` (`Member2_id`),
  ADD KEY `Member3_id` (`Member3_id`),
  ADD KEY `Member4_id` (`Member4_id`),
  ADD KEY `Member5_id` (`Member5_id`),
  ADD KEY `Member6_id` (`Member6_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `Admins`
--
ALTER TABLE `Admins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `Leaders`
--
ALTER TABLE `Leaders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT dla tabeli `Matches`
--
ALTER TABLE `Matches`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `Members`
--
ALTER TABLE `Members`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT dla tabeli `Teams`
--
ALTER TABLE `Teams`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
