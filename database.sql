CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(30) NOT NULL,
    `email` varchar(30) NOT NULL,
    `password` varchar(150) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
);