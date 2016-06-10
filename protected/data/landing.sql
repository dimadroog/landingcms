-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 09 2016 г., 16:13
-- Версия сервера: 5.5.49-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `landing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publish` int(11) NOT NULL,
  `publish_menu` int(11) NOT NULL,
  `background` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `bg_style` varchar(255) NOT NULL,
  `animate` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `block`
--

INSERT INTO `block` (`id`, `alias`, `name`, `content`, `publish`, `publish_menu`, `background`, `bg_color`, `bg_style`, `animate`, `weight`) VALUES
(1, 'footer', 'footer', '', 1, 0, '', '', 'background-repeat: no-repeat; background-size: 100%;', '', 3),
(2, 'slider', 'Слайдер', '<h2 style="text-align: center;">Это&nbsp;слайдер!</h2>\r\n\r\n<h4>Это текст перед слайдером</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/klenova/static/wysiwyg/kcfinder/upload/images/prir2.jpg" style="width: 900px;" /> <img alt="" src="/klenova/static/wysiwyg/kcfinder/upload/images/prir1.jpg" style="width: 900px;" /> <img alt="" src="/klenova/static/wysiwyg/kcfinder/upload/images/prir3.jpg" style="width: 900px;" /> <img alt="" src="/klenova/static/wysiwyg/kcfinder/upload/images/prir4.jpg" style="width: 900px;" /></p>\r\n', 1, 0, '', '', 'background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: top center;', '', 1),
(3, 'contact', 'Контакты', '<h1 style="text-align: center;">Связаться с нами</h1>\r\n\r\n<h3>Вы можете написать нам заполнив форму ниже.</h3>\r\n', 1, 1, '', '', 'background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: top center;', '', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` text NOT NULL,
  `seo_keywords` text NOT NULL,
  `bootstrap_theme` varchar(255) NOT NULL,
  `navbar_position` varchar(255) NOT NULL,
  `navbar_theme` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `sitename`, `seo_title`, `seo_description`, `seo_keywords`, `bootstrap_theme`, `navbar_position`, `navbar_theme`, `password`, `email`) VALUES
(1, 'My Landing Page', 'Мой одностраничный сайт', 'Описание сайта', 'Ключевые слова', 'bootstrap.min', 'navbar-fixed-top', 'navbar-default', '66b65567cedbc743bda3417fb813b9ba', 'mail@mail');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
