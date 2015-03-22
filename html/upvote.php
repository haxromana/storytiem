<?php  
    $conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    $getScore = "select * from posts where id = " . $_POST['ID'] . ";";
    $result = pg_query($getScore);
    $score = pg_fetch_assoc($result)['score'] + 1;
    $sql = 'update posts set score=' . string($score) . ' where id='
        . $_POST['ID'] . ';';
?>
