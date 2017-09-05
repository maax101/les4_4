<?php
$dbc         = new PDO("mysql:host = localhost;dbname=mybase", "root", "");
$createTable =
'CREATE TABLE `students` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`estimation` float NOT NULL,
`budget` tinyint(4) NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;';
$dbc->query($createTable);
$tables_list = 'SHOW TABLES';
$describe    = 'DESCRIBE ';

// $delete = $dbc -> prepare('ALTER TABLE `:table` DROP `:field`');
// if (isset ($_GET['action']) && $_GET['action'] == 'delete'){
//     $del_val = [':table' => $_GET['table'], ':field' => $_GET['name']];
//     $delete ->execute ($del_val);
// }
