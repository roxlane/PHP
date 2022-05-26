-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2022, 12:45:43
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phpproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `kadi` varchar(200) NOT NULL,
  `eposta` varchar(200) NOT NULL,
  `sifre` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `kadi`, `eposta`, `sifre`) VALUES
(16, 'Deneme', 'deneme@gmail.com', '32375894fca32a08689e4122c39a3baa216a5fcd'),
(20, 'Ahmet', 'ahmet@gmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),
(14, 'Saliha', 'akdspoakda@gmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),
(15, 'Hatice', 'htc@gmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),
(18, 'Emin', 'iop@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350'),
(19, 'Mine', 'mine@gmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
