-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2019 at 08:16 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_p5`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `chapo` text NOT NULL,
  `content` longtext NOT NULL,
  `author` text NOT NULL,
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `chapo`, `content`, `author`, `createdAt`, `modifiedAt`) VALUES
(49, 'fdzfe', 'zfez', 'Bootstrap is a free framework created by Twitter that helps you get up and running with responsive web design quickly and easily. With Bootstrap, you can use HTML and CSS templates for web-based content such as forms, buttons, navigation and more. You can also use JavaScript plugins.While there are a number of reasons to use free Bootstrap themes, the biggest are that it', 'ezfze', '2019-09-11 08:56:41', '2019-10-25 06:04:01'),
(50, 'fze', 'fzefze', 'ffez', 'fezfez', '2019-09-11 08:56:41', '2019-09-11 08:56:41'),
(51, 'fdzfe', 'zfez', 'fzefef', 'ezfze', '2019-09-11 08:56:44', '2019-09-11 08:56:44'),
(54, 'fzegfdgd22aa', 'fzefze', 'ffez', 'fezfez', '2019-09-11 08:56:51', '2019-10-25 06:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `validate` int(1) NOT NULL DEFAULT '0',
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `message`, `date`, `validate`, `article_id`) VALUES
(1, 'fsf', 'ze', '2019-09-02 07:31:50', 1, 0),
(2, 'comment a', 'fef', '2019-09-08 20:06:04', 1, 56),
(3, 'dzad', 'dza', '2019-09-09 08:08:18', 1, 56),
(4, 'fezfezf', 'ezfzefzefez', '2019-09-09 08:08:36', 1, 2),
(5, 'dzadza', 'dzadza', '2019-09-09 08:08:45', 1, 5),
(6, 'sazsa', 'dza', '2019-09-09 10:55:04', 1, 3),
(7, 'gergre', 'gre', '2019-09-11 11:11:21', 1, 55),
(8, 'fzefez', 'fze', '2019-09-11 11:15:02', 1, 55),
(9, 'fzfez', 'fezze', '2019-09-11 11:15:05', 1, 55),
(10, 'fezfzef', 'fzefezfzezef', '2019-09-11 11:15:09', 1, 55),
(11, 'fezfzef', 'fzefezfzezef', '2019-09-11 11:16:05', 1, 55),
(12, 'momom', 'momo', '2019-09-11 11:16:11', 1, 55),
(13, 'zzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzz', '2019-09-11 11:16:22', 1, 55),
(14, 'zzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzz', '2019-09-11 11:16:35', 1, 55),
(15, 'fgergefz', 'frefre', '2019-09-11 15:32:13', 1, 54),
(16, 'fzefzefze', 'fezfze', '2019-09-11 15:32:17', 1, 54),
(17, 'fzefzefzefze', 'fzefzefze', '2019-09-11 15:32:20', 1, 54),
(18, 'reg', 'greg', '2019-09-11 15:32:36', 1, 50),
(19, 'gbrhrt', 'htrh', '2019-09-13 07:16:03', 1, 53),
(20, 't\'\"t\'\"', 't\'\"t', '2019-09-13 07:16:12', 1, 56),
(21, 'dzdz', 'dz', '2019-09-13 22:51:59', 1, 51),
(22, 'Mohamed Bouhlel', 'dz', '2019-09-13 23:03:30', 1, 51),
(23, 'Mohamed Bouhlel', 'dzadza', '2019-09-13 23:03:39', 0, 51),
(24, 'fezfzef', 'fez', '2019-09-13 23:06:06', 0, 52);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `validate` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `pseudo`, `email`, `password_user`, `role`, `validate`, `date`) VALUES
(1, 'Bouhlel', 'Mohamed', 'admin', 'mohamed.bouhleel@gmail.com', '1234', 0, 1, '2019-09-01 15:39:48'),
(2, 'Chloe', 'Fredish', 'Chloo', 'chloe@gmail.com', '', 1, 1, '2019-09-01 15:40:25'),
(3, 'fezezf', 'ezfez', 'fzef', 'fezfez', '', 1, 1, '2019-09-02 09:59:34'),
(4, 'dzda', 'dzadza', 'dzadaz', 'dzadaz', '', 1, 0, '2019-09-09 08:38:56'),
(5, 'Bouhlel', 'dza', 'dzadzad', 'mohamed.bouhleel@gmail.com', '', 1, 1, '2019-09-09 10:52:11'),
(6, 'Bouhlel', 'Mohamed', 'tgr', 'mohamed.bouhleel@gmail.com', '', 0, 1, '2019-09-09 13:28:07'),
(7, 'Bouhlel', 'Mohamed', 'fefzeze', 'mohamed.bouhleel@gmail.com', 'fezfzefezfze', 0, 1, '2019-09-09 13:43:15'),
(8, 'grzgr', 'egr', 'momoo', 'rgeger', '12345', 1, 1, '2019-09-09 13:43:34'),
(9, 'grzgr', 'egr', 'mm', 'rgeger', '123', 0, 1, '2019-09-09 13:44:01'),
(10, 'dzdzzdd', 'dzdzdzdz', 'dzdzdz', 'mohamed.bouhleel@gmail.com', 'dzddzdz', 0, 0, '2019-09-13 21:55:32'),
(11, 'dza', 'dzdz', 'dz', 'mohamed.bouhleel@gmail.com', 'dzdz', 0, 0, '2019-09-13 22:02:07'),
(12, 'dza', 'dzdz', 'dz', 'mohamed.bouhleel@gmail.com', 'dzdz', 0, 0, '2019-09-13 22:02:16'),
(13, 'dza', 'dzdz', 'dz', 'mohamed.bouhleel@gmail.com', 'dzdz', 0, 0, '2019-09-13 22:03:46'),
(14, 'dza', 'dzdz', 'dz', 'mohamed.bouhleel@gmail.com', 'dzdz', 0, 1, '2019-09-13 22:06:29'),
(15, 'Bouhlel', 'Mohamed', 'fzfezf', 'mohamed.bouhleel@gmail.com', 'fezfezfze1', 0, 0, '2019-09-13 22:08:56'),
(16, 'Bouhlel', 'Mohamed', 'gre', 'mohamed.bouhleel@gmail.com', '1234', 0, 0, '2019-09-13 22:09:01'),
(17, 'Bouhlel', 'Mohamed', 'gre', 'mohamed.bouhleel@gmail.com', '1234', 0, 1, '2019-09-13 22:10:10'),
(18, 'Bouhlel', 'Mohamed', 'gre', 'mohamed.bouhleel@gmail.com', '1234', 1, 1, '2019-09-13 22:10:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
