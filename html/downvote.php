<html>
<?php  
    $conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    $getScore = 'select score from posts where id = ' .  $_POST['ID'] .  ';';
    $result = pg_query($getScore);
    $sql = 'update posts set score=' . (intval($result) - 1) . ' where id='
        . $_POST['ID'] . ';';
?>
</html>
