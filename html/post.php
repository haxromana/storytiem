<?php
$conn = pg_connect("host=localhost dbname=storytiem user=postgres password=")
    or die ('is dead ' . pg_last_error());
$query = 'select * from posts';
$result = pg_query($query) or die('is dead ' . pg_last_error());
?>
