<?php  
    $conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    $sql = 'select * from posts;';
    $result = pg_query($sql);
    for ($i = 0; $i < pg_num_rows($result); $i++) {
        pg_result_seek($result, $i);
        $row = pg_fetch_assoc($result);
        echo "<div class='story' style='display:block' id='" . $row['id'] . "'>\n";
        echo $row['title'] ."\n<br>\n".$row['post'] . "<br>";
        echo "</div>\n";
    }
?>
