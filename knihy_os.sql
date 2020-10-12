-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 11. říj 2020, 13:37
-- Verze serveru: 10.4.6-MariaDB
-- Verze PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `knihy_os`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kategorie` int(11) NOT NULL,
  `kategorie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `kategorie`
--

INSERT INTO `kategorie` (`id_kategorie`, `kategorie`) VALUES
(1, 'Světová a česká literatura do konce 18. století'),
(2, 'Světová a česká 19. století'),
(3, 'Světová literatura 20. a 21. století'),
(4, 'Česká literatura 20. a 21. století');

-- --------------------------------------------------------

--
-- Struktura tabulky `knihy`
--

CREATE TABLE `knihy` (
  `idknihy` int(11) NOT NULL,
  `nazev_knihy` varchar(90) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `anotace` varchar(250) DEFAULT NULL,
  `kategorie_id_kategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `knihy`
--

INSERT INTO `knihy` (`idknihy`, `nazev_knihy`, `autor`, `anotace`, `kategorie_id_kategorie`) VALUES
(1, 'Robinson Crusoe', 'Defoe Daniel', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla quis diam. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Vivamus porttitor t', 1),
(2, 'Labyrint světa a ráj srdce', 'Komenský Jan Amos', '', 1),
(3, 'Pýcha a předsudek', 'Austenová Jane', '', 2),
(4, 'Květy zla', 'Baudelaire Charles', '', 2),
(5, 'Oliver Twist', 'Dickens Charles', '', 2),
(6, 'Nora', 'Ibsen Henrik', '', 2),
(7, 'Sbohem, armádo', 'Hemingway Ernest', '', 2),
(8, 'Cizinec', 'Camus Albert', '', 2),
(9, 'Milenec lady Chatterleyové', 'Lawrence David Herbert', '', 2),
(10, 'Proměna', 'KafkaFranz', '', 2),
(11, 'Hlava XXII', 'Heller Joseph', '', 3),
(12, 'Na západní frontě klid', 'Remarque Erich Maria', '', 3),
(13, 'Horalka', 'Moravia Alberto', '', 3),
(14, 'Bílá nemoc', 'Čapek Karel', '', 3),
(15, 'Povídky z jedné kapsy', 'Čapek Karel', '', 3),
(16, 'Válka s mloky', 'Čapek Karel', '', 4),
(17, 'Krysař', 'Dyk Viktor', '', 4),
(18, 'Slezské písně', 'Bezruč Petr', '', 4),
(19, 'Ostře sledované vlaky', 'Hrabal Bohumil', '', 4),
(20, 'Staré řecké báje a pověsti', 'Petiška Eduard', '', 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `polozka_menu` varchar(45) DEFAULT NULL,
  `display_name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `menu`
--

INSERT INTO `menu` (`id_menu`, `polozka_menu`, `display_name`) VALUES
(8, 'Domů', ''),
(9, 'Autoři', 'autori'),
(10, 'Díla', 'dila');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_kategorie`);

--
-- Klíče pro tabulku `knihy`
--
ALTER TABLE `knihy`
  ADD PRIMARY KEY (`idknihy`);

--
-- Klíče pro tabulku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pro tabulku `knihy`
--
ALTER TABLE `knihy`
  MODIFY `idknihy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pro tabulku `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
