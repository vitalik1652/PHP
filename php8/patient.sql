

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

something

INSERT INTO `admin` (`id`, `login`, `pass`) VALUES
(1, 'Admin', 'Admin');

again something

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `specialization` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `doctors` (`id`, `name`, `specialization`) VALUES
(1, 'Anna Nowak', 'okulist'),
(2, 'Vitalii Waliza', 'proctologist'),
(3, 'Max Tolstyi', 'therapist'),
(4, 'Liliia St', 'dentist');



CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `doctorName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `patientName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dateMeet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `problems` (
  `id` int(11) NOT NULL,
  `problem` varchar(255) CHARACTER SET utf8 NOT NULL,
  `doctor` varchar(255) CHARACTER SET utf8 NOT NULL,
  `patient` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(74, 'Vitalii', '4297f44b13955235245b2497399d7a93', 'Vitalii Waliza'),
(73, 'Anna', '4297f44b13955235245b2497399d7a93', 'Anna Nowak'),
(72, 'Vo', '4297f44b13955235245b2497399d7a93', 'Vladimir Kuznetsov');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;


ALTER TABLE `problems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

