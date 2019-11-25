-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 01:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `posted` tinyint(1) NOT NULL,
  `userid` int(5) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `posted`, `userid`, `date_created`, `date_updated`) VALUES
(0, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit faucibus sodales. Pellentesque vestibulum velit nec augue malesuada, et sodales urna tempus. Nullam nisl tortor, interdum nec libero eu, porta molestie erat. Aliquam libero lectus, viverra sit amet lobortis sit amet, accumsan vel metus. Etiam pretium est eu risus auctor rutrum. Duis vitae blandit lacus. Curabitur vel scelerisque nisi, laoreet lacinia enim. Duis et mattis lorem. Vivamus suscipit elementum accumsan. Nunc in lacus sapien. Ut non pellentesque nulla. Curabitur elementum urna id consequat sodales. Aenean ligula nibh, tempus eu bibendum sit amet, finibus eget nisl. Morbi ullamcorper elementum enim at convallis. Etiam non fermentum eros. Aliquam eu ultricies urna.\r\n\r\nNam posuere lobortis nulla, vitae cursus dolor. Suspendisse pharetra aliquam ex at faucibus. Praesent nulla purus, aliquet id est ut, rhoncus aliquam quam. Etiam luctus augue nec nibh tristique, sed aliquet dui cursus. Vivamus diam est, ultricies et augue eu, luctus imperdiet massa. Ut ornare ex et libero sagittis, non tristique purus gravida. Donec vel vulputate sapien. Curabitur nec diam dictum, facilisis augue quis, auctor diam. Nullam vel magna placerat, facilisis lorem eu, elementum dui. Sed pulvinar varius sapien vel fermentum.\r\n\r\nInteger sed purus sit amet massa eleifend aliquet ut consectetur orci. Duis non dapibus dolor. Maecenas molestie, turpis et interdum ullamcorper, massa augue sollicitudin tellus, ut cursus quam est vitae neque. Phasellus sagittis enim imperdiet sapien vestibulum fringilla. Duis pellentesque leo quis rhoncus vestibulum. Etiam sapien mi, dignissim maximus venenatis sit amet, laoreet nec leo. Nullam facilisis tortor magna, sed scelerisque odio sodales sed. Sed commodo sem ac eros bibendum, non scelerisque dolor pretium. Integer nec neque porttitor, semper est eget, consequat nisl. Nullam felis odio, sagittis id venenatis sit amet, congue vel urna. Vivamus blandit sed magna eu commodo. Maecenas ultricies tempus convallis. Etiam non porta augue. Nunc tortor turpis, viverra a aliquam sit amet, laoreet at lacus.\r\n\r\nPhasellus congue libero eget scelerisque commodo. Nullam sit amet aliquam turpis. Aenean aliquam ultricies justo nec volutpat. Nam maximus nisl magna, eget maximus ligula cursus eget. Etiam felis eros, fermentum in nibh at, cursus efficitur nisi. Nullam suscipit libero in massa vestibulum efficitur. Praesent mollis mauris elit, at mattis velit sagittis a. Pellentesque velit turpis, semper et nisi quis, pharetra lobortis nisl. Ut dignissim eget lectus eu scelerisque. Proin ac scelerisque elit. Vivamus mi tortor, pretium non hendrerit in, commodo eget elit. Proin vel risus porta, finibus nibh ac, euismod massa.\r\n\r\nCurabitur ultrices scelerisque nisl vitae elementum. Integer ornare tellus nec nibh iaculis dignissim. Praesent dignissim faucibus feugiat. Cras lacinia mauris eget augue tempus maximus. Vestibulum tempor lorem scelerisque sapien ullamcorper, eu commodo tortor consequat. Nunc lorem turpis, imperdiet a lectus ut, egestas sollicitudin lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris id nisl massa. Sed hendrerit pellentesque nibh aliquet vestibulum. Aenean vitae volutpat arcu. Ut at tellus faucibus, porttitor nisl in, sodales risus. Morbi a diam ut ante placerat blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 1, 1, '2019-11-24 12:50:59', '2019-11-24 12:50:59'),
(1, 'LOOO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet dignissim dolor. Nullam at purus pellentesque, cursus dolor et, egestas est. Vestibulum id vehicula elit, et convallis lacus. Vivamus ornare ut ex id placerat. In blandit vestibulum arcu, non luctus nibh convallis eu. Donec cursus nulla ac est condimentum faucibus a faucibus metus. Nunc consectetur in diam nec commodo.\r\n\r\nMaecenas urna tellus, dictum vel vestibulum sit amet, bibendum eu purus. Aliquam sagittis nibh et pretium fermentum. Nunc auctor facilisis nibh ac tincidunt. Vestibulum in quam faucibus, dignissim metus id, molestie libero. Aenean placerat nisi nec enim aliquet viverra. Proin suscipit fringilla magna. Phasellus ut metus quis tellus vehicula scelerisque.\r\n\r\nEtiam venenatis massa nec lacinia mollis. Nam blandit, risus vitae euismod pulvinar, enim risus rhoncus nulla, nec tempus tellus enim id ante. Ut pharetra varius neque eget condimentum. Etiam varius vehicula enim quis semper. Praesent sit amet laoreet dui, eu vestibulum felis. Sed nec sollicitudin nisi, et semper nunc. Duis fermentum eget neque in mollis. Pellentesque non neque tempus, faucibus ipsum et, dignissim nisi. Morbi nec diam non lorem ullamcorper fermentum nec eget nunc. Nullam leo dui, malesuada non sollicitudin sed, vulputate sit amet erat. Donec turpis nisl, convallis vitae erat in, luctus dapibus purus. Proin finibus lacinia neque, nec porttitor massa tincidunt sed. Sed lobortis, elit in fringilla ultrices, nisi tortor placerat felis, vel luctus dolor turpis sed massa. Mauris lobortis ligula at tortor bibendum, id sollicitudin dui semper. Suspendisse potenti.\r\n\r\nMorbi eu pellentesque erat. Suspendisse id urna velit. Praesent at convallis quam, non gravida ex. Duis vitae finibus libero, nec convallis neque. Maecenas dapibus nibh ac urna aliquam pharetra. Duis tincidunt dolor eu ipsum rhoncus, non interdum elit commodo. Donec aliquet sem sit amet felis ornare, placerat faucibus dolor bibendum. Maecenas venenatis, nunc nec vehicula semper, augue nibh pellentesque massa, vel varius turpis urna quis neque. Maecenas enim tortor, vestibulum quis cursus sed, ultrices a metus. Nulla eleifend tortor vitae quam cursus consequat.\r\n\r\nQuisque odio enim, fringilla in accumsan a, pharetra nec ex. Duis eget tortor pharetra, volutpat justo ac, vulputate justo. Donec a volutpat tortor. Aliquam eu sollicitudin libero, vitae ornare elit. Nulla pharetra leo felis, et fermentum ante pharetra vel. Vestibulum ultrices sapien at augue mattis semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce est urna, euismod auctor sem luctus, facilisis viverra sapien. Phasellus tristique et lectus eget commodo. Aenean dictum auctor dapibus. Etiam mauris massa, dictum vitae lectus vitae, cursus lobortis quam. Vivamus in odio imperdiet, malesuada magna id, feugiat augue. Mauris eget vulputate turpis. Mauris eu neque nibh.', 1, 1, '2019-11-24 00:00:00', '2019-11-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'anandavj', 'ananda@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
