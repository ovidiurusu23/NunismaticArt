-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 07:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

CREATE TABLE `categorii` (
  `cat_id` int(100) NOT NULL,
  `categ_nume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`cat_id`, `categ_nume`) VALUES
(1, 'aur'),
(7, 'argint'),
(8, 'aliaj'),
(9, 'colectii');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `adresa` varchar(100) DEFAULT NULL,
  `oras` varchar(20) NOT NULL,
  `judet` varchar(20) NOT NULL,
  `tara` varchar(20) NOT NULL,
  `cod_postal` varchar(11) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `total` int(11) NOT NULL,
  `programare` date NOT NULL,
  `orders_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `user_id`, `adresa`, `oras`, `judet`, `tara`, `cod_postal`, `telefon`, `total`, `programare`, `orders_time`) VALUES
(86, 30, 'Str. Mehedinti , nr 45, sc 2, ap 102', 'Targu Ocna', 'Cluj', 'Romania', '400001', '0744696069', 340, '0000-00-00', '2022-12-27 19:12:08'),
(87, 30, NULL, '', '', '', '', '1111111', 8, '2022-12-31', '2022-12-27 19:12:37'),
(88, 30, NULL, '', '', '', '', '1111111', 8, '2022-12-31', '2022-12-28 19:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `produs_id` int(11) NOT NULL,
  `cantitate` int(11) NOT NULL,
  `order_detail_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `orders_id`, `produs_id`, `cantitate`, `order_detail_time`) VALUES
(131, 86, 19, 1, '2022-12-27 19:12:08'),
(132, 86, 38, 1, '2022-12-27 19:12:08'),
(133, 87, 41, 1, '2022-12-27 19:12:37'),
(134, 87, 39, 1, '2022-12-27 19:12:37'),
(135, 88, 41, 1, '2022-12-28 19:10:11'),
(136, 88, 39, 1, '2022-12-28 19:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `produs_id` int(11) NOT NULL,
  `produs_nume` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_pret` int(11) NOT NULL,
  `produs_img` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_descriere` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(100) NOT NULL,
  `stoc` int(11) UNSIGNED NOT NULL,
  `product_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`produs_id`, `produs_nume`, `produs_pret`, `produs_img`, `produs_descriere`, `cat_id`, `stoc`, `product_time`) VALUES
