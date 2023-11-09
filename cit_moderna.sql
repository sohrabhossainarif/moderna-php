-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2023 at 03:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit_moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'banner.jpg',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `image`, `status`) VALUES
(1, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '&lt;p class=&quot;fst-italic&quot; style=&quot;color: rgb(68, 68, 68); font-family: &quot; open=&quot;&quot; sans&quot;,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 16px;&quot;=&quot;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;&lt;ul&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check2-circle&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check2-circle&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check2-circle&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;&amp;nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.&lt;/li&gt;&lt;/ul&gt;&lt;p style=&quot;padding-bottom: 10px;&quot;&gt;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum&lt;/p&gt;', '1678618163_640dae336e688_about.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `btn_text` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `btn_url` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `btn_text`, `btn_url`, `status`) VALUES
(5, 'Welcome to Moderna', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Read More', '#', 1),
(6, 'Sequi ea ut et est quaerat', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Read More', '#', 1),
(7, 'Lorem Ipsum Dolor', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Read More', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Shahadat Hossen', 'rashed@gmail.com', 'TEST', 'TEST MESSAGE'),
(2, 'Nazmul Alam Shaun', 'sadat@gmail.com', 'NEW', 'ANOTHER MAIL FOR TESTING'),
(3, 'Rashed Sadat', 'phprashed@gmail.com', 'TESTING', 'I AM HERE TO TEST YOUR MAIL'),
(4, 'Nur Alam', 'nuralam@gmail.com', 'Develop a web project', 'I want to develop a web project by your team.'),
(6, 'Shahadat Hossen', 'rashedsadat27@gmail.com', 'Test', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `count` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `count`, `status`) VALUES
(6, 'Clients', 232, 1),
(7, 'Projects', 521, 1),
(8, 'Hours Of Support', 1463, 1),
(9, 'Hard Workers', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `image`, `status`) VALUES
(6, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '&lt;p class=&quot;fst-italic&quot; style=&quot;color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;&lt;ul&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;&amp;nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;&amp;nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;&lt;/ul&gt;', '1678804835_64108763829e5_features-1.svg', 1),
(7, 'Corporis temporibus maiores provident', '&lt;p class=&quot;fst-italic&quot; style=&quot;color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum&lt;/p&gt;', '1678804875_6410878bca3d7_features-2.svg', 1),
(8, 'Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas', '&lt;p style=&quot;color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.&lt;/p&gt;&lt;ul style=&quot;padding: 0px; list-style: none; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;&amp;nbsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;&amp;nbsp;Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;&lt;li style=&quot;padding-bottom: 10px;&quot;&gt;&lt;i class=&quot;bi bi-check&quot; style=&quot;font-size: 20px; padding-right: 4px; color: rgb(104, 164, 196);&quot;&gt;&lt;/i&gt;&amp;nbsp;Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.&lt;/li&gt;&lt;/ul&gt;', '1678804914_641087b26503d_features-3.svg', 1),
(9, 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in', '&lt;p class=&quot;fst-italic&quot; style=&quot;color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 16px;&quot;&gt;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum&lt;/p&gt;', '1678804951_641087d77649b_features-4.svg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `project_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `client` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `project_date` date NOT NULL,
  `project_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `project_name`, `image`, `category`, `client`, `project_date`, `project_url`, `project_description`, `status`) VALUES
(2, 'Education System', '1678888519_6411ce475e9e9_portfolio-1.jpg', '3', 'United Group', '2021-11-24', 'https://www.united.com.bd/', 'The journey began in 1978 as a shared vision by close friends to establish a lasting legacy. Today, United Group stands as one of the largest socio-economic infrastructure based business conglomerates. \r\nA unique business philosophy, long cultivated knowledge of the local economic culture and industrial practices, and unwavering dedication to fulfill every commitment has enabled us to pioneer and prosper in almost every sector we operated in. Our revenue streams are used for community development as much as reinvesting into new business initiatives.\r\nWe plan to continue building on the legacy of success through maintaining the core set of values that have been nurtured, practiced and implemented in all of our ventures.', 1),
(3, 'Facebook', '1678889152_6411d0c05046c_pexels-pixabay-162622.jpg', '3', 'Meta Group', '2009-07-16', 'https://facebook.com', 'Facebook can be accessed from devices with Internet connectivity, such as personal computers, tablets and smartphones. After registering, users can create a profile revealing information about themselves. They can post text, photos and multimedia which are shared with any other users who have agreed to be their &quot;friend&quot; or, with different privacy settings, publicly. Users can also communicate directly with each other with Facebook Messenger, join common-interest groups, and receive notifications on the activities of their Facebook friends and the pages they follow.', 1),
(4, 'Twitter', '1678889327_6411d16f07148_pexels-brett-jordan-5417837.jpg', '2', 'Twitter, Inc.', '2006-07-12', 'https://twitter.com', 'Twitter is an online social media and social networking service owned and operated by American company Twitter, Inc., on which users post and reply publicly or privately texts, images and videos known as &quot;tweets&quot;.[9] Registered users can tweet, like, &#039;retweet&#039; tweets and direct message (DM), while unregistered users only have the ability to view public tweets. Users interact with Twitter through browser or mobile frontend software, or programmatically via its APIs.', 1),
(5, 'Instagram', '1678889512_6411d22877359_pexels-pixabay-276923.jpg', '1', 'Instacart', '2010-09-27', 'https://instagram.com', 'Instagram[a] is a photo and video sharing social networking service owned by American company Meta Platforms. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers. Users can browse other users&#039; content by tag and location, view trending content, like photos, and follow other users to add their content to a personal feed.', 1),
(6, 'Creative IT Student Portal', '1678889780_6411d334a16d7_unnamed.png', '3', 'Creative IT Institute', '2020-07-06', 'https://www.creativeitinstitute.com/', 'In February 2011, it was reported that Instagram had raised $7 million in Series A funding from a variety of investors, including Benchmark Capital, Jack Dorsey, Chris Sacca (through Capital fund), and Adam D&#039;Angelo. The deal valued Instagram at around $20 million. In April 2012, Instagram raised $50 million from venture capitalists with a $500 million valuation. Joshua Kushner was the second largest investor in Instagram&#039;s Series B fundraising round, leading his investment firm, Thrive Capital, to double its money after the sale to Facebook.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `box_color` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `box_color`, `status`) VALUES
(6, 'Lorem Ipsum', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bxl-dribbble', 'icon-box-green', 2),
(7, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'bx-file', 'icon-box-cyan', 2),
(8, 'Magni Dolores', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'bx-tachometer', 'icon-box-green', 2),
(9, 'Nemo Enim', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'bx-universal-access', 'icon-box-blue', 2),
(10, 'WEB DEVELOPMENT', 'We use latest web technologies to develop website that ensures usability &amp; security.', 'bxl-dribbble', 'icon-box-pink', 1),
(11, 'E-COMMERCE', 'We create online shops that help our clients stay on the top on the e-commerce business.', 'bx-file', 'icon-box-cyan', 1),
(12, 'WEB DESIGN', 'We design eye catching website that ensures clients&rsquo; satisfaction &amp; good user experience.', 'bx-tachometer', 'icon-box-green', 1),
(13, 'MOBILE APPS', 'We use latest technology &amp; our innovative power to meet the expectations of mobile users.', 'bx-universal-access', 'icon-box-blue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `title`, `description`, `image`, `status`) VALUES
(6, 'Our Mission', 'our mission is to empower businesses and individuals to achieve their goals through innovative and strategic solutions. We believe in providing exceptional customer service and fostering long-term relationships with our clients. We are committed to maintaining the highest standards of professionalism, integrity, and ethics in everything we do.', '1678935353_64128539e8aac_pexels-luis-gomes-546819.jpg', 1),
(7, 'Our Plan', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', '1678935279_641284efcd799_pexels-fauxels-3183197.jpg', 1),
(8, 'Our Vision', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet', '1678935219_641284b374521_pexels-tranmautritam-326503.jpg', 1),
(9, 'Our Care', 'Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut', '1678935183_6412848fafaa9_pexels-rodolfo-quirós-2330137.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `skill_progress` int NOT NULL,
  `progress_color` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `skill_progress`, `progress_color`, `status`) VALUES
(6, 'html', 100, 'bg-success', 1),
(7, 'css', 90, 'bg-info', 1),
(8, 'javascript', 75, 'bg-warning', 1),
(9, 'photoshop', 55, 'bg-danger', 1),
(10, 'PHP', 70, 'bg-dark', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'shahadathossen5019@gmail.com'),
(2, 'rashed@gmail.com'),
(3, 'phprashed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `description`, `avatar`, `status`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(3, 'Walter White', 'CHIEF EXECUTIVE OFFICER', 'Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea non est corporis in.', '1678805822_64108b3ed51c0_team-1.jpg', 1, 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', 'https://linkedin.com'),
(4, 'Sarah Jhonson', 'PRODUCT MANAGER', 'Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque. Dolores eum non.', '1678805863_64108b67ce715_team-2.jpg', 1, 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', 'https://linkedin.com'),
(5, 'William Anderson', 'CTO', 'Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat aliquid. Tenetur possimus qui enim.', '1678805903_64108b8f4b665_team-3.jpg', 1, 'https://facebook.com', '', 'https://instagram.com', 'https://linkedin.com'),
(6, 'Amanda Jepson', 'ACCOUNTANT', 'Sint qui cupiditate. Asperiores fugit impedit aspernatur et mollitia. Molestiae qui placeat labore assumenda id qui nesciunt quo reprehenderit. Rem dolores similique quis soluta culpa enim quia ratione ea.', '1678805942_64108bb66c50f_team-4.jpg', 1, 'https://facebook.com', 'https://twitter.com', '', 'https://linkedin.com'),
(7, 'Niall Katz', 'MARKETING', 'Aut ex esse explicabo quia harum ea accusamus excepturi. Temporibus at quia quisquam veritatis impedit. Porro laborum voluptatum sed necessitatibus a saepe. Deserunt laborum quasi consequatur voluptatum iusto sint qui fuga vel. Enim eveniet sed quibusdam rerum in. Non dicta architecto consequatur quo praesentium nesciunt.', '1678805977_64108bd95f2c8_team-5.jpg', 1, 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', 'https://linkedin.com'),
(8, 'Demi Lewis', 'FINANCING', 'Amet labore numquam corrupti est. Nostrum amet voluptas consectetur dolor voluptatem architecto distinctio consequuntur eligendi. Quam impedit enim aut nesciunt aut dicta quam exercitationem. Reprehenderit exercitationem magnam. Ullam similique ut voluptas totam nobis porro accusamus nulla omnis.', '1678806014_64108bfe3590b_team-6.jpg', 1, 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', 'https://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `avatar`, `designation`, `comment`, `status`) VALUES
(6, 'Saul Goodman', '1678805393_64108991066e1_testimonials-1.jpg', 'Ceo &amp;amp; Founder', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', 1),
(7, 'Sara Wilsson', '1678805434_641089ba5f70f_testimonials-2.jpg', 'Designer', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.', 1),
(8, 'Jena Karlis', '1678805471_641089dfa502c_testimonials-3.jpg', 'Store Owner', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.', 1),
(9, 'Matt Brandon', '1678805505_64108a019c56b_testimonials-4.jpg', 'Freelancer', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 1),
(10, 'John Larson', '1678805543_64108a2751ed4_testimonials-5.jpg', 'Entrepreneur', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theme_option`
--

CREATE TABLE `theme_option` (
  `id` int NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'logo.jpg',
  `hero_banner` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'banner.jpg',
  `feature_heading` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Features',
  `feature_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
  `newsletter_heading` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Our Newsletter',
  `newsletter_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',
  `copy_right` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '© Copyright Moderna. All Rights Reserved',
  `about_heading` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'About Moderna',
  `about_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.',
  `twitter` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'twitter.com',
  `facebook` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'facebook.com',
  `linkedin` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'linkedin.com',
  `instagram` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'instagram.com',
  `contact_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'A108 Adam Street New York, NY 535022 United States',
  `skill_heading` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Our Skills',
  `skill_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
  `testimonial_heading` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Tetstimonials',
  `testimonial_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theme_option`
--

INSERT INTO `theme_option` (`id`, `logo`, `hero_banner`, `feature_heading`, `feature_description`, `newsletter_heading`, `newsletter_description`, `copy_right`, `about_heading`, `about_description`, `twitter`, `facebook`, `linkedin`, `instagram`, `contact_address`, `skill_heading`, `skill_description`, `testimonial_heading`, `testimonial_description`) VALUES
(1, '1678728605_640f5d9d7f812_MRNA-723e7c1a-removebg-preview.png', 'bg-banner.jpg', 'Features', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Our Newsletter', 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna', '&copy; Copyright &lt;b&gt;Moderna&lt;/b&gt;. All Rights Reserved', 'About Moderna', 'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.', 'https://twitter.com', 'https://facebook.com', 'https://linkedin.com', 'https://instagram.com', 'A108 Adam Street New York, NY 535022 United States', 'Our Skills', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Tetstimonials', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = deactive',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `status`, `created_at`) VALUES
(1, 'Rashed', 'rashed@gmail.com', '$2y$10$WTkCZvDZiM547CnXEHHuR.GBGSqy/qN6yLpFRsuAY/bKL09/gArgG', '1678086770_6405927207c0b_283132774_4983691478414349_475463177613157736_n.jpg', 1, '2023-03-06'),
(2, 'sadat', 'sadat@gmail.com', '$2y$10$t.Dj8Upt.nP5JDbBDwQtAuovKhQAm8HFbbXeIPiFKBR/7h7Yz3VtG', '1678102947_6405d1a3edcc2_283132774_4983691478414349_475463177613157736_n.jpg', 1, '2023-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` int NOT NULL,
  `bg_image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'banner.jpg',
  `video_link` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '#',
  `title_one` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'LOREM IPSUM',
  `description_one` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
  `icon_one` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'bx-fingerprint',
  `title_two` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'NEMO ENIM',
  `description_two` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
  `icon_two` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'bx-gift',
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1 = active 2= deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `bg_image`, `video_link`, `title_one`, `description_one`, `icon_one`, `title_two`, `description_two`, `icon_two`, `status`) VALUES
(1, '1678934653_6412827d0ee96_pexels-designecologist-1779487.jpg', 'https://youtu.be/RBz3vP6aD5w', 'Creativity', 'Every project we make for our client is an individual attempt to meet the requirements with maintaining the highest quality of the product. We hate mediocrity and boredom. Ourself development is our main goal.', 'bx-fingerprint', 'Quality over Quantity', 'Mental energy is a depletable bandwidth, so we concentrate our time and talent on fewer projects/clients. A greater investment on our part, but we&rsquo;re running a create services puppy mill.', 'bx-gift', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_option`
--
ALTER TABLE `theme_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `theme_option`
--
ALTER TABLE `theme_option`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
