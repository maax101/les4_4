<?php 
require_once 'settings.php';
$createTable = 
'CREATE TABLE `students` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`estimation` float NOT NULL,
`budget` tinyint(4) NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
';
$dbc->query($createTable);
 ?>