-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 28 2021 г., 16:03
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE `blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_chat` tinyint(1) NOT NULL DEFAULT 0,
  `button_text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `title`, `description`, `url`, `is_chat`, `button_text`, `background_image`, `image`, `page_id`, `created_at`, `updated_at`) VALUES
(2, 'SMART HOME', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.</p>', NULL, 1, NULL, '1613888888.jpg', NULL, 1, NULL, '2021-02-21 02:28:08'),
(3, 'MANAGE EVERYTHING', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus</p>', NULL, 0, NULL, '1613826858.jpg', NULL, 1, NULL, '2021-02-20 09:14:18'),
(5, 'MANUAL VIDEO', NULL, NULL, 0, NULL, 'bg-3.jpg', NULL, 1, NULL, NULL),
(8, 'SIMPLE TO USE', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis.</p>', NULL, 0, NULL, '1.jpg', NULL, 1, NULL, NULL),
(9, 'ORDER STEPS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, 0, NULL, NULL, NULL, 1, NULL, NULL),
(10, 'DESCRIPTION TITLE\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam dolore, eius, enim eum fugit id itaque minus modi officia placeat porro provident quas repellat saepe ullam unde, voluptas voluptatibus!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet, at atque cum distinctio ducimus error esse ex, harum ipsa mollitia nesciunt numquam officia soluta unde vero! Minus, natus!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ea fugiat labore repudiandae. Ad aliquid at cumque eum fuga id in iste, minima, nobis non pariatur quaerat quisquam unde. Ab alias, autem consectetur cupiditate deleniti dolorum eius eum, in ipsum iste mollitia nam nihil non placeat possimus provident quasi quia, quod quos reiciendis temporibus totam unde voluptas. Aut blanditiis ea magni recusandae sequi tenetur unde veritatis voluptas. Aperiam atque cupiditate debitis delectus id in ipsum laudantium modi nemo neque nihil possimus, quae suscipit veritatis voluptatem? Architecto delectus harum inventore maxime officiis, perferendis quam! Accusamus aspernatur, at dicta iure necessitatibus optio!', NULL, 0, NULL, 'ssss.jpg', NULL, 9, NULL, NULL),
(11, 'HOW TO REACH US', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget.</p>', 'map.', 0, NULL, '', '1614426549.jpg', 6, NULL, '2021-02-27 07:49:09'),
(12, 'CONTACT US', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.</p>', '', 0, NULL, '', NULL, 6, NULL, NULL),
(13, 'WHO WE ARE', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.</p>', '', 0, NULL, 'bg-14.jpg', NULL, 2, NULL, NULL),
(14, 'QUICK CONTACS\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.</p>', '', 0, NULL, '', NULL, 2, NULL, NULL),
(15, 'YOUR HOME IS THE BEST TO FAMILY LIFE', 'Quisque quam ligula, ultricies sed gravida non, pellentesque eu lorem. Pellentesque tristique orci sed lorem dapibus tincidunt. Donec in lorem eu sem euismod pulvinar. Phasellus porta eros diam, eget consectetur nibh vulputate in. Duis interdum, justo quis consequat volutpat, arcu neque condimentum eros.\r\n\r\n', NULL, 0, NULL, 'bg-9.jpg', 'bg-10.png', 14, NULL, NULL),
(17, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, 'bg-12.jpg', NULL, 14, NULL, NULL),
(19, 'Included Components Free', NULL, NULL, 0, NULL, NULL, NULL, 14, NULL, NULL),
(20, 'THIS COULD BE YOUR SMART HOME', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis</p>', 'http://gsm.local/security', 0, 'CREATE MY COMFORT', 'bg-13.jpg', NULL, 14, NULL, '2021-02-24 13:05:28'),
(21, 'BASIC COMPONENTS INCLUDED', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.</p>', 'http://gsm.local/shop', 0, 'EXPLORE IN THE SHIP', '', NULL, 14, NULL, '2021-02-24 13:09:40'),
(22, 'YOUR HOME IS THE BEST TO FAMILY LIFE', 'Quisque quam ligula, ultricies sed gravida non, pellentesque eu lorem. Pellentesque tristique orci sed lorem dapibus tincidunt. Donec in lorem eu sem euismod pulvinar. Phasellus porta eros diam, eget consectetur nibh vulputate in. Duis interdum, justo quis consequat volutpat, arcu neque condimentum eros.\r\n\r\n', NULL, 0, NULL, 'bg-9.jpg', 'bg-10.png', 8, NULL, NULL),
(23, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, 'bg-12.jpg', NULL, 8, NULL, NULL),
(24, 'Included Components Free', NULL, NULL, 0, NULL, NULL, NULL, 8, NULL, NULL),
(25, 'THIS COULD BE YOUR SMART HOME', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis</p>', 'http://gsm.local/security', 0, NULL, 'bg-13.jpg', NULL, 8, NULL, NULL),
(26, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, '', NULL, 8, NULL, NULL),
(27, 'YOUR HOME IS THE BEST TO FAMILY LIFE', 'Quisque quam ligula, ultricies sed gravida non, pellentesque eu lorem. Pellentesque tristique orci sed lorem dapibus tincidunt. Donec in lorem eu sem euismod pulvinar. Phasellus porta eros diam, eget consectetur nibh vulputate in. Duis interdum, justo quis consequat volutpat, arcu neque condimentum eros.\r\n\r\n', NULL, 0, NULL, 'bg-9.jpg', 'bg-10.png', 5, NULL, NULL),
(28, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, 'bg-12.jpg', NULL, 5, NULL, NULL),
(29, 'Included Components Free', NULL, NULL, 0, NULL, NULL, NULL, 5, NULL, NULL),
(30, 'THIS COULD BE YOUR SMART HOME', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis</p>', 'http://gsm.local/security', 0, NULL, 'bg-13.jpg', NULL, 5, NULL, NULL),
(31, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, '', NULL, 5, NULL, NULL),
(32, 'YOUR HOME IS THE BEST TO FAMILY LIFE', 'Quisque quam ligula, ultricies sed gravida non, pellentesque eu lorem. Pellentesque tristique orci sed lorem dapibus tincidunt. Donec in lorem eu sem euismod pulvinar. Phasellus porta eros diam, eget consectetur nibh vulputate in. Duis interdum, justo quis consequat volutpat, arcu neque condimentum eros.\r\n\r\n', NULL, 0, NULL, 'bg-9.jpg', 'bg-10.png', 15, NULL, NULL),
(33, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, 'bg-12.jpg', NULL, 15, NULL, NULL),
(34, 'Included Components Free', NULL, NULL, 0, NULL, NULL, NULL, 15, NULL, NULL),
(35, 'THIS COULD BE YOUR SMART HOME', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis</p>', 'http://gsm.local/security', 0, NULL, 'bg-13.jpg', NULL, 15, NULL, NULL),
(36, 'BASIC COMPONENTS INCLUDED', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus.', NULL, 0, NULL, '', NULL, 15, NULL, NULL),
(38, 'GETTING STARTED', 'Integer finibus feugiat erat, in tincidunt diam condimentum dignissim. Etiam accumsan eget sem vel molestie. Duis porttitor orci eu neque viverra euismod. Curabitur imperdiet non nisl sed porta. Aenean finibus libero at lorem iaculis bibendum. Duis ornare venenatis auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec quis eros nec ante mollis hendrerit. Sed eget vulputate justo. Mauris varius interdum sodales.', NULL, 0, NULL, 'bg-4.jpg', NULL, 13, NULL, NULL),
(39, 'QUICK CONTACTS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.', NULL, 0, NULL, '', NULL, 13, NULL, NULL),
(40, 'BEST OPTION FOR YOU', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.</p>', 'http://gsm.local/affrodable-option', 0, 'REQUEST A FREE BROCHURE', 'bg-5.jpg', NULL, 17, NULL, '2021-02-24 14:29:37'),
(41, 'SMART HOME UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget.', '', 0, NULL, '', 'bg-6.jpg', 17, NULL, NULL),
(42, 'QUICK CONTACTS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.', '', 0, NULL, '', '', 17, NULL, NULL),
(43, 'FUTURE PROOF SMART HOME', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget.', 'https://www.youtube.com/watch?v=dqmnoxtJm1U', 0, NULL, '567777.jpg', '', 12, NULL, NULL),
(44, 'INSTALLATION SCHEME\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget vulputate at lacus. Vivamus nulla massa, dictum quis purus a rhoncus tristique nulla.', '', 0, NULL, '', 'scheme.png', 12, NULL, NULL),
(45, 'QUICK CONTACTS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.', '', 0, NULL, '', '', 12, NULL, NULL),
(46, 'ENJOY YOUR LIVING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget..', 'https://www.youtube.com/watch?v=dqmnoxtJm1U', 0, NULL, 'bg-7.jpg', '', 16, NULL, NULL),
(47, 'QUICK CONTACTS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus.', '', 0, NULL, '', '', 16, NULL, NULL),
(48, 'Full content', '<p><strong>Genetic Smart World, inc Privacy Policy</strong></p>\r\n<p>Effective data: 2021-01-01</p>\r\n<p>Last updated: 2021-01-27</p>\r\n<p><strong>Scope</strong></p>\r\n<p>Genetic Smart World, inc., its affiliates and subsidiaries (&ldquo;we&rdquo;, &ldquo;us&rdquo;, &ldquo;our&rdquo;, &ldquo;Genetic Smart World, inc&rdquo;) recognizes that your privacy is important and we take it seriously. This Privacy Policy describes how we collect, receive, use, store, share, transfer and process your information, as well as your rights in determining what we do with the information that we collect or hold about you when you access or use (a) our websites and online properties, including&nbsp;<a href=\"http://www.GeneticSmartWorld.com\">www.GeneticSmartWorld.com</a>&nbsp;and our career portal (collectively, the &ldquo;Sites&rdquo;), (b) our Cloud-based IoT Platform, including&nbsp;<a href=\"http://www.GeneticSmartWorld.com\">www.GeneticSmartWorld.com</a>&nbsp;and any dashboards or portals that we make available to our customers, users and others (collectively, the &ldquo;IoT Platform&rdquo;) and (c) the Genetic Smart Cloud. The Sites, the IoT Platform and any services we provide in connection with one or more of the foregoing are collectively referred to as the &ldquo;Services.&rdquo;</p>\r\n<p>The Services may contain links to other websites or online services that are operated and maintained by third parties and that are not under the control of or maintained by us. This Privacy Policy does not apply to how third parties collect, use, disclose or retain information. We encourage you to review the privacy policies of these third-party websites or services.</p>\r\n<p>This Privacy Policy also covers our processing of information collected on behalf of and under the direction of our Clients through OEM branded Mobile Applications. The processing of such information is limited to the purpose of providing the service for which our Clients has engaged us and Genetic Smart World &nbsp;has no direct relationship with the individuals whose Personal Data it processes. If you are a customer of our Clients and would no longer like to be contacted by one of our Clients that use our service, please contact the Client that you interact with directly. Under limited circumstances, when you are a user of Genetic Smart &nbsp;Mobile Application, we may collect and process some of your Personal Data for our own business benefit, please refer to our&nbsp; Genetic Smart World, inc Privacy Policy&nbsp;for details .</p>\r\n<p>You are not obliged to provide to us your personal data. However, we may be unable to provide you with certain products and/or services if you decline to provide such data.</p>\r\n<p>In this Privacy Policy, &ldquo;Personal Data&rdquo; means information that can be used to identify an individual, either from that information alone, or from that information and other information we have access to about that individual.</p>\r\n<p><strong>What Personal Data do We Collect</strong></p>\r\n<ol>\r\n<li><strong> Information You Voluntarily Provide Us.</strong></li>\r\n</ol>\r\n<ul>\r\n<li>Account or Profile Data: When you register an account with us, we may collect your name and contact details, such as your name, email address, mailing address, phone number, user name, and login credentials.</li>\r\n<li>Session data: During your session of consultation or interaction with our business staff about products or services through the IM system, we will collect your session records and relevant information, which is limited to the following: customized session ID, session time, and your company name. The purpose of such collection is to analyze your concerns raised during consultation, so that we can enhance and improve our IM services and identify usage trends. However, please be reminded that we will not collect any sensitive personal information related to your identity.</li>\r\n<li>Name and Role Details: When you visit our websites, fill out our online forms, or engage with our support team, we may collect your name and role related information, such us your name, email address, and work/company information.</li>\r\n<li>Job Application Information: When you apply to work for us, we may collect your education and professional experience related information, such as school attended, course of study, academic degree obtained, grades, employment history, professional certification/licenses received.</li>\r\n</ul>\r\n<ol start=\"2\">\r\n<li><strong> Information We Collect Automatically.</strong></li>\r\n</ol>\r\n<p>When you use our Sites and Services, we may collect certain information, including Personal Data, about your use of the Sites and Services:</p>\r\n<ul>\r\n<li>Device Information: When you interact with our Sites and Services through hardware, we automatically collect device information, such as the unique device ID number of your device (&ldquo;UDID&rdquo;), the MAC address of your devices, IP address, wireless connection information, operating system type and version, browser type and version, push notification identifier, and mobile network information.</li>\r\n<li>Usage Data: During your interaction with our Sites and Services, we automatically collect usage data relating to visits, clicks, downloads, messages sent/received, and other usage of our Sites and Services.</li>\r\n<li>Location Information: We may collect information about your real-time precise or non-precise geo-location when you interact with our Sites and Services through your devices.</li>\r\n<li>Smart Device Data: &ldquo;Smart Devices&rdquo; refers to those nonstandard computing devices produced or manufactured by hardware manufacturers, with human-machine interface and the ability to transmit data that connect wirelessly to a network, including: smart home appliances, smart wearable devices, smart air cleaning devices, etc. When you use Smart Devices that are connected to our Services, depending on the capability of your Smart Devices, we may collect certain types of your data in order to provide your services you have requested or purchased, such as videos, images, health related data etc. Please refer to our&nbsp;Genetic Smart World Privacy Policy&nbsp;for details.</li>\r\n</ul>\r\n<ol start=\"3\">\r\n<li><strong> Cookies and Similar Tracking Technologies</strong></li>\r\n</ol>\r\n<p>When you visit the Sites and Services, we and service providers on our behalf may send one or more &ldquo;cookies,&rdquo; which are small data files, to your Devices to uniquely identify your browser and let us help you log in faster and enhance your navigation through the Sites. Cookies help us measure, for example, the total number of visitors to our Sites, the number of visitors to each page of our Sites, how our users use and interact with the Services, and the domain names of our visitors&rdquo; Internet service providers. You can reset your web browser to refuse all cookies or to indicate when a cookie is being sent. If you do not want cookies to be installed on your Device, there is a simple procedure in most browsers that allows you to decline the use of cookies. Please be aware that some features of the Sites and Services will not function properly if the ability of your Device to accept cookies is disabled.</p>\r\n<p>We may also use web beacons to track usage patterns of users of the Services. Additionally, we may use HTML-based emails sent to our users to track which emails are opened by recipients. The information is used to enable more accurate reporting and make the Services better for you.</p>\r\n<p>We honor do-not-track signals or similar technologies that our systems detect and identify. We do not track, plant cookies, or use advertising when such do-not-track (DNT) browser mechanism is in place on your Device.</p>\r\n<p><strong>Purpose and Legal Basis for Processing Personal Data</strong></p>\r\n<p>The purpose for which we may process information about you are as follows:</p>\r\n<ul>\r\n<li>Provide You Services. We process your account and profile data, device information, usage data, location information, and Smart Device data in order to provide Services that you have requested or purchased. The legal basis for this processing is to perform our contract with you according to our Terms of Use.</li>\r\n<li>Improve Our Services. We process your device information, usage data, location information and Smart Device data to analyze trends and to track your usage of our Sites and Services as necessary to develop and improve our websites, and provide our users with more relevant and useful content. The legal basis for this processing is to perform our contract with you according to our Terms of Use.</li>\r\n<li>Account Management: We process your Personal Data to create and manage accounts when you register with us. The legal basis for this processing is to perform our contract with you according to our Terms of Use.</li>\r\n<li>Handle Contact and Support Request: We process your Personal Data to contact you to offer help based on diagnostic information about your Smart Devices, to fulfill your requests, respond to your inquiries and to provide support. The legal basis for this processing is to perform our contract with you according to our Terms of Use.</li>\r\n<li>Marketing Communication: We process your Personal Data to inform you about services that we believe may be of interest to you. If we do so, each communication we send you will contain instructions permitting you to opt-out of receiving future communications of that nature. The legal basis for this processing is your consent.</li>\r\n<li>Non-Marketing Communication: We process your Personal Data to send you important information regarding the Services, changes to our terms, conditions, and policies and/or other administrative information. Because this information may be important, you may not opt-out of receiving such communications. The legal basis for this processing is to perform our contract with you according to our Terms of Use.</li>\r\n<li>Research. We process your Personal Data for our internal business purposes, such as data analysis, audits, developing new products or services, enhancing and improving the Services and identifying usage trends. The legal basis for this processing is to perform our contract with you according to our Terms of Use.</li>\r\n<li>Legal Compliance: We may process your Personal Data as we believe to be necessary or appropriate: (a) to comply with applicable laws and regulations; (b) to comply with legal process; (c) to respond to requests from public and government authorities (d) to enforce our terms and conditions; (e) to protect our operations, business and systems; (f) to protect our rights, privacy, safety or property, and/or that of other users, including you; and (g) to allow us to pursue available remedies or limit the damages that we may sustain.</li>\r\n</ul>\r\n<p>If there is any change in the purposes for processing your personal data, we will inform such change to you via email and/or a prominent notice on our website of such changes of purposes, and choices you may have regarding your Personal Data.</p>\r\n<p><strong>Who do We Share Personal Data with?</strong></p>\r\n<p>At Genetic Smart World , we only share Personal Data in ways that we tell you about. We do not sell your Personal Data to third parties and we limit disclosure of your Personal Data as listed below:</p>\r\n<ul>\r\n<li>To our third-party service providers who perform certain business-related functions for us, such as website hosting, data analysis, payment and credit card processing, infrastructure provision, IT services, customer support service, e-mail delivery services, and other similar services to enable them to provide services to us.</li>\r\n<li>To our customers and other business partners who provide you, directly or indirectly, with your Smart Devices, and/or networks and systems through which you access and use our Sites and Services.</li>\r\n<li>To an affiliate or other third party in the event of any reorganization, merger, sale, joint venture, assignment, transfer or other disposition of all or any portion of our business, assets or stock (including without limitation in connection with any bankruptcy or similar proceedings). In such an event, you will be notified via email and/or a prominent notice on our website of any change in ownership, incompatible new uses of your Personal Data, and choices you may have regarding your Personal Data.</li>\r\n<li>As we believe to be necessary or appropriate: (a) to comply with applicable laws and regulations; (b) to comply with legal process; (c) to respond to requests from public and government authorities, including public and government authorities outside your country of residence; (d) to enforce our terms and conditions; (e) to protect our operations, business and systems; (f) to protect our rights, privacy, safety or property, and/or that of other users, including you; and (g) to allow us to pursue available remedies or limit the damages that we may sustain.</li>\r\n<li>To subsidiaries or affiliates within our corporate family, to carry out regular business activities.</li>\r\n<li>Except for the third parties described above, to third parties only with your consent.</li>\r\n</ul>\r\n<p><strong>International Transfer of Information Collected</strong></p>\r\n<p>To facilitate our operation, we may transfer, store and process your Personal Data in jurisdictions other than where you live. Laws in these countries may differ from the laws applicable to your country of residence. When we do so, we will ensure that an adequate level of protection is provided for the information by using the following approach:</p>\r\n<ul>\r\n<li>an agreement on the basis of approved EU standard contractual clauses per GDPR Art. 46. For more information, see&nbsp;<a href=\"https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en\">here</a>.</li>\r\n</ul>\r\n<p>If you would like further detail on the safeguards we have in place, you can contact us directly as described in this Privacy Policy.</p>\r\n<p><strong>Security</strong></p>\r\n<p>We use commercially reasonable physical, administrative, and technical safeguards to preserve the integrity and security of your Personal Data. Genetic Smart World provides various security strategies to effectively ensure data security of user and device. As for device access, Genetic Smart World proprietary algorithms are employed to ensure data isolation, access authentication, applying for authorization. As for data communication, communication using security algorithms and transmission encryption protocols and commercial level information encryption transmission based on dynamic keys are supported. As for data processing, strict data filtering and validation and complete data audit are applied. As for data storage, all confidential information of users will be safely encrypted for storage. If you have reason to believe that your interaction with us is no longer secure (for example, if you feel that the security of any account you might have with us has been compromised), you could immediately notify us of the problem by emailing&nbsp;<a href=\"mailto:info@geneticsmartworld.com\">info@geneticsmartworld.com</a> &nbsp;in accordance with the section below.</p>\r\n<p><strong>Data Subject Rights</strong></p>\r\n<p>We respect your rights and control over your Personal Data. You may exercise any of the following rights by:</p>\r\n<ul>\r\n<li>Creating a ticket in the Support Center, by searching key words, or;</li>\r\n<li>Emailing us at&nbsp;info@geneticsmartworld.com</li>\r\n</ul>\r\n<p>You do not have to pay a fee for executing your personal rights. According to different data protection laws, your request of personal rights will be handled within 15 business days, or within 30 calendar days due to different response requirement.</p>\r\n<p>In your request, please make clear what information you would like to have changed, whether you would like to have your Personal Data deleted from our database or otherwise let us know what limitations you would like to put on our use of your Personal Data. Please note that we may ask you to verify your identity before taking further action on your request, for security purposes.</p>\r\n<p>You may:</p>\r\n<ul>\r\n<li>Request access to the Personal Data that we process about you;</li>\r\n<li>Request that we correct inaccurate or incomplete Personal Data about you;</li>\r\n<li>Request deletion of Personal Data about you;</li>\r\n<li>Request restrictions, temporarily or permanently, on our processing of some or all Personal Data about you;</li>\r\n<li>Request transfer of Personal Data to you or a third party where we process the data based on your consent or a contract with you, and where our processing is automated;</li>\r\n<li>Opt-out or object to our use of Personal Data about you where our use is based on your consent or our legitimate interests.</li>\r\n</ul>\r\n<p>You may opt-out from receiving marketing-related emails or other communications from us on a going-forward basis by emailing&nbsp;<a href=\"mailto:info@geneticsmartworld.com\">info@geneticsmartworld.com</a>. We will comply with your opt-out request as soon as reasonably practicable. Please also note that if you do opt-out of receiving marketing-related messages from us, we may still send you important administrative messages, and you cannot opt-out from receiving administrative messages. We partner with a third party to display advertising on our website or to manage our advertising on other sites. Our third-party partner may use cookies or similar technologies in order to provide you advertising based upon your browsing activities and interests. If you wish to opt out of interest-based advertising click&nbsp;<a href=\"https://preferences-mgr.truste.com/\">here</a>&nbsp;or if located in the European Union click&nbsp;<a href=\"http://www.youronlinechoices.eu/\">here</a>. Please note you will continue to receive generic ads.</p>\r\n<p><strong>Your California Privacy Rights</strong></p>\r\n<p>California Civil Code Section 1798.83 permits users of the Software that are California residents to request certain information regarding our disclosure of Personal Data to third parties for their direct marketing purposes. To make such a request, please contact us in accordance with the &ldquo;<a href=\"mailto:info@geneticsmartworld.com\">info@geneticsmartworld.com</a>&rdquo; section below. We do not disclose Personal Data to third parties for their direct marketing purposes without your consent.</p>\r\n<p><strong>Data Retention</strong></p>\r\n<p>We process your Personal Data for the minimum period necessary for the purposes set out in this Privacy Policy, unless there is a specific legal requirement for us to keep the data for a longer retention period. We determine the appropriate retention period based on the amount, nature, and sensitivity of your Personal Data, and after the retention period ends, we will destruct your Personal Data. When we are unable to do so for technical reasons, we will ensure that appropriate measures are put in place to prevent any further such use of your Personal Data.</p>\r\n<p><strong>Children&rsquo;s Privacy</strong></p>\r\n<p>Protecting the privacy of young children is especially important to us. The Services are not directed to individuals under the age of thirteen (13), and we request that these individuals do not provide any Personal Data to us. We do not knowingly collect Personal Data from anyone under the age of thirteen (13) unless we first obtain permission from that child&rsquo;s parent or legal guardian. If we become aware that we have collected Personal Data from anyone under the age of thirteen (13) without permission from that child&rsquo;s parent or legal guardian, we will take steps to remove that information.</p>\r\n<p><strong>Changes to this Privacy Policy</strong></p>\r\n<p>We may update this Privacy Policy to reflect changes to our information practices. If we make any material changes we will notify you by email (send to the e-mail address specified in your account) or by means of a notice on this website prior to the change becoming effective. We encourage you to periodically review this page for the latest information on our privacy practices.</p>\r\n<p><strong>Dispute Resolution</strong></p>\r\n<p>If you have an unresolved privacy or data use concern that we have not addressed satisfactorily, please contact our U.S.-based third-party dispute resolution provider (free of charge) at&nbsp;<a href=\"https://feedback-form.truste.com/watchdog/request\">https://feedback-form.truste.com/watchdog/request.</a></p>\r\n<p><strong>Contact Us</strong></p>\r\n<p>If you have any questions about our practices or this Privacy Policy, please contact us as follows:</p>\r\n<p>Genetic Smart World, INC.</p>\r\n<p>Postal Mailing Address: 20600 Ventura Blvd unit 2228 woodland hills Ca 91364</p>\r\n<p>Email:&nbsp;info@geneticsmartworld.com</p>\r\n<p>1.Legal and Privacy Statement;</p>\r\n<p>2.Genetic Smart World Privacy Policy 20212302.</p>\r\n<p>&nbsp;</p>', NULL, 0, NULL, '', NULL, 18, NULL, '2021-02-27 08:36:09');

-- --------------------------------------------------------

--
-- Структура таблицы `block_components`
--

CREATE TABLE `block_components` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `block_components`
--

INSERT INTO `block_components` (`id`, `title`, `description`, `url`, `button_text`, `image`, `icon`, `block_id`, `created_at`, `updated_at`) VALUES
(2, 'Auto Control', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commo</p>', NULL, NULL, 'qqq.jpg', NULL, 3, NULL, '2021-02-20 09:02:56'),
(3, 'Motion Sensor', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commo</p>', NULL, NULL, 'www.jpg', NULL, 3, NULL, '2021-02-20 09:02:56'),
(4, 'Heating Plan', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commo</p>', NULL, NULL, 'aaa.jpg', NULL, 3, NULL, '2021-02-20 09:02:56'),
(5, 'Outdoor CCTV', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commo</p>', NULL, NULL, 'ccc.jpg', NULL, 3, NULL, '2021-02-20 09:02:56'),
(6, 'Temperature Controller', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commo</p>', NULL, NULL, '1613826266.jpg', NULL, 3, NULL, '2021-02-20 09:04:26'),
(7, 'Tracking', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commo</p>', NULL, NULL, 'zzz.jpg', NULL, 3, NULL, '2021-02-20 09:02:56'),
(8, 'MOVEMENT', '<p>Ligula mus mi, vitae pharetra urna. Nunc consectetuer fermentum proin pede metus faucibus magna eget.</p>', 'http://gsm.local/manual', 'EXPLORE', '666.jpg', NULL, 5, NULL, '2021-02-21 02:56:51'),
(9, 'TEMPERATURE', '<p>Ligula mus mi, vitae pharetra urna. Nunc consectetuer fermentum proin pede metus faucibus magna eget.</p>', 'http://gsm.local/manual', 'EXPLORE', '3333.jpg', NULL, 5, NULL, '2021-02-21 02:56:51'),
(10, 'DOOR CONTACTS', '<p>Ligula mus mi, vitae pharetra urna. Nunc consectetuer fermentum proin pede metus faucibus magna eget.</p>', 'http://gsm.local/manual', 'EXPLORE', '5555.jpg', NULL, 5, NULL, '2021-02-21 02:56:51'),
(11, '', '', '', NULL, 'mmm.jpg', NULL, 10, NULL, NULL),
(12, '', '', '', NULL, 'asdsa.jpg', NULL, 10, NULL, NULL),
(13, '', '', '', NULL, 'wweee.jpg', NULL, 10, NULL, NULL),
(14, 'Address', NULL, NULL, NULL, '', NULL, 11, NULL, '2021-02-27 07:45:36'),
(15, 'Contact Details', NULL, NULL, NULL, '', NULL, 11, NULL, '2021-02-27 07:45:36'),
(16, 'Contemporary Living Model For Everyone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non interdum eros. Cras scelerisque tincidunt nisi, nec commodo sem vulputate.', '', NULL, '', NULL, 13, NULL, NULL),
(17, 'Thousands Of Ingenious Projects Worldwide\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non interdum eros. Cras scelerisque tincidunt nisi, nec commodo sem vulputate.', '', NULL, '', NULL, 13, NULL, NULL),
(18, 'Building Services & Consumer Electronics\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non interdum eros. Cras scelerisque tincidunt nisi, nec commodo sem vulputate.', '', NULL, '', NULL, 13, NULL, NULL),
(19, 'CUSTOMER CARE\r\n', NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL),
(20, 'ACTIVATE A SYSTEM', NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL),
(21, 'EQUIPMENT MANUALS', NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL),
(22, 'System As Alarm Siren', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 15, NULL, NULL),
(23, 'Protection Against', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 15, NULL, NULL),
(24, 'Presence Simulation', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 15, NULL, NULL),
(25, 'Immediately Informed', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 15, NULL, NULL),
(26, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 17, NULL, NULL),
(27, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 17, NULL, NULL),
(28, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 17, NULL, NULL),
(29, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 17, NULL, NULL),
(30, 'APPS & WEB INTERFACE', '', NULL, NULL, '', NULL, 19, NULL, NULL),
(31, 'FREE UPDATES', '', NULL, NULL, '', NULL, 19, NULL, NULL),
(32, 'FREE SUPPORT', '', NULL, NULL, '', NULL, 19, NULL, NULL),
(33, 'CONFIGURATIONS', '', NULL, NULL, '', NULL, 19, NULL, NULL),
(34, 'Miniserver Go', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.</p>', NULL, NULL, '1.png', NULL, 21, NULL, '2021-02-24 13:09:40'),
(35, 'Miniserver Az', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.</p>', NULL, NULL, '2.png', NULL, 21, NULL, '2021-02-24 13:09:40'),
(36, 'Miniserver Xw', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.</p>', NULL, NULL, '3.png', NULL, 21, NULL, '2021-02-24 13:09:40'),
(37, 'Miniserver Py', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.</p>', NULL, NULL, '4.png', NULL, 21, NULL, '2021-02-24 13:09:40'),
(38, 'System As Alarm Siren', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 22, NULL, NULL),
(39, 'Protection Against', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 22, NULL, NULL),
(40, 'Presence Simulation', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 22, NULL, NULL),
(41, 'Immediately Informed', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 22, NULL, NULL),
(42, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 23, NULL, NULL),
(43, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 23, NULL, NULL),
(44, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 23, NULL, NULL),
(45, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 23, NULL, NULL),
(46, 'APPS & WEB INTERFACE', '', NULL, NULL, '', NULL, 24, NULL, NULL),
(47, 'FREE UPDATES', '', NULL, NULL, '', NULL, 24, NULL, NULL),
(48, 'FREE SUPPORT', '', NULL, NULL, '', NULL, 24, NULL, NULL),
(49, 'CONFIGURATIONS', '', NULL, NULL, '', NULL, 24, NULL, NULL),
(50, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 26, NULL, NULL),
(51, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 26, NULL, NULL),
(52, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 26, NULL, NULL),
(53, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 26, NULL, NULL),
(54, 'System As Alarm Siren', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 27, NULL, NULL),
(55, 'Protection Against', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 27, NULL, NULL),
(56, 'Presence Simulation', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 27, NULL, NULL),
(57, 'Immediately Informed', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 27, NULL, NULL),
(58, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 28, NULL, NULL),
(59, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 28, NULL, NULL),
(60, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 28, NULL, NULL),
(61, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 28, NULL, NULL),
(62, 'APPS & WEB INTERFACE', '', NULL, NULL, '', NULL, 29, NULL, NULL),
(63, 'FREE UPDATES', '', NULL, NULL, '', NULL, 29, NULL, NULL),
(64, 'FREE SUPPORT', '', NULL, NULL, '', NULL, 29, NULL, NULL),
(65, 'CONFIGURATIONS', '', NULL, NULL, '', NULL, 29, NULL, NULL),
(66, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 31, NULL, NULL),
(67, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 31, NULL, NULL),
(68, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 31, NULL, NULL),
(69, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 31, NULL, NULL),
(70, 'System As Alarm Siren', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 32, NULL, NULL),
(71, 'Protection Against', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 32, NULL, NULL),
(72, 'Presence Simulation', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 32, NULL, NULL),
(73, 'Immediately Informed', 'Lorem ipsum dolor sit amet nulla, consectetur adipiscing elit.\r\n\r\n', NULL, NULL, NULL, NULL, 32, NULL, NULL),
(74, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 33, NULL, NULL),
(75, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 33, NULL, NULL),
(76, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 33, NULL, NULL),
(77, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 33, NULL, NULL),
(78, 'APPS & WEB INTERFACE', '', NULL, NULL, '', NULL, 34, NULL, NULL),
(79, 'FREE UPDATES', '', NULL, NULL, '', NULL, 34, NULL, NULL),
(80, 'FREE SUPPORT', '', NULL, NULL, '', NULL, 34, NULL, NULL),
(81, 'CONFIGURATIONS', '', NULL, NULL, '', NULL, 34, NULL, NULL),
(82, 'Miniserver Go', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '1.png', NULL, 36, NULL, NULL),
(83, 'Miniserver Az', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '2.png', NULL, 36, NULL, NULL),
(84, 'Miniserver Xw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '3.png', NULL, 36, NULL, NULL),
(85, 'Miniserver Py', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit integer.\r\n', NULL, NULL, '4.png', NULL, 36, NULL, NULL),
(86, 'Planning', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, NULL, NULL, NULL, 38, NULL, NULL),
(87, 'Installation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, NULL, NULL, NULL, 38, NULL, NULL),
(88, 'Testing Setups', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, NULL, NULL, NULL, 38, NULL, NULL),
(89, 'Configuration', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, NULL, NULL, NULL, 38, NULL, NULL),
(90, 'Get Projec', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, NULL, NULL, NULL, 38, NULL, NULL),
(91, 'Safe & Enjoy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.', NULL, NULL, NULL, NULL, 38, NULL, NULL),
(92, 'CUSTOMER CARE\r\n', '<ul class=\"contact-section--info\">\r\n                                <li class=\"color-primary\">\r\n                                    Call Us Toll-Free\r\n                                </li>\r\n                                <li>\r\n                                    <a href=\"tel:800-800-9595\">800-800-9595</a>\r\n                                </li>\r\n                                <li class=\"color-primary\">\r\n                                    Call Us Toll-Free\r\n                                </li>\r\n                                <li>\r\n                                    <a href=\"mailto:customer.care@mail.com\">customer.care@mail.com</a>\r\n                                </li>\r\n                            </ul>', NULL, NULL, NULL, NULL, 39, NULL, NULL),
(93, 'ACTIVATE A SYSTEM', '<ul class=\"contact-section--info\">\r\n                                <li class=\"color-primary\">\r\n                                    Call Us Toll-Free\r\n                                </li>\r\n                                <li>\r\n                                    <a href=\"tel:800-800-9595\">800-800-9595</a>\r\n                                </li>\r\n                                <li class=\"color-primary\">\r\n                                    Call Us Toll-Free\r\n                                </li>\r\n                                <li>\r\n                                    <a href=\"mailto:customer.care@mail.com\">customer.care@mail.com</a>\r\n                                </li>\r\n                            </ul>', NULL, NULL, NULL, NULL, 39, NULL, NULL),
(94, 'EQUIPMENT MANUALS\r\n', '<ul class=\"contact-section--info\">\r\n                                <li class=\"color-primary\">\r\n                                    Call Us Toll-Free\r\n                                </li>\r\n                                <li>\r\n                                    <a href=\"tel:800-800-9595\">800-800-9595</a>\r\n                                </li>\r\n                                <li class=\"color-primary\">\r\n                                    Call Us Toll-Free\r\n                                </li>\r\n                                <li>\r\n                                    <a href=\"mailto:customer.care@mail.com\">customer.care@mail.com</a>\r\n                                </li>\r\n                            </ul>', NULL, NULL, NULL, NULL, 39, NULL, NULL),
(95, 'Integer semper erat vitae', NULL, NULL, NULL, NULL, NULL, 40, NULL, '2021-02-24 14:29:37'),
(96, 'Aenean lorem elementum', NULL, NULL, NULL, NULL, NULL, 40, NULL, '2021-02-24 14:29:37'),
(97, 'Suspendisse mattis felis', NULL, NULL, NULL, NULL, NULL, 40, NULL, '2021-02-24 14:29:37'),
(98, 'Integer semper erat vitae', NULL, NULL, NULL, NULL, NULL, 40, NULL, '2021-02-24 14:29:37'),
(99, 'Aenean lorem elementum', NULL, NULL, NULL, NULL, NULL, 40, NULL, '2021-02-24 14:29:37'),
(100, 'Suspendisse mattis felis', NULL, NULL, NULL, NULL, NULL, 40, NULL, '2021-02-24 14:29:37'),
(101, 'THE LEADING AUTHORITY IN CCTV\r\n', 'Cras scelerisque tincidunt nisi, nec commodo', NULL, NULL, NULL, NULL, 41, NULL, NULL),
(102, 'NEXT GENERATION MONITORING', 'Nunc non ante quis justo pretium finibus sed quis', NULL, NULL, NULL, NULL, 41, NULL, NULL),
(103, 'BOTH LIVE AND RECORDED VIDEO', 'Vestibulum fermentum faucibus ligula dapibus', NULL, NULL, NULL, NULL, 41, NULL, NULL),
(104, 'CUSTOMER CARE\r\n', '', NULL, NULL, NULL, NULL, 42, NULL, NULL),
(105, 'ACTIVATE A SYSTEM\r\n\r\n', '', NULL, NULL, NULL, NULL, 42, NULL, NULL),
(106, 'EQUIPMENT MANUALS\r\n', '', NULL, NULL, NULL, NULL, 42, NULL, NULL),
(107, 'THE LEADING AUTHORITY IN CCTV\r\n', 'Cras scelerisque tincidunt nisi, nec commodo\r\n\r\n', NULL, NULL, NULL, NULL, 43, NULL, NULL),
(108, 'NEXT GENERATION MONITORING\r\n', 'Nunc non ante quis justo pretium finibus sed quis\r\n\r\n', NULL, NULL, NULL, NULL, 43, NULL, NULL),
(109, 'BOTH LIVE AND RECORDED VIDEO\r\n', 'Vestibulum fermentum faucibus ligula dapibus\r\n\r\n\r\n\r\n', NULL, NULL, NULL, NULL, 43, NULL, NULL),
(110, 'CUSTOMER CARE\r\n', '', NULL, NULL, NULL, NULL, 45, NULL, NULL),
(111, 'ACTIVATE A SYSTEM\r\n\r\n', '', NULL, NULL, NULL, NULL, 45, NULL, NULL),
(112, 'EQUIPMENT MANUALS\r\n', '', NULL, NULL, NULL, NULL, 45, NULL, NULL),
(113, 'CUSTOMER CARE\r\n\r\n', '', NULL, NULL, NULL, NULL, 47, NULL, NULL),
(114, 'ACTIVATE A SYSTEM\r\n\r\n', '', NULL, NULL, NULL, NULL, 47, NULL, NULL),
(115, 'EQUIPMENT MANUALS\r\n\r\n', '', NULL, NULL, NULL, NULL, 47, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'erewrwer', '2021-02-17 12:53:57', '2021-02-17 12:53:57'),
(2, 'test', '2021-02-28 05:20:38', '2021-02-28 05:20:38'),
(3, 'test1', '2021-02-28 05:20:49', '2021-02-28 05:20:49');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, '1613893342.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:42:22', '2021-02-21 03:42:22'),
(2, '1613893411.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:31', '2021-02-21 03:43:31'),
(3, '1613893419.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:39', '2021-02-21 03:43:39'),
(4, '1613893424.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:44', '2021-02-21 03:43:44'),
(5, '1613893342.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:42:22', '2021-02-21 03:42:22'),
(6, '1613893411.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:31', '2021-02-21 03:43:31'),
(7, '1613893419.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:39', '2021-02-21 03:43:39'),
(8, '1613893424.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:44', '2021-02-21 03:43:44'),
(9, '1613893342.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:42:22', '2021-02-21 03:42:22'),
(10, '1613893411.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:31', '2021-02-21 03:43:31'),
(11, '1613893419.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:39', '2021-02-21 03:43:39'),
(12, '1613893424.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:44', '2021-02-21 03:43:44'),
(13, '1613893342.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:42:22', '2021-02-21 03:42:22'),
(14, '1613893411.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:31', '2021-02-21 03:43:31'),
(15, '1613893419.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:39', '2021-02-21 03:43:39'),
(16, '1613893424.png', 'https://translate.google.com/?hl=ru', '2021-02-21 03:43:44', '2021-02-21 03:43:44');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'Aram', 'admin@gmail.com', NULL, 'sdfs sdfsdfsdf', 0, '2021-02-27 09:38:35', '2021-02-27 09:38:35'),
(2, 'Aram', 'admin@gmail.com', NULL, 'sdfs sdfsdfsdf', 0, '2021-02-27 09:40:51', '2021-02-27 09:40:51'),
(3, 'Aram', 'admin@gmail.com', NULL, 'sdfs sdfsdfsdf', 0, '2021-02-27 09:42:21', '2021-02-27 09:42:21'),
(4, 'Aram', 'admin@gmail.com', NULL, 'sdfs sdfsdfsdf', 0, '2021-02-27 09:43:07', '2021-02-27 09:43:07');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `imageable_type`, `imageable_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'App\\Slider', 2, 'sldier3.jpg', NULL, NULL),
(5, 'App\\Slider', 2, 'sldier1.jpg', NULL, NULL),
(6, 'App\\Slider', 2, 'sldier2.jpg', NULL, NULL),
(7, 'App\\Slider', 3, 'sldier3.jpg', NULL, NULL),
(8, 'App\\Slider', 3, 'sldier1.jpg', NULL, NULL),
(9, 'App\\Slider', 3, 'sldier2.jpg', NULL, NULL),
(11, 'App\\Slider', 4, 'sldier2.jpg', NULL, NULL),
(12, 'App\\Slider', 4, 'sldier1.jpg', NULL, NULL),
(13, 'App\\Slider', 4, 'sldier3.jpg', NULL, NULL),
(14, 'App\\Slider', 5, 'sldier3.jpg', NULL, NULL),
(15, 'App\\Slider', 5, 'sldier1.jpg', NULL, NULL),
(16, 'App\\Slider', 5, 'sldier2.jpg', NULL, NULL),
(17, 'App\\Slider', 6, 'sldier2.jpg', NULL, NULL),
(18, 'App\\Slider', 6, 'sldier1.jpg', NULL, NULL),
(19, 'App\\Slider', 6, 'sldier3.jpg', NULL, NULL),
(20, 'App\\Slider', 7, 'sldier3.jpg', NULL, NULL),
(21, 'App\\Slider', 7, 'sldier1.jpg', NULL, NULL),
(22, 'App\\Slider', 7, 'sldier2.jpg', NULL, NULL),
(23, 'App\\Slider', 8, 'sldier3.jpg', NULL, NULL),
(24, 'App\\Slider', 8, 'sldier1.jpg', NULL, NULL),
(25, 'App\\Slider', 8, 'sldier2.jpg', NULL, NULL),
(26, 'App\\Slider', 9, 'sldier3.jpg', NULL, NULL),
(27, 'App\\Slider', 9, 'sldier1.jpg', NULL, NULL),
(28, 'App\\Slider', 9, 'sldier2.jpg', NULL, NULL),
(29, 'App\\Slider', 10, 'sldier3.jpg', NULL, NULL),
(30, 'App\\Slider', 10, 'sldier1.jpg', NULL, NULL),
(31, 'App\\Slider', 10, 'sldier2.jpg', NULL, NULL),
(32, 'App\\Slider', 11, 'sldier2.jpg', NULL, NULL),
(33, 'App\\Slider', 11, 'sldier1.jpg', NULL, NULL),
(34, 'App\\Slider', 11, 'sldier3.jpg', NULL, NULL),
(35, 'App\\Slider', 12, 'sldier3.jpg', NULL, NULL),
(36, 'App\\Slider', 12, 'sldier1.jpg', NULL, NULL),
(37, 'App\\Slider', 12, 'sldier2.jpg', NULL, NULL),
(38, 'App\\Slider', 13, 'sldier3.jpg', NULL, NULL),
(39, 'App\\Slider', 13, 'sldier1.jpg', NULL, NULL),
(40, 'App\\Slider', 13, 'sldier2.jpg', NULL, NULL),
(41, 'App\\Slider', 14, 'sldier3.jpg', NULL, NULL),
(42, 'App\\Slider', 14, 'sldier1.jpg', NULL, NULL),
(43, 'App\\Slider', 14, 'sldier2.jpg', NULL, NULL),
(44, 'App\\Slider', 16, 'sldier3.jpg', NULL, NULL),
(45, 'App\\Slider', 16, 'sldier1.jpg', NULL, NULL),
(46, 'App\\Slider', 16, 'sldier2.jpg', NULL, NULL),
(50, 'App\\Slider', 1, '1613835325.sldier1.jpg', '2021-02-20 11:35:25', '2021-02-20 11:35:25'),
(51, 'App\\Slider', 1, '1613835325.sldier2.jpg', '2021-02-20 11:35:25', '2021-02-20 11:35:25'),
(52, 'App\\Slider', 1, '1613835325.sldier3.jpg', '2021-02-20 11:35:25', '2021-02-20 11:35:25'),
(53, 'App\\Slider', 17, '1613835771.sldier1.jpg', '2021-02-20 11:42:51', '2021-02-20 11:42:51'),
(54, 'App\\Slider', 17, '1613835771.sldier2.jpg', '2021-02-20 11:42:51', '2021-02-20 11:42:51'),
(55, 'App\\Slider', 17, '1613835771.sldier3.jpg', '2021-02-20 11:42:51', '2021-02-20 11:42:51');

