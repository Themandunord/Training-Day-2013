<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=training-day', 'root', '');
$db->exec("SET NAMES UTF8");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>