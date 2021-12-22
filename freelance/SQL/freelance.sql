-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 11 Şub 2021, 06:05:40
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `freelance`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nick` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nick`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'Admin', 'admin@nkufreelance.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE IF NOT EXISTS `ayarlar` (
  `ayar_id` int(200) NOT NULL AUTO_INCREMENT,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`),
  UNIQUE KEY `ayar_id` (`ayar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_mail`) VALUES
(1, 'logo.png', 'NKU Freelance Platformu ', 'Freelance Sitesi Proje Konusu  ', 'iş, ilan, freelance, nku, proje, online, calismak, iş, aramak  ', 'proje@freelance.com ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

DROP TABLE IF EXISTS `ilanlar`;
CREATE TABLE IF NOT EXISTS `ilanlar` (
  `ilan_id` int(15) NOT NULL AUTO_INCREMENT,
  `ilan_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_fiyat` int(15) NOT NULL,
  `ilan_fiyat2` int(15) NOT NULL,
  `ilan_aciklama` varchar(1500) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_tarih` date DEFAULT current_timestamp(),
  `ilan_tip` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_ustid` int(11) NOT NULL,
  `ilan_katid` int(15) NOT NULL,
  `ilan_sahipid` int(15) DEFAULT NULL,
  PRIMARY KEY (`ilan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilanlar`
--

INSERT INTO `ilanlar` (`ilan_id`, `ilan_ad`, `ilan_fiyat`, `ilan_fiyat2`, `ilan_aciklama`, `ilan_tarih`, `ilan_tip`, `ilan_ustid`, `ilan_katid`, `ilan_sahipid`) VALUES
(7, 'Ticimax altyapisina hakim yazilimci', 5, 15, '<p>E ticaret sitemize urun ekleme cikarma seo bilgileri en&nbsp;basit css bilen yazilimci ariyoru</p>\r\n', '2021-02-10', 'Freelance', 5, 5, NULL),
(8, 'web sitesi oluşturma', 20, 100, '<p>web sitesi oluşturmak i&ccedil;in birini arıyorum</p>\r\n', '2021-02-10', 'Freelance', 5, 1, NULL),
(9, 'Elektrik sirketi destek istiyor', 100, 250, '<p>Islerimizin yogun oldugu icin disariya is vermege karar verdik. DDS CAD &uuml;zeri elektrik 3 boyutlu tasarim yapabilecek eleman varsa yurt disindan da calisabilir.</p>\r\n', '2021-02-10', 'Tam Zamanlı', 5, 5, NULL),
(10, 'Merhaba Bu Bir Test Görevidir', 10, 100, '<p>Merhabalar</p>\r\n', '2021-02-11', 'Tam Zamanlı', 6, 1, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(15) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(50) NOT NULL,
  `kategori_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_icon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_sira`, `kategori_detay`, `kategori_icon`) VALUES
(1, 'Web ve Yazılım', 1, '\r\nYazılım Mühendisi, Web / Mobil Geliştirici ve Daha Fazlası', 'icon-line-awesome-file-code-o'),
(2, 'Veri Bilimi ve Analizi', 2, '\r\nVeri Uzmanı / Bilim Adamı, Veri Analisti ve Daha Fazlası', 'icon-line-awesome-cloud-upload'),
(3, 'Muhasebe ve Danışmanlık', 3, 'Denetçi, Muhasebeci, Fnansal Analist ve Daha Fazlası', 'icon-line-awesome-suitcase'),
(4, 'Yazma ve Çeviriler', 4, 'Metin Yazarı, Yaratıcı Yazar, Çevirmen ve Daha Fazlası', 'icon-line-awesome-pencil'),
(5, 'Satış ve Pazarlama', 5, 'Marka Müdürü, Pazarlama Koordinatörü ve Daha Fazlası', 'icon-line-awesome-pie-chart'),
(6, 'Grafik Tasarım', 6, 'Yaratıcı Yönetmen, Web Tasarımcısı ve Daha Fazlası', 'icon-line-awesome-image'),
(8, 'Dijital Pazarlama ', 7, 'Pazarlama Analisti, Sosyal Profil Yöneticisi ve Daha Fazlası', 'icon-line-awesome-bullhorn'),
(9, 'Eğitim ve Öğretim', 8, 'Danışman, Koç, Eğitim Koordinatörü ve Daha Fazlası', 'icon-line-awesome-graduation-cap');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teklif`
--

DROP TABLE IF EXISTS `teklif`;
CREATE TABLE IF NOT EXISTS `teklif` (
  `teklif_id` int(11) NOT NULL AUTO_INCREMENT,
  `teklif_verenid` int(11) NOT NULL,
  `teklif_alanid` int(11) NOT NULL,
  `teklif_ilanid` int(11) NOT NULL,
  `teklif_durum` int(11) DEFAULT 0,
  `teklif_sahipid` int(11) DEFAULT 0,
  `teklif_fiyat` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `teklif_sure` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `teklif_suretip` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `teklif_tamam` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`teklif_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `teklif`
--

INSERT INTO `teklif` (`teklif_id`, `teklif_verenid`, `teklif_alanid`, `teklif_ilanid`, `teklif_durum`, `teklif_sahipid`, `teklif_fiyat`, `teklif_sure`, `teklif_suretip`, `teklif_tamam`) VALUES
(7, 7, 5, 9, 0, 7, '1111', '3', 'Ay', 1),
(6, 7, 5, 7, 0, 7, '10', '3', 'Gün', 1),
(9, 8, 6, 10, 0, 8, '15', '4', 'Gün', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `uye_mail` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `uye_hakkinda` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'uploads/uyefoto/bos.png',
  `uye_tip` tinyint(1) NOT NULL DEFAULT 0,
  `uye_yetki` tinyint(10) NOT NULL DEFAULT 0,
  `uye_basvuru` tinyint(11) NOT NULL DEFAULT 0,
  `uye_ucret` int(100) DEFAULT NULL,
  `uye_onay` tinyint(1) NOT NULL DEFAULT 0,
  `uye_kisa` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_facebook` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_twitter` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_github` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_instagram` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_ad`, `uye_mail`, `uye_sifre`, `uye_hakkinda`, `uye_foto`, `uye_tip`, `uye_yetki`, `uye_basvuru`, `uye_ucret`, `uye_onay`, `uye_kisa`, `uye_facebook`, `uye_twitter`, `uye_github`, `uye_instagram`) VALUES
(5, 'isveren 1', 'isveren1@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, 'uploads/uyefoto/bos.png', 1, 0, 0, NULL, 0, NULL, 'face', 'twitter', 'github', 'inst'),
(6, 'isveren 2', 'isveren2@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, 'uploads/uyefoto/bos.png', 1, 0, 0, NULL, 1, NULL, '', '', '', ''),
(7, 'calisan 1', 'calisan1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '', 'uploads/uyefoto/bos.png', 0, 1, 0, 35, 0, '', NULL, NULL, NULL, NULL),
(8, 'calisan 2', 'calisan2@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, 'uploads/uyefoto/bos.png', 0, 1, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenek`
--

DROP TABLE IF EXISTS `yetenek`;
CREATE TABLE IF NOT EXISTS `yetenek` (
  `yetenek_id` int(15) NOT NULL AUTO_INCREMENT,
  `uye_id` int(155) NOT NULL,
  `yetenek_ad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`yetenek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetenek`
--

INSERT INTO `yetenek` (`yetenek_id`, `uye_id`, `yetenek_ad`) VALUES
(1, 1, 'PHP'),
(2, 1, 'Mysql'),
(3, 1, 'Android'),
(4, 1, 'Java'),
(5, 1, 'Html');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
