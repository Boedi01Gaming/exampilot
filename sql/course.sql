CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO `course` (`id`, `cname`) VALUES
(1, 'Web Design');
COMMIT;