-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 年 5 朁E28 日 14:51
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jstqb_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_kind_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choice1` varchar(125) NOT NULL,
  `choice2` varchar(125) NOT NULL,
  `choice3` varchar(125) NOT NULL,
  `choice4` varchar(125) NOT NULL,
  `answer` int(11) NOT NULL,
  `explanation` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `questions`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `question_kinds`
--

CREATE TABLE `question_kinds` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `question_kinds`
--

INSERT INTO `question_kinds` (`id`, `name`, `created`, `modified`) VALUES
(1, 'テストの基礎', '2020-05-08 15:24:03', '2020-05-08 15:24:03'),
(2, 'ソフトウェア開発ライフサイクル全体を通してのテスト', '2020-05-08 15:24:19', '2020-05-08 15:24:19'),
(3, '静的テスト', '2020-05-08 15:24:36', '2020-05-08 15:24:36'),
(4, 'テスト技法', '2020-05-08 15:24:54', '2020-05-08 15:24:54'),
(5, 'テストマネジメント', '2020-05-08 15:25:13', '2020-05-08 15:25:13'),
(6, 'テスト支援ツール', '2020-05-08 15:25:31', '2020-05-08 15:25:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_kind_id` (`question_kind_id`);

--
-- Indexes for table `question_kinds`
--
ALTER TABLE `question_kinds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `question_kinds`
--
ALTER TABLE `question_kinds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`question_kind_id`) REFERENCES `question_kinds` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