(19, '1 Dolar 1979-1999', 100, 'admin\\product_images\\aliaj_1.png', '<b>An:</b><br>	1979-1999<br>\r\n<b>Perioada:</b> <br>	Statele Unite ale Americii (1981 - 2022)<br>\r\n<b>Tipul monedei:</b><br>	Monede de circulație<br>\r\n<b>Compoziție:</b><br>	Cupru placat cu Cupru-Nichel<br>\r\n<b>Tipul muchiei:</b><br>	Zimţată<br>\r\n<b>Formă:</b><br>	Circulară<br>\r\n<b>Aliniere:</b><br>	Monedă (180°)<br>\r\n<b>Greutate (gr):</b><br>	8.1<br>\r\n<b>Diametru (mm):</b><br>	26.5<br>', 8, 0, '2022-11-27 18:06:58'),
(25, '1 Halier', 220, 'admin\\product_images\\aliaj_2.png\r\n', '<b>An:</b><br>	1821-1824<br>\r\n<b>Perioada:</b>       <br>Marele Ducat de Hessen-Darmstadt (1806 - 1872)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Domnitor:</b>	<br>Ludovic I<br>\r\n<b>Compoziție:</b>	<br>Cupru<br>\r\n<b>Tipul muchiei:</b>	<br>Netedă<br>\r\n<b>Formă:</b>	<br>Circulară<br>', 8, 0, '2022-11-27 18:06:58'),
(26, '10 Kronor 2002', 110, 'admin\\product_images\\aliaj_3.png', '<b>Descriere avers:</b><br>	Trei coroane şi valoarea nominala<br>\r\n<b>escriere revers:</b>	<br>Carl XVI Gustaf<br>\r\n<b>Diametru:</b>	<br>20.40 mm<br>\r\n<b>Grosime:</b>	<br>2.90 mm<br>\r\n<b>Masa:</b>	<br>6.5700 g<br>\r\n<b>Material:</b>	<br>Cupru-Aluminiu-Nichel<br>\r\n<b>Orientare:</b>	<br>Medalie<br>', 8, 1, '2022-11-27 18:06:58'),
(27, '3 Mărci 1911', 75, 'admin\\product_images\\aliaj_4.png', '<b>Subiect:</b>	<br>Universitatea din Breslau<br>\r\n<b>Perioada:</b>	<br>Prusia (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>\r\n<b>Grosime (mm):</b>	<br>2.25<br>', 8, 2, '2022-11-27 18:06:58'),
(28, '3 Mărci 1911 ', 127, 'admin\\product_images\\aliaj_5.png', '<b>Subiect:</b>	<br>Cea de-a 25-a aniversare - Nunta lui Wilhelm al II-lea și Charlotte<br> \r\n<b>Perioada:</b>	<br>Württemberg (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Domnitor:</b>	<br>Wilhelm II<br>\r\n<b>Compoziție:</b>	<br>Argint 0.900<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>\r\n<b>Grosime (mm):</b>	<br>2.4<br>', 8, 11, '2022-11-27 18:06:58'),
(29, '3 Mărci 1915', 95, 'admin\\product_images\\aliaj_6.png', '<b>An:</b>	<br>1915<br>\r\n<b>Subiect:</b>	<br>Cea de-a 100-a aniversare - Absorbția orașului Mansfeld<br>\r\n<b>Perioada:</b>	<br>Prusia (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>', 8, 6, '2022-11-27 18:06:58'),
(30, '2 Mărci 1901', 350, 'admin\\product_images\\aliaj_7.png', '<b>An:</b>	<br>1901<br>\r\n<b>Perioada:</b>	<br>Lübeck (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Tipul muchiei:</b>	<br>Zimţată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>11.11<br>\r\n<b>Diametru (mm):</b>	<br>28<br>\r\n<b>Grosime (mm):</b>	<br>2.5<br>', 8, 5, '2022-11-27 18:06:58'),
(31, '3 Mărci 1913', 240, 'admin\\product_images\\aliaj_8.png', '<b>An:</b>	<br>1913<br>\r\n<b>Subiect:</b>	<br>Cea de-a 100-a aniversare - Declarația de război împotriva Franței<br>\r\n<b>Perioada:</b>	<br>Prusia (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>\r\n<b>Grosime (mm):</b>	<br>2.25<br>', 8, 4, '2022-11-27 18:06:58'),
(32, '3 Mărci 1910', 320, 'admin\\product_images\\aliaj_9.png', '<b>An:</b>	<br>1910<br>\r\n<b>Subiect:</b>	<br>Nunta lui William cu Feodora<br>\r\n<b>Perioada:</b>	<br>Saxa-Weimar-Eisenach (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>\r\n<b>Grosime (mm):</b>	<br>2.4<br>', 8, 3, '2022-11-27 18:06:58'),
(33, '3 mărci 1913', 410, 'admin\\product_images\\aliaj_10.png', '<b>An:</b>	<br>1913<br>\r\n<b>Subiect:</b>	<br>Cea de-a 100-a aniversare - Declarația de război împotriva Franței<br>\r\n<b>Perioada:</b>	<br>Prusia (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>\r\n<b>Grosime (mm):</b>	<br>2.25<br>', 8, 12, '2022-11-27 18:06:58'),
(34, '3 Mărci 1910', 600, 'admin\\product_images\\aliaj_11.png', '<b>An:</b>	<br>1910<br>\r\n<b>Perioada:</b>	<br>Hesse (1872 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate:</b> (gr)	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>', 8, 8, '2022-11-27 18:06:58'),
(35, '3 Mărci 1915', 340, 'admin\\product_images\\aliaj_12.png', '<b>An:</b>	<br>1915<br>\r\n<b>Subiect:</b>	<br>Cea de-a 100-a aniversare - Mare Duce<br>\r\n<b>Perioada:</b>	<br>Saxa-Weimar-Eisenach (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>', 8, 8, '2022-11-27 18:06:58'),
(36, '3 Mărci 1910', 390, 'admin\\product_images\\aliaj_13.png', '<b>An:</b>	<br>1910<br>\r\n<b>Subiect:</b>	<br>Universitatea din Berlin<br>\r\n<b>Perioada:</b>	<br>Prusia (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Aliniere:</b>	<br>Medalie (0°)<br>\r\n<b>Greutate (gr):</b>	<br>16.67<br>\r\n<b>Diametru (mm):</b>	<br>33<br>\r\n<b>Grosime (mm):</b>	<br>2.2<br>', 8, 3, '2022-11-27 18:06:58'),
(37, '2 Mărci 1911-1913', 190, 'admin\\product_images\\aliaj_14.png', '<b>Valoare:</b>	<br>2 mărci<br>\r\n<b>An:</b>	<br>1911-1913<br>\r\n<b>Perioada:</b>	<br>Baden (1871 - 1918)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Tipul muchiei:</b>	<br>Zimţată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>11.11<br>\r\n<b>Diametru (mm):</b>	<br>28<br>\r\n<b>Grosime (mm):</b>	<br>2.5<br>', 8, 4, '2022-11-27 18:06:58'),
(38, '5 Grivne 2006', 240, 'admin\\product_images\\argint_1.png', '<b>An:</b>	<br>2006<br>\r\n<b>Subiect:</b>	<br>A 10-a aniversare - Reforma valutară în Ucraina<br>\r\n<b>Perioada:</b>	<br>Ucraina (1992 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede colecționare<br>\r\n<b>Tipul muchiei:</b>	<br>Zimţată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>16.54<br>\r\n<b>Diametru (mm):</b>	<br>35<br>\r\n<b>Grosime (mm):</b>	<br>2.4<br>', 7, 0, '2022-11-27 18:06:58'),
(39, 'SUA ¼ dolar ', 110, 'admin\\product_images\\argint_2.png', '<b>An:</b>	<br>1965-1998<br>\r\n<b>Subiect:</b>	<br>Quarter Washington<br>\r\n<b>Perioada:</b>	<br>Statele Unite ale Americii (1981 - 2022)<br>\r\n<b>Tipul muchiei:</b>	<br>Zimţată<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>5.67<br>\r\n<b>Diametru (mm):</b>	<br>24.26<br>\r\n<b>Grosime (mm):</b>	<br>1.75<br>', 7, 4, '2022-11-27 18:06:58'),
(40, '1 Liră 2016-2022', 280, 'admin\\product_images\\argint_3.png', '<b>An:</b>	<br>2016-2022<br>\r\n<b>Perioada:</b>	<br>Regina Elizabeth II (1982 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Domnitor:</b>	<br>Elizabeth II<br>\r\n<b>Tipul muchiei:</b>	<br>Zimţată cu secţiuni netede<br>\r\n<b>Formă:</b>	<br>12 unghiuri<br>\r\n<b>Greutate (gr):</b>	<br>8.75<br>\r\n<b>Diametru (mm):</b>	<br>23.43<br>\r\n<b>Grosime (mm):</b>	<br>2.8<br>', 7, 9, '2022-11-27 18:06:58'),
(41, '1 Mohur 1825', 8200, 'admin\\product_images\\aur_1.png', '<b>An:</b>	<br>1825<br>\r\n<b>Perioada:</b>	<br>Bombay (1791 - 1836)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Compoziție:</b>	<br>Aur 0.500<br>\r\n<b>Tipul muchiei:</b>	<br>Netedă<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>11.59<br>\r\n<b>Diametru (mm):</b>	<br>16<br>', 1, 0, '2022-11-27 18:06:58'),
(42, '1 Liră 2004', 6800, 'admin\\product_images\\aur_2.png', '<b>An:</b>	<br>2004<br>\r\n<b>Perioada:</b>	<br>Regina Elizabeth II (1982 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede colecționare<br>\r\n<b>Domnitor:</b>	<br>Elizabeth II<br>\r\n<b>Compoziție:</b>	<br>Aur 0.917<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată și zimţată fin<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>19.62<br>\r\n<b>Diametru (mm):</b>	<br>22.5<br>', 1, 4, '2022-11-27 18:06:58'),
(43, '1 Liră 2008', 4600, 'admin\\product_images\\aur_3.png', '<b>An:</b>	<br>2008<br>\r\n<b>Perioada:</b>	<br>Regina Elizabeth II (1982 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede colecționare<br>\r\n<b>Domnitor:</b>	<br>Elizabeth II<br>\r\n<b>Compoziție:</b>	<br>Aur 0.917<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată și zimţată fin<br>\r\n<b>Descrierea muchiei:</b>	<br>\'DECUS ET TUTAMEN\' (An ornament and a safeguard)<br>\r\n<b>Formă</:b>	<br>Circulară<br>\r\n<b>Aliniere:</b>	<br>Medalie (0°)<br>\r\n<b>Greutate (gr):</b>	<br>19.62<br>\r\n<b>Diametru (mm):</b>	<br>22.5<br>', 1, 2, '2022-11-27 18:06:58'),
(44, '2 Zloți 1999\r\n', 4700, 'admin\\product_images\\aur_4.png', '<b>An:</b>	<br>1999<br>\r\n<b>Subiect:</b>	<br>500 de ani - Nașterea lui Jan Laski<br>\r\n<b>Perioada:</b>	<br>A Treia Republică (1990 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Formă:</b>	<br>Circulară<br>\r\n<b>Greutate (gr):</b>	<br>8.15<br>\r\n<b>Diametru (mm):</b>	<br>27<br>\r\n<b>Grosime (mm):</b>	<br>2.12<br>', 1, 6, '2022-11-27 18:06:58'),
(45, '100 Zloți 1998', 7200, 'admin\\product_images\\aur_5.png', '<b>An:</b>	<br>1998<br>\r\n<b>Subiect:</b>	<br>Polish Kings and Princes - Sigismund III Vasa (1587-1632)<br>\r\n<b>Perioada:</b>	<br>A Treia Republică (1990 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede colecționare<br>\r\n<b>Compoziție:</b>	<br>Aur 0.900<br>\r\n<b>Greutate (gr):</b>	<br>8<br>\r\n<b>Diametru (mm):</b>	<br>24<br>', 1, 8, '2022-11-27 18:06:58'),
(46, '10 Zloți 2004', 3800, 'admin\\product_images\\aur_6.png', '<b>An:</b>	<br>2004<br>\r\n<b>Subiect:</b>	<br>History of the Polish Zloty<br>\r\n<b>Perioada:</b>	<br>A Treia Republică (1990 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede colecționare<br>\r\n<b>Compoziție:</b>	<br>Aur 0.925<br>\r\n<b>Aliniere:</b>	<br>Medalie (0°)<br>\r\n<b>Greutate (gr):</b>	<br>14.14<br>\r\n<b>Diametru (mm):</b>	<br>32<br>\r\n<b>Grosime (mm):</b>	<br>2<br>', 1, 4, '2022-11-27 18:06:58'),
(47, '2 Zloți 2006', 5500, 'admin\\product_images\\aur_7.png', '<b>An:</b>	<br>2006<br>\r\n<b>Subiect:</b>	<br>Marmotă<br>\r\n<b>Perioada:</b>	<br>A Treia Republică (1990 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Cicluri:</b>	<br>Animalele Lumii<br>\r\n<b>Compoziție:</b>	<br>Aur<br>\r\n<b>Greutate (gr):</b>	<br>8.15<br>\r\n<b>Diametru (mm):</b>	<br>27<br>\r\n<b>Grosime (mm):</b>	<br>2.12<br>', 1, 4, '2022-11-27 18:06:58'),
(48, '2 Zloți 2003', 6100, 'admin\\product_images\\aur_8.png', '<b>An:</b>	<br>2003<br>\r\n<b>Subiect:</b>	<br>Generalul Stanislaw Maczek (1892-1994)<br>\r\nP<b>erioada:</b>	<br>A Treia Republică (1990 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede comemorative<br>\r\n<b>Compoziție:</b>	<br>Aur<br>\r\n<b>Greutate (gr):</b>	<br>8.15<br>\r\n<b>Diametru (mm):</b>	<br>27<br>\r\n<b>Grosime (mm):</b>	<br>2.12<br>', 1, 2, '2022-11-27 18:06:58'),
(49, 'Colectie monede Elvetia', 11200, 'admin\\product_images\\colectie_1.jpg', '<b>Țară:</b>	Elveția\r\n<b>Valoare:</b>	<br>5 franci<br>\r\n<b>An:</b>	<br>1931-1969<br>\r\n<b>Perioada:</b>	<br>Confederația Elvețiană (1968 - 2022)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Compoziție:</b>	<br>Aur, Argunt, Alama<br>\r\n<b>Tipul muchiei:</b>	<br>Inscripționată<br>\r\n<b>Formă:</b>	<br>Circulară<br>', 9, 2, '2022-11-27 18:06:58'),
(50, 'Colectie Copeici 1936-1940 URSS', 100, 'admin\\product_images\\aliaj_2.png', '<b>An:</b>	<br>1937-1946<br>\r\n<b>Perioada:</b>	<br>Uniunea Sovietică (1924 - 1958)<br>\r\n<b>Tipul monedei:</b>	<br>Monede de circulație<br>\r\n<b>Compoziție:</b>	<br>Aluminiu-Bronz<br>\r\n<b>Tipul muchiei:</b>	<br>Zimţată<br>\r\n<b>Formă:</b>	<br>Circulară<br>', 9, 2, '2022-11-27 18:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(100) NOT NULL,
  `rol` enum('admin','angajat','client','') NOT NULL DEFAULT 'client',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nume`, `prenume`, `email`, `parola`, `rol`, `create_at`) VALUES
(14, 'ovidiu', 'rusu', 'maia@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '2022-11-27 17:20:47'),
(15, 'nadia', 'rusu', 'nadia@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'angajat', '2022-11-27 17:20:47'),
(30, 'Paul', 'Pop', 'paul@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'client', '2022-12-18 08:01:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `produs_id` (`produs_id`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`produs_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorii`
--
ALTER TABLE `categorii`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `produs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`produs_id`) REFERENCES `produse` (`produs_id`);

--
-- Constraints for table `produse`
--
ALTER TABLE `produse`
  ADD CONSTRAINT `produse_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorii` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
