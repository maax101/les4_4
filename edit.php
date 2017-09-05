<?php
require_once 'settings.php';
$describe .= $_GET['table'];
$types = ['TINYINT', 'SMALLINT', 'MEDIUMINT', 'INT', 'BIGINT', 'UNSIGNED', 'FLOAT', 'DOUBLE', 'REAL', 'DECIMAL', 'NUMERIC', 'VARCHAR', 'TINYTEXT', 'TEXT', 'MEDIUMTEXT', 'LONGTEXT', 'TINYBLOB', 'BLOB', 'MEDIUMBLOB', 'LONGBLOB', 'DATE', 'TIME', 'DATETIME', 'TIMESTAMP'];
if (isset($_POST['change'])) {
    $edit = 'ALTER TABLE ' . $_GET['table'] . ' CHANGE ' . $_GET['name'] . ' ' . $_POST['new_name'] . ' ' . $_POST['new_type'] . ' NOT NULL';
    $dbc->query($edit);
   echo '<a href="index.php?table='.$_GET['table'].'">back</a>';
}
?>
<html>
	<title>
		<meta charset="utf-8">
	</title>
	<body>
		<form action="" method="POST">
			<input type="text" name="new_name" value="<?php echo isset($_POST['new_name']) ? $_POST['new_name'] : $_GET['name']?>">
			<select name="new_type" id="">
			<?php foreach ($types as $value) {
			    echo '<option>' . $value . '</option>';
			}
			?>
			</select>
			<input type="submit" name="change" value="применить">
		</form>
	</body>
</html>
