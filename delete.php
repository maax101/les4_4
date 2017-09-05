<?php
require_once 'settings.php';
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $delete = 'ALTER TABLE ' . $_GET['table'] . ' DROP COLUMN ' . $_GET['name'] . '';
    $dbc->query($delete);
    header('Location: index.php');
}