-- --------------------------------------------------------

--
-- Структура таблицы `informations`
--

CREATE TABLE `informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `meta_fileds`
--

CREATE TABLE `meta_fileds` (
  `id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `owner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `meta_fileds`
--

INSERT INTO `meta_fileds` (`id`, `owner_id`, `owner_type`, `title`, `keywords`, `description`, `m_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Page', 'home', 'home meta settings', 'home meta settings', 'img0.19062300 1614513994.jpg', '2021-02-28 08:05:34', '2021-02-28 08:06:34'),
(2, 1, 'App\\Product', 'asadasdasd', 'asadasdasd  asadasdasd asadasdasd', 'asadasdasd  asadasdasd asadasdasd', 'img0.93101100 1614514503.jpg', '2021-02-28 08:15:03', '2021-02-28 08:15:03');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2021_01_25_165311_create_categories_table', 1),
(20, '2021_01_25_165405_create_products_table', 1),
(21, '2021_01_25_165548_create_services_table', 1),
(22, '2021_02_01_171618_create_pages_table', 1),
(23, '2021_02_01_171838_create_blocks_table', 1),
(24, '2021_02_01_171903_create_block_components_table', 1),
(25, '2021_02_14_080354_create_video_categories_table', 2),
(26, '2021_02_14_080525_create_videos_table', 2),
(27, '2021_02_20_070622_create_sliders_table', 3),
(28, '2021_02_20_070711_create_cliets_table', 3),
(29, '2021_02_20_070723_create_images_table', 3),
(30, '2021_02_20_072802_create_socials_table', 3),
(31, '2021_02_20_072842_create_informations_table', 3),
(34, '2021_02_22_172852_create_orders_table', 4),
(35, '2021_02_22_173759_create_order_products_table', 4),
(36, '2021_02_27_085608_create_social_contacts_table', 5),
(37, '2021_02_27_085843_create_contacts_table', 5),
(38, '2021_02_28_113824_create_meta_fileds_table', 6),
(39, '2021_02_28_135942_create_social_networks_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `type` int(10) NOT NULL DEFAULT 1,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `uid`, `status`, `type`, `first_name`, `price`, `last_name`, `company`, `address_1`, `address_2`, `city`, `postcode`, `phone`, `email`, `notes`, `created_at`, `updated_at`) VALUES
(44, 'fa392fc4eedf2d659aeda6ecea02d1a0', '1', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '123456789', 'admin@gmail.com', NULL, '2021-02-27 03:09:08', '2021-02-27 03:09:08'),
(45, '8f9440869a05b416bc25dc3779751347', '1', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 03:32:12', '2021-02-27 03:32:12'),
(46, 'd305bf3c689b051bea8b633b587fb043', '1', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 03:32:44', '2021-02-27 03:32:44'),
(47, '4efaef045e369e00d9c4656252b31913', '1', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 03:33:22', '2021-02-27 03:33:22'),
(48, '54ad134e0f0afef1ac735e48a8709c63', '2', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 03:33:40', '2021-02-27 04:46:45'),
(49, '47cb5f45e60af43b54273b4eda17519b', '1', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 03:35:02', '2021-02-27 03:35:02'),
(50, 'fe6b70af27e8b6f2f75e4a95931fb241', '3', 1, 'asdasd', '54000.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 03:43:10', '2021-02-27 03:43:15'),
(51, '0d2b488ca9ffa2d9204706f9d8662af4', '1', 1, 'asdasd', '79500.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 05:55:24', '2021-02-27 05:55:24'),
(52, '3eecb1aed14a83863e2ec908bd52784b', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 05:57:49', '2021-02-27 05:57:49'),
(53, '1082c58cbe827f81cc69cf6e2ccfbffc', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 05:58:10', '2021-02-27 05:58:10'),
(54, '730dd67a2801126733905fae2acc9aed', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 05:58:29', '2021-02-27 05:58:29'),
(55, 'b872bc022685edd97313a597ef67450f', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:01:45', '2021-02-27 06:01:45'),
(56, '16a57c0e539fdb5a50b9c85c0f506893', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:02:34', '2021-02-27 06:02:34'),
(57, 'b74d96b6a435c00132b90c8301af3af7', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:15:58', '2021-02-27 06:15:58'),
(58, 'faef708afd9b3f507055be44bb0a0b49', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:16:16', '2021-02-27 06:16:16'),
(59, '58ff72cb6031c80ecb8290c30ac04cda', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:16:39', '2021-02-27 06:16:39'),
(60, '04f468ce7bc4f7d8c1382bac3597f6b1', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:19:18', '2021-02-27 06:19:18'),
(61, '87dd617d34a5f81ddf408241b28eee18', '2', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:21:05', '2021-02-27 06:21:06'),
(62, '8d85a26cc9a83888775e065d155d420f', '2', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:23:02', '2021-02-27 06:23:04'),
(63, 'b1938b56ff16eba0597740ff4729c501', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:27:19', '2021-02-27 06:27:19'),
(64, '6b627a81be0cb3f1fcd5182b458c9e39', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:50:06', '2021-02-27 06:50:06'),
(65, 'a69bc7b52a314a4f05d96ec56c23dfab', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:50:18', '2021-02-27 06:50:18'),
(66, 'ddab2fe64b243cf6c152f7926f93337a', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:50:30', '2021-02-27 06:50:30'),
(67, '57ccece52d3ab136ffb160c7d6b5f80d', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:50:43', '2021-02-27 06:50:43'),
(68, '9bc5c51d2237debb5e68844b5ac111b5', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:51:26', '2021-02-27 06:51:26'),
(69, 'ee5ba4b074030270d9f9bf69a9ccedd0', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:51:54', '2021-02-27 06:51:54'),
(70, '5c96e9c7b1ddaa46b97c3a6e5cb7c812', '1', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 06:52:44', '2021-02-27 06:52:44'),
(71, '6f413f98a1ca70b3e60fdd617fb3778a', '3', 1, 'asdasd', '270.00', 'qweqwe', 'asdasd', 'eqw eqweqv qweqwe', 'dsf sdfsdfsdf', 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:21:07', '2021-02-27 07:21:16'),
(72, '8890e9df5b0d73cca831a1d8fb7f0f97', '1', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:25:11', '2021-02-27 07:25:11'),
(73, '85d20d6d482ec8a4517dff7cbdd5c07a', '1', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:26:25', '2021-02-27 07:26:25'),
(74, '5da818321418043310169a5f81044660', '3', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:27:33', '2021-02-27 07:27:41'),
(75, 'ac626435c06eeb1d92512525506ef424', '1', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:30:09', '2021-02-27 07:30:09'),
(76, '4fca2357bad6e14ce813b1068c3211a5', '1', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:35:39', '2021-02-27 07:35:39'),
(77, '03ba1a6d72693155ced091f3aab173b5', '1', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:35:43', '2021-02-27 07:35:43'),
(78, 'd254c060e59c02985d17e7ef7f1c7a60', '1', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:36:20', '2021-02-27 07:36:20'),
(79, '8ea76a8c4fb4b0f094b83e39c335012a', '2', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:37:35', '2021-02-27 07:37:37'),
(80, '3618a006067a759221becfe29a72c631', '2', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:38:27', '2021-02-27 07:38:29'),
(81, 'a8d80a8ccf5c829ac2671b1c128bdfe3', '3', 1, 'asdasd', '270.00', 'qweqwe', NULL, 'eqw eqweqv qweqwe', NULL, 'asdasd asdasd', '1234', '234234 234234', 'admin@gmail.com', NULL, '2021-02-27 07:42:30', '2021-02-27 07:42:37');

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qyt` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qyt`, `created_at`, `updated_at`) VALUES
(82, 44, 1, 1, NULL, NULL),
(83, 44, 3, 1, NULL, NULL),
(84, 45, 1, 1, NULL, NULL),
(85, 45, 3, 1, NULL, NULL),
(86, 46, 1, 1, NULL, NULL),
(87, 46, 3, 1, NULL, NULL),
(88, 47, 1, 1, NULL, NULL),
(89, 47, 3, 1, NULL, NULL),
(90, 48, 1, 1, NULL, NULL),
(91, 48, 3, 1, NULL, NULL),
(92, 49, 1, 1, NULL, NULL),
(93, 49, 3, 1, NULL, NULL),
(94, 50, 1, 1, NULL, NULL),
(95, 50, 3, 1, NULL, NULL),
(96, 51, 3, 3, NULL, NULL),
(97, 52, 3, 2, NULL, NULL),
(98, 53, 3, 2, NULL, NULL),
(99, 54, 3, 2, NULL, NULL),
(100, 55, 3, 2, NULL, NULL),
(101, 56, 3, 2, NULL, NULL),
(102, 57, 3, 2, NULL, NULL),
(103, 58, 3, 2, NULL, NULL),
(104, 59, 3, 2, NULL, NULL),
(105, 60, 3, 2, NULL, NULL),
(106, 61, 3, 2, NULL, NULL),
(107, 62, 3, 2, NULL, NULL),
(108, 63, 3, 2, NULL, NULL),
(109, 64, 3, 2, NULL, NULL),
(110, 65, 3, 2, NULL, NULL),
(111, 66, 3, 2, NULL, NULL),
(112, 67, 3, 2, NULL, NULL),
(113, 68, 3, 2, NULL, NULL),
(114, 69, 3, 2, NULL, NULL),
(115, 70, 3, 2, NULL, NULL),
(116, 71, 3, 2, NULL, NULL),
(117, 72, 3, 2, NULL, NULL),
(118, 73, 3, 2, NULL, NULL),
(119, 74, 3, 2, NULL, NULL),
(120, 75, 3, 2, NULL, NULL),
(121, 76, 3, 2, NULL, NULL),
(122, 77, 3, 2, NULL, NULL),
(123, 78, 3, 2, NULL, NULL),
(124, 79, 3, 2, NULL, NULL),
(125, 80, 3, 2, NULL, NULL),
(126, 81, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL),
(2, 'about', NULL, NULL),
(3, 'cart', NULL, NULL),
(4, 'checkout', NULL, NULL),
(5, 'comfort', NULL, NULL),
(6, 'contact', NULL, NULL),
(7, 'manual', NULL, NULL),
(8, 'security', NULL, NULL),
(9, 'services', NULL, NULL),
(10, 'shop', NULL, NULL),
(11, 'product', NULL, NULL),
(12, 'smart-installation', NULL, NULL),
(13, 'getting-started', NULL, NULL),
(14, 'for-family', NULL, NULL),
(15, 'energy-saver', NULL, NULL),
(16, 'enjoy-your-living', NULL, NULL),
(17, 'affrodable-option', NULL, NULL),
(18, 'privacy', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `smail_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `top` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `url`, `tax`, `category_id`, `smail_description`, `description`, `top`, `price`, `image`, `gif`, `created_at`, `updated_at`) VALUES
(1, 'asadasdasd', 'asadasdasd', '11.00', 1, 'asdasdasdasd', '<p>asdasdasd</p>', 1, '150.00', '1613910186.jpg', '1613910186.gif', '2021-02-17 13:57:58', '2021-02-27 05:56:15'),
(3, 'we345345', 'we345345', '10.00', 1, 'asdasdasdasd', '<p>qweqw asdad</p>', 0, '125.00', '1613910203.jpg', '1613910203.gif', '2021-02-17 14:04:23', '2021-02-27 05:56:28'),
(4, 'we345345', 'we345345', '4.00', 1, 'asdasdasdasd', '<p>qweqw asdad</p>', 0, '55.00', '1613910231.jpg', '1613910231.gif', '2021-02-17 14:06:31', '2021-02-27 05:56:38'),
(5, '1234', '1234', '4.00', 2, 'sdfdf sdfsdfsfsd sdfsd', '<p>ewrwerwe ew dfsdfsdfsf sdfssd</p>\r\n<p>sdf dfsdf</p>\r\n<p>sdf dsfsdf</p>\r\n<p>sddsfsdf dfsfsdf</p>\r\n<p>fsdfsdfsfds</p>', 1, '45.00', 'img1614504116.jpg', 'gif1614504116.gif', '2021-02-28 05:21:56', '2021-02-28 05:21:56'),
(6, '888888888', '888888888', '7.00', 3, '4565 56456456', '<p>45645456 546456</p>\r\n<p>45645654 454565</p>', 0, '88.00', 'img1614504165.jpg', 'gif1614504165.gif', '2021-02-28 05:22:45', '2021-02-28 05:22:45');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `smail_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `top` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_is_chat` tinyint(1) NOT NULL DEFAULT 0,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `owner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_video` tinyint(1) NOT NULL DEFAULT 0,
  `video` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `text`, `button_text`, `button_is_chat`, `button_link`, `owner_id`, `owner_type`, `is_video`, `video`, `created_at`, `updated_at`) VALUES
(1, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, '', 1, 'App\\Page', 1, '1613835650.mp4', NULL, '2021-02-20 11:40:50'),
(2, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 2, 'App\\Page', 0, NULL, NULL, NULL),
(3, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 3, 'App\\Page', 1, '1613918788.mp4', NULL, '2021-02-21 10:46:28'),
(4, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 4, 'App\\Page', 1, '1614423939.mp4', NULL, '2021-02-27 07:05:39'),
(5, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 5, 'App\\Page', 0, NULL, NULL, NULL),
(6, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 6, 'App\\Page', 0, NULL, NULL, NULL),
(7, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 7, 'App\\Page', 1, '1613902898.mp4', NULL, '2021-02-21 06:22:17'),
(8, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 8, 'App\\Page', 0, NULL, NULL, NULL),
(9, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 9, 'App\\Page', 1, '1613918982.mp4', NULL, '2021-02-21 10:49:42'),
(10, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 10, 'App\\Page', 0, NULL, NULL, NULL),
(11, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 11, 'App\\Page', 0, NULL, NULL, NULL),
(12, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 12, 'App\\Page', 0, NULL, NULL, NULL),
(13, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 13, 'App\\Page', 0, NULL, NULL, NULL),
(14, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 14, 'App\\Page', 0, NULL, NULL, NULL),
(15, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 15, 'App\\Page', 1, '1614187649.mp4', NULL, '2021-02-24 13:27:29'),
(16, 'CREATE THE BEST SMART HOME', 'Ready to dive into the Internet of Things to automate your home?\r\n\r\nStart with the top products we\'ve tested for every room in the house.', 'EXPLORE VIDEO SERVICES ', 0, 'http://gsm.local/', 16, 'App\\Page', 0, NULL, NULL, NULL),
(17, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 17, 'App\\Page', 0, NULL, NULL, '2021-02-20 11:42:51'),
(18, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 17, 'App\\Block', 0, NULL, NULL, '2021-02-20 11:42:51'),
(19, 'CREATE THE BEST SMART HOME', 'CREATE THE BEST SMART HOME', 'EXPLORE VIDEO SERVICES', 0, 'http://gsm.local/', 18, 'App\\Page', 1, '1614429742.mp4', NULL, '2021-02-27 08:42:22');

-- --------------------------------------------------------

--
-- Структура таблицы `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `font` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `social_contacts`
--

CREATE TABLE `social_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social_contacts`
--

INSERT INTO `social_contacts` (`id`, `page_id`, `email`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'gmail@gmail.com', 'Page footer contacts', '+12345678910', NULL, NULL, NULL),
(2, 17, 'gmail@gmail.com', 'CUSTOMER CARE', '+12345678910', NULL, NULL, NULL),
(3, 17, 'gmail@gmail.com', 'ACTIVATE A SYSTEM', '+12345678910', NULL, NULL, NULL),
(4, 17, 'gmail@gmail.com', 'EQUIPMENT MANUALS\r\n', '+12345678910', NULL, NULL, NULL),
(5, 13, 'gmail@gmail.com', 'CUSTOMER CARE', '+12345678919', NULL, NULL, '2021-02-27 09:28:35'),
(6, 13, 'gmail@gmail.com', 'ACTIVATE A SYSTEM', '+12345678915', NULL, NULL, '2021-02-27 09:28:24'),
(7, 13, 'gmail@gmail.com', 'EQUIPMENT MANUALS\r\n', '+12345678918', NULL, NULL, '2021-02-27 09:28:31'),
(8, 12, 'gmail@grrmail.com', 'CUSTOMER CARE', '+12345678917', NULL, NULL, '2021-02-27 09:59:55'),
(9, 12, 'gmail@gmail.com', 'ACTIVATE A SYSTEM', '+12345678915', NULL, NULL, '2021-02-27 09:59:55'),
(10, 12, 'gmail@gmail.com', 'EQUIPMENT MANUALS\r\n', '+12345678913', NULL, NULL, '2021-02-27 09:59:55'),
(11, 16, 'gmail@gmail.com', 'CUSTOMER CARE', '+12345678910', NULL, NULL, NULL),
(12, 16, 'gmail@gmail.com', 'ACTIVATE A SYSTEM', '+12345678910', NULL, NULL, NULL),
(13, 16, 'gmail@gmail.com', 'EQUIPMENT MANUALS\r\n', '+12345678910', NULL, NULL, NULL),
(14, 6, 'gmail@gmail.com', 'Ingenious Portugal\r\n\r\n', '+12345678910', '250 Bisca 11 st Fl.Florida 33148, Florida', NULL, '2021-02-28 03:20:43');

-- --------------------------------------------------------

--
-- Структура таблицы `social_networks`
--

CREATE TABLE `social_networks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social_networks`
--

INSERT INTO `social_networks` (`id`, `name`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', 'fa-facebook', '2021-02-28 10:54:53', '2021-02-28 10:54:53'),
(2, 'Instagram', 'https://www.instagram.com/', 'fa-instagram', '2021-02-28 10:56:14', '2021-02-28 10:58:00'),
(3, 'Linkedin', 'https://www.linkedin.com/', 'fa-linkedin', '2021-02-28 10:57:12', '2021-02-28 10:57:12');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$SHuBqBCle8yGfJfbx6RgjOfen3rms.1uJms9itA6AYKdQVGyBSmeW', 'IYzbxkEqVJXc0qNhnzDZd8miJnI6qbAM8E16e2urY34zC8NtlxNSMGPQjJwz', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `title`, `image`, `url`, `video_category_id`, `created_at`, `updated_at`) VALUES
(1, 'asadasdasdasdsd', '1613902625.jpg', 'https://www.youtube.com/watch?v=_sI_Ps7JSEk', 1, '2021-02-21 06:17:05', '2021-02-21 06:17:05');

-- --------------------------------------------------------

--
-- Структура таблицы `video_categories`
--

CREATE TABLE `video_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `video_categories`
--

INSERT INTO `video_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'asadasdasd', '2021-02-21 06:01:55', '2021-02-21 06:01:55');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocks_page_id_foreign` (`page_id`);

--
-- Индексы таблицы `block_components`
--
ALTER TABLE `block_components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_components_block_id_foreign` (`block_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`imageable_id`);

--
-- Индексы таблицы `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `meta_fileds`
--
ALTER TABLE `meta_fileds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_fileds_owner_id_index` (`owner_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_owner_id_index` (`owner_id`);

--
-- Индексы таблицы `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social_contacts`
--
ALTER TABLE `social_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_contacts_page_id_foreign` (`page_id`);

--
-- Индексы таблицы `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_video_category_id_foreign` (`video_category_id`);

--
-- Индексы таблицы `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `block_components`
--
ALTER TABLE `block_components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `meta_fileds`
--
ALTER TABLE `meta_fileds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `social_contacts`
--
ALTER TABLE `social_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `block_components`
--
ALTER TABLE `block_components`
  ADD CONSTRAINT `block_components_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `social_contacts`
--
ALTER TABLE `social_contacts`
  ADD CONSTRAINT `social_contacts_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_video_category_id_foreign` FOREIGN KEY (`video_category_id`) REFERENCES `video_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
