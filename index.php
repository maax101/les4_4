<?php
include 'settings.php';
echo 'TABLES:';
foreach ($dbc->query($tables_list, PDO::FETCH_ASSOC) as $rows) {

    foreach ($rows as $row) {
        echo '<li><a href="?table=' . $row . '">' . $row . '</a></li>';
    }
}
?>
<html>
<style>
    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }

    table th {
        background: #eee;
    }
</style>
<h1><?=isset($_GET['table']) ? $_GET['table'] : null?></h1>

<table border="1">
	<tr>
		<th>Название поля</th>
		<th>Тип поля</th>
		<th>Действия</th>
	</tr>
		<?php
if (!empty($_GET['table'])) {
    $describe .= $_GET['table'];
    foreach ($dbc->query($describe, PDO::FETCH_ASSOC) as $col) {
        echo 
        '<tr>
			<td>' . $col['Field'] . '</td>
			<td>' . $col['Type'] . '</td>
			<td>
				<a href="edit.php?table=' . $_GET['table'] . '&name=' . $col['Field'] . '&action=edit">Изменить</a>
    			<a href="delete.php?table=' . $_GET['table'] . '&name=' . $col['Field'] . '&action=delete">Удалить</a>
    		</td>
		</tr>';
    }
}
?>
</table>
</html>