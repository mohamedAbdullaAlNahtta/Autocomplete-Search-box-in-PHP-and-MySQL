CREATE TABLE `tutorials` (
  `id` int(10) UNSIGNED NOT NULL,
  `tutorial_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `tutorials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;



INSERT INTO `tutorials` (`id`, `tutorial_name`) VALUES
(1, 'muhammad'),
(2, 'Abdullah'),
(3, 'Abo Bakr'),
(4, 'Omar'),
(5, 'Ali Ibn Aby Taleb'),
(6, 'Moustafa'),
(7, 'tamer'),
(8, 'Dalia'),
(9, 'Amgad'),
(10, 'Hafez'),
(11, 'Magdy'),
(12, 'Anwar'),
(13, 'Zaki'),
(14, 'Samir'),
(15, 'Huessin'),
(16, 'daboor'),
(17, 'Karzami'),
(18, 'Mlouky'),
(19, 'Yellow'),
(20, 'green'),
(21, 'red'),
(22, 'white'),
(23, 'black'),
(24, 'gray'),
(25, 'Layla'),
(26, 'Carter'),
(27, 'Waleed'),
(28, 'Osama'),
(29, 'Parker');



