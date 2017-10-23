-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 18 2017 р., 15:41
-- Версія сервера: 5.7.16
-- Версія PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `yii2shopoclock`
--

-- --------------------------------------------------------

--
-- Структура таблиці `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `length` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `size_integer` varchar(255) DEFAULT NULL,
  `size_string` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `count` int(15) DEFAULT '1',
  `status` int(6) DEFAULT '1',
  `public` int(6) DEFAULT '1',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `product_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(10) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `alias` varchar(255) DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`, `alias`, `created_at`, `updated_at`) VALUES
(1, 0, 'Механічні', NULL, NULL, 'mehanika', NULL, NULL),
(2, 0, 'Кварцеві', NULL, NULL, 'kvarcevi', NULL, NULL),
(3, 0, 'Цифрові', NULL, NULL, 'chifrovi', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `parent_id` int(18) DEFAULT '0',
  `text` text,
  `likes` int(10) DEFAULT '0',
  `deslikes` int(10) DEFAULT '0',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `product_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` int(15) DEFAULT NULL,
  `price` int(15) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `time`, `price`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Звичайна доставка', 35, 10, '', 'Доставляється Вам на почту і ........', NULL, NULL),
(2, 'Безкоштовна доставка', 60, 0, '', 'Доставляється Вам на почту і ........', NULL, NULL),
(3, 'Швидка доставка', 20, 20, '', 'Доставляється Вам на почту і ........', NULL, NULL),
(4, 'Швидка доставка', 3, 50, '', 'Доставляється курєром особисто Вам в руки ........', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `text` text,
  `public` int(1) DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `text` text,
  `status` int(1) DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `main` int(15) DEFAULT NULL,
  `public` int(1) DEFAULT '1',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `product_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `images`
--

INSERT INTO `images` (`id`, `name`, `main`, `public`, `created_at`, `updated_at`, `product_id`) VALUES
(1, 'Creative-Best-Price-Luxury-reloj-de-pulsera-Mens-Watches.jpg', 1, 1, NULL, NULL, 8),
(2, 'Festina-Men-Watch-Casual.jpg', 0, 1, NULL, NULL, 8),
(3, 'sku_424762_1.jpg', 0, 1, NULL, NULL, 8),
(4, 'yazole271-500x539.jpg', 0, 1, NULL, NULL, 8),
(5, 's-l300.jpg', 1, 1, NULL, NULL, 7),
(6, 'watch_IWC.jpg', 0, 1, NULL, NULL, 7),
(7, 'sku_424762_1.jpg', 0, 1, NULL, NULL, 7),
(8, '462813950_1.jpg', 0, 1, NULL, NULL, 7),
(9, 'ck7nae.jpg', 1, 1, NULL, NULL, 6),
(10, 'mekhanyche.jpg', 0, 1, NULL, NULL, 6),
(11, 's-l300.jpg', 0, 1, NULL, NULL, 6),
(12, '9837322.jpg', 0, 1, NULL, NULL, 6),
(13, '2017-Mens-Luxury-Crocodile-Faux-Leather-Analog.jpg', 1, 1, NULL, NULL, 5),
(14, '9837322.jpg', 0, 1, NULL, NULL, 5),
(15, 'sku_424762_1.jpg', 0, 1, NULL, NULL, 5),
(16, '441578432_3_644x461_cholovchl.jpg', 0, 1, NULL, NULL, 5),
(17, '2017-Mens-Luxury.jpg', 1, 1, NULL, NULL, 4),
(18, '441578432_3_644x461_cholovchl.jpg', 0, 1, NULL, NULL, 4),
(19, 's-l300.jpg', 0, 1, NULL, NULL, 4),
(20, 'yazole271-500x539.jpg', 0, 1, NULL, NULL, 4),
(21, '9837322.jpg', 1, 1, NULL, NULL, 3),
(22, 'Megir-Chronograp.jpg', 0, 1, NULL, NULL, 3),
(23, 'mekhanyche.jpg', 0, 1, NULL, NULL, 3),
(24, 's-l300.jpg', 0, 1, NULL, NULL, 3),
(25, 'godinniki-naruchn.jpeg', 1, 1, NULL, NULL, 2),
(26, 'Creative-Best-Price.jpg', 0, 1, NULL, NULL, 2),
(27, 'Festina-Men-Watch.jpg', 0, 1, NULL, NULL, 2),
(28, '516164566_6.jpg', 0, 1, NULL, NULL, 2),
(29, '462813950_1.jpg', 1, 1, NULL, NULL, 1),
(30, '516164566_6.jpg', 0, 1, NULL, NULL, 1),
(31, 'ck7nae.jpg', 0, 1, NULL, NULL, 1),
(32, 'Creative-Best-Price.jpg', 0, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(15) DEFAULT '1',
  `whom_id` int(15) DEFAULT '1',
  `text` text,
  `read_it` int(15) DEFAULT '0',
  `last_message` int(15) DEFAULT '1',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1506631559),
('m170924_220400_create_basket_table', 1506631561),
('m170924_220416_create_category_table', 1506631562),
('m170924_220450_create_feedback_table', 1506631562),
('m170924_220506_create_delivery_table', 1506631563),
('m170924_220516_create_faq_table', 1506631563),
('m170924_220530_create_images_table', 1506631564),
('m170924_220545_create_messages_table', 1506631564),
('m170924_220600_create_order_table', 1506631564),
('m170924_220742_create_payment_table', 1506631564),
('m170924_220753_create_product_table', 1506631565),
('m170924_220808_create_product_options_table', 1506631565),
('m170924_221003_create_product_rating_table', 1506631565),
('m170924_221021_create_response_table', 1506631566),
('m170924_222612_create_rols_table', 1506631566),
('m170924_222622_create_tags_table', 1506631566),
('m170924_222650_create_user_table', 1506631566),
('m170924_222707_create_user_rating_table', 1506631566),
('m170925_174021_create_comment_table', 1506631567),
('m170925_205859_add_foreign_key', 1506631567);

-- --------------------------------------------------------

--
-- Структура таблиці `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `size_integer` varchar(255) DEFAULT NULL,
  `size_string` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `sum` varchar(255) DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `product_id` int(15) DEFAULT '1',
  `seller_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `account` text,
  `our_account` text,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `order_id` int(15) DEFAULT '1',
  `delivery_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `hit` int(1) DEFAULT NULL,
  `new` int(1) DEFAULT NULL,
  `sale` int(1) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `count` int(15) DEFAULT NULL,
  `text` text,
  `currency` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `public` int(11) DEFAULT '1',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `category_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `title`, `alias`, `hit`, `new`, `sale`, `price`, `count`, `text`, `currency`, `discount`, `public`, `created_at`, `updated_at`, `user_id`, `category_id`) VALUES
(1, 'Xonix Модные мужские спортивные часы Водонепроницаемый 100 м открытый весело цифровые часы плавание дайвинг наручные часы Reloj Hombre Montre Homme', 'xonix_modnye_muzhskie_sportivnye_chasy_vodonepronicaemyj_100_m_otkrytyj_veselo_cifrovye_chasy_plavanie_dajving_naruchnye_chasy_reloj_hombre_montre_homme', 1, 1, 1, '453', 687, 'Бренд:XonixТип изделия:Наручные часыСотовая связь:Зона разных часовых поясов,Полный календарь,Светодиодный дисплей,Автоматическая дата,Секундомер,Вечный календарь,Плавание,Ударопрочный,Хронограф,Водонепроницаемые,Тревога,Задняя подсветка,Водолаз,Дисплей недели,Ретранслятор,СветящийсяТип застёжки:ПряжкаПол:МужчиныЧехол толщина:12.6mmМатериал коробочек и чехлов:БумагаЧасовой механизм:ЦифровойТип материала ремешка:РезиновыйГлубина Водонепроницаемости:10BarСтиль:СпортФорма чехла:КруглаяДлина Ленты:22cmДиаметр диска:44.0mmМатериал корпуса:РезиновыйПартномер:GJОкна шкалы тип материала:СмолаSport Type:SwimmingWater Resistance Depth:100mDial Material Type:RubberCondition :New with tagsWeight:66g (Don\'t Contain Box)Listing year:New 2016Place of Origin :Guangdong, China (Mainland)Element:Sports Dive Deporte Deportivo Sumergible Militar ChronographeItems:Relogio Masculino Montre Homme Reloj Hombre Whatch HodinkyProduct:Sportklocka Armbanduhren Klockor Zegarki Me', '1', '0', 1, NULL, NULL, 8, 3),
(2, 'О цифровой умные часы, пригодный Android/IOS Телефон Bluetooth Интеллектуальный часы спортивные SmartWatch TF sim-карты Камера Поддержка', 'o_cifrovoj_umnye_chasy_prigodnyj_telefon_bluetooth_intellektualnyj_chasy_sportivnye_smartwatch', 1, 1, 1, '54', 353, 'Бренд:FUNIQUEПол:МужчиныСтиль:СпортЧасовой механизм:УмныйМатериал корпуса:СплавДлина Ленты:25.5cmТип застёжки:Скрытая застежкаГлубина Водонепроницаемости:Нет-водонепроницаемыеСотовая связь:Задняя подсветка,Тревога,Фотография,Водонепроницаемые,Fitness Tracker,Светящийся,Вечный календарь,Message Reminder,Dial Call,Call Reminder,Sleep Tracker,Ударопрочный,Bluetooth,Ретранслятор,Секундомер,Answer Call,Полный календарь,Автоматическая дата,Светодиодный дисплейДиаметр диска:40mmПартномер:M16582Материал коробочек и чехлов:Нет пакетОкна шкалы тип материала:СтеклоФорма чехла:КвадратТип материала ремешка:СиликонШирина полосы:24mmЧехол толщина:11mmТип изделия:Наручные часыFunctions:Push APP Message ( Whatsapp Facebook Twitter) for AndroidSupport language:English,Russian,Spanish,French,GermaPolish,Portuguese,Turkish, ItalianWomen Men fitness Smart:Smart wearable devicesModel:DZ09Tpye:Camera,Bluetooth Smart Watch, SmartwatchBattery Capacity:300-450mAhRAM:<128MBCPU Manufacturer:MediatekCompatibility:All Compatible', '1', '0', 1, NULL, NULL, 8, 3),
(3, 'Новинка 2017 года бренд, так Повседневная часы Мужчины G Стиль Водонепроницаемый спортивные Военное Дело Часы шок Мужские Роскошные Аналоговый Цифровой кварцевые часы', 'novinka_2017_goda_brend,_tak_povsednevnaya_chasy_muzhchiny_g_stil_vodonepronicaemyj_sportivnye_voennoe_delo_chasy_shok_muzhskie_roskoshnye_analogovyj_cifrovoj_kvarcevye_chasy', 0, 1, 1, '253', 125, 'енд:alikeТип изделия:Наручные часыСотовая связь:Задняя подсветка,Тревога,Водонепроницаемые,Хронограф,Предупреждение безопасности,Ударопрочный,Ретранслятор,Секундомер,Полный календарь,Автоматическая дата,Светодиодный дисплей,ВодолазГлубина Водонепроницаемости:3BarЧасовой механизм:ЦифровойМатериал коробочек и чехлов:БумагаМатериал корпуса:АкриловыйСтиль:СпортДиаметр диска:45mmПол:МужчиныЧехол толщина:12mmДлина Ленты:24cmТип материала ремешка:РезиновыйФорма чехла:КруглаяПартномер:15115Тип застёжки:ПряжкаОкна шкалы тип материала:Материал хардлексШирина полосы:22mmPlace of Origin:Guangdong, China (Mainland)Water Resistance Depth:50 mBand With:20mm to 29mmItem Type:WristwatchesDial Material Type:RubberCondition:New with tags', '1', '0', 1, NULL, NULL, 8, 3),
(4, 'Спорт Bluetooth Смарт часы для Для мужчин Для женщин цифровой SMS напомнить шагомер для Android Samsung телефон', 'sport_bluetooth_smart_chasy_dlya_dlya_muzhchin_dlya_zhenshhin_cifrovoj_sms_napomnit_shagomer_dlya_android_samsung_telefon', 1, 0, 0, '472', 36, 'Бренд:gagafeelТип изделия:Наручные часыЧехол толщина:8mmСотовая связь:Полный календарь,Message Reminder,Секундомер,Фотография,Хронограф,Call Reminder,Тревога,Bluetooth,Sleep TrackerПартномер:Smart WristbandТип застёжки:ПряжкаШирина полосы:30mmДиаметр диска:18mmДлина Ленты:19cmЧасовой механизм:УмныйФорма чехла:КвадратОкна шкалы тип материала:Материал хардлексСтиль:СпортМатериал коробочек и чехлов:Нет пакетТип материала ремешка:СиликонПол:ВлюбленныеМатериал корпуса:Нержавеющая стальГлубина Водонепроницаемости:Нет-водонепроницаемыеColor:Black, Blue, WhiteDesign 1:Smart ClockDesign 2:Digital WatchStyle 1:Women\'s Smart WatchesStyle 2:Bracelet Sport wristband for SamsungStyle 3:Smart Watch MenOccasion1:Smart Watch WomenOccasion 2:Sport watchOccasion 3:Bluetooth Smart WatchFeature1:Clock Women Men', '1', '0', 1, NULL, NULL, 8, 3),
(5, 'Forsining 3D логотип Дизайн Hollow Гравировка черный золотой кожаный чехол Скелет Деловые часы Для мужчин Элитный бренд heren horloge', 'forsining_3d_logotip_dizajn_hollow_gravirovka_chernyj_zolotoj_kozhanyj_chexol_skelet_delovye_chasy_dlya_muzhchin_elitnyj_brend_heren_horloge', 1, 1, 1, '3253', 43, 'Бренд:ForsiningТип изделия:Механические наручные часыФорма чехла:КруглаяШирина полосы:18mmЧехол толщина:11mmТип материала ремешка:КожаМатериал коробочек и чехлов:БумагаДиаметр диска:40mmСтиль:Модный и повседневныйТип застёжки:ПряжкаМатериал корпуса:Нержавеющая стальПартномер:GMT838Сотовая связь:НетГлубина Водонепроницаемости:Нет-водонепроницаемыеПол:МужчиныЧасовой механизм:Механическая рука ветерОкна шкалы тип материала:Материал хардлексДлина Ленты:25.0cmBand With:10mm to 19mmBand Width:18mmClasp Type:BuckleItem Type:WristwatchesDial Material Type:Stainless Steel', '1', '0', 1, NULL, NULL, 8, 1),
(6, 'Роскошные Дракон Скелет автоматические механические часы для мужчин наручные часы из нержавеющей стали ремешок золотые часы Водонепроницаемый мужские Relogio', 'roskoshnye_drakon_skelet_avtomaticheskie_mexanicheskie_chasy_dlya_muzhchin_naruchnye_chasy_iz_nerzhaveyushhej_stali_remeshok_zolotye_chasy_vodonepronicaemyj_muzhskie_relogio', 1, 1, 1, '744', 48, 'Бренд:GorbenТип изделия:Механические наручные часыГлубина Водонепроницаемости:3BarФорма чехла:КруглаяДиаметр диска:4.0mmМатериал коробочек и чехлов:БумагаСотовая связь:Водонепроницаемые,СветящийсяПартномер:S041Чехол толщина:13mmСтиль:РоскошьМатериал корпуса:Нержавеющая стальТип материала ремешка:Нержавеющая стальШирина полосы:20mmТип застёжки:Скрытая застежка с нажимной кнопкойПол:МужчиныОкна шкалы тип материала:Материал хардлексДлина Ленты:24cmЧасовой механизм:Автоматическая заводкаWater Resistance Depth:Life waterproofItem Type:WristwatchesDial Material Type:Stainless SteelCondition:New without tagsDial Display:AnalogBand Color:Golden', '1', '0', 1, NULL, NULL, 8, 1),
(7, 'Naviforce модный бренд Повседневное Часы Для Мужчин\'s 3ATM Водонепроницаемый кварцевые часы Для мужчин Дата часы мужские кожаные армейские Военное Дело наручные часы', 'naviforce_modnyj_brend_povsednevnoe_chasy_dlya_muzhchins_3atm_kvarcevye_chasy_dlya', 1, 1, 1, '134', 437, 'Бренд:Naviforce календарнаяТип изделия:Кварцевые наручные часыГлубина Водонепроницаемости:3BarФорма чехла:КруглаяТип материала ремешка:КожаМатериал коробочек и чехлов:БумагаСотовая связь:Водонепроницаемые,Полный календарь,Автоматическая дата,ВодолазСтиль:Модный и повседневныйДиаметр диска:46mmТип застёжки:ПряжкаЧехол толщина:10mmМатериал корпуса:СплавЧасовой механизм:КварцевыйДлина Ленты:25cmШирина полосы:24mmПартномер:NF9076Пол:МужчиныОкна шкалы тип материала:Материал хардлексFree shipping:yes', '1', '0', 1, NULL, NULL, 8, 2),
(8, 'Натуральная megir кварц мужской часы натуральная кожа часы Гонки мужчин студенты игра Run хронограф мужской Glow руки', 'naturalnaya_megir_kvarc_muzhskoj_chasy_naturalnaya_kozha_chasy_gonki_muzhchin_studenty_igra_run_xronograf_muzhskoj_glow_ruki', 0, 0, 1, '241', 263, 'Бренд:MegirТип изделия:Кварцевые наручные часыСотовая связь:Водонепроницаемые,Автоматическая дата,Ударопрочный,ХронографГлубина Водонепроницаемости:3BarШирина полосы:22mmОкна шкалы тип материала:Материал хардлексМатериал корпуса:СплавЧасовой механизм:КварцевыйФорма чехла:КруглаяЧехол толщина:12mmТип застёжки:ПряжкаПол:МужчиныДиаметр диска:46mmДлина Ленты:23.5cmМатериал коробочек и чехлов:БумагаПартномер:MG2015Тип материала ремешка:КожаСтиль:Модный и повседневныйOccasion:Anniversary, Engagement, Gift,Party,WeddingPlace of Origin:Zhejiang, China (Mainland)Design:men watches top brand luxurywatches:relojes mujerMen:relogiosItem Type:Wristwatches', '1', '0', 1, NULL, NULL, 8, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `product_options`
--

CREATE TABLE `product_options` (
  `id` int(11) NOT NULL,
  `length` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `size_integer` varchar(255) DEFAULT NULL,
  `size_string` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `count` int(15) DEFAULT NULL,
  `price` int(15) DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `product_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product_options`
--

INSERT INTO `product_options` (`id`, `length`, `height`, `width`, `size_integer`, `size_string`, `weight`, `color`, `material`, `count`, `price`, `created_at`, `updated_at`, `product_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, 'red', NULL, 145, 345, NULL, NULL, 1),
(2, NULL, NULL, NULL, NULL, NULL, NULL, 'yellow', NULL, 231, 345, NULL, NULL, 1),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 'black', NULL, 35, 745, NULL, NULL, 8),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'white', NULL, 75, 745, NULL, NULL, 8),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'yellow', NULL, 231, 345, NULL, NULL, 2),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'red', NULL, 145, 345, NULL, NULL, 2),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'blue', NULL, 31, 545, NULL, NULL, 3),
(8, NULL, NULL, NULL, NULL, NULL, NULL, 'yellow', NULL, 111, 845, NULL, NULL, 3),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'green', NULL, 111, 845, NULL, NULL, 8),
(10, NULL, NULL, NULL, NULL, NULL, NULL, 'red', NULL, 131, 1145, NULL, NULL, 4),
(11, NULL, NULL, NULL, NULL, NULL, NULL, 'yellow', NULL, 231, 345, NULL, NULL, 4),
(12, NULL, NULL, NULL, NULL, NULL, NULL, 'green', NULL, 111, 845, NULL, NULL, 5),
(13, NULL, NULL, NULL, NULL, NULL, NULL, 'red', NULL, 145, 345, NULL, NULL, 5),
(14, NULL, NULL, NULL, NULL, NULL, NULL, 'yellow', NULL, 231, 345, NULL, NULL, 6),
(15, NULL, NULL, NULL, NULL, NULL, NULL, 'yellow', NULL, 21, 3345, NULL, NULL, 7),
(16, NULL, NULL, NULL, NULL, NULL, NULL, 'blue', NULL, 75, 545, NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Структура таблиці `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `rank` varchar(255) DEFAULT '0',
  `public` int(11) DEFAULT '0',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `product_id` int(15) DEFAULT '1',
  `user_id` int(15) DEFAULT '1',
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `text` text,
  `public` int(11) DEFAULT '1',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `voted_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `rols`
--

INSERT INTO `rols` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Простий користувач', 'Переглядає, замовляє товар', NULL, NULL),
(2, 'Модератор', 'Переглядає, редагує', NULL, NULL),
(3, 'Адміністратор', 'Всемогутній', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `parent_id` varchar(255) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` text,
  `auth_key` text,
  `nikname` varchar(255) DEFAULT NULL,
  `avatar` text,
  `usersename` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `house` varchar(10) DEFAULT NULL,
  `created_at` int(20) DEFAULT NULL,
  `updated_at` int(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `rols_id` int(1) DEFAULT '1',
  `public` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `email`, `password_hash`, `auth_key`, `nikname`, `avatar`, `usersename`, `phone`, `sex`, `year`, `month`, `day`, `country`, `region`, `city`, `street`, `house`, `created_at`, `updated_at`, `status`, `rols_id`, `public`) VALUES
(8, 'itsaninho@gmail.com', '$2y$13$JmeUAmQyrOAP1rBowli2yuwjiCFL9g03Eoog97pCPictm4HGmkBi6', 'b_FqBwMUX6MEvq1YTWOzJ1KzJ8t7uJJp', 'itsaninho', '829ac6ce1947543feed0294e32da4543.jpg', 'iha', '+3543503453', '1', 1999, 11, 21, 'Україна', 'Рівненський', 'Рівне', 'Соборна', '231', 1506633189, 1506633189, '10', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(11) NOT NULL,
  `rank` varchar(255) DEFAULT '0',
  `public` int(11) DEFAULT '1',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `user_id` int(15) DEFAULT '1',
  `voted_id` int(15) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Індекси таблиці `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Індекси таблиці `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `whom_id` (`whom_id`);

--
-- Індекси таблиці `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Індекси таблиці `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Індекси таблиці `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `delivery_id` (`delivery_id`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Індекси таблиці `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Індекси таблиці `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `voted_id` (`voted_id`);

--
-- Індекси таблиці `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rols_id` (`rols_id`);

--
-- Індекси таблиці `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `voted_id` (`voted_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблиці `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`whom_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`seller_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `product_options`
--
ALTER TABLE `product_options`
  ADD CONSTRAINT `product_options_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `product_rating`
--
ALTER TABLE `product_rating`
  ADD CONSTRAINT `product_rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `response_ibfk_2` FOREIGN KEY (`voted_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rols_id`) REFERENCES `rols` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_rating_ibfk_2` FOREIGN KEY (`voted_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
