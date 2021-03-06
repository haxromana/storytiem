<html>
<?php  
    $conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    $sql = 'select * from posts order by score desc limit 30;';
    $result = pg_query($sql);
    for ($i = 0; $i < pg_num_rows($result); $i++) {
        pg_result_seek($result, $i);
        $row = pg_fetch_assoc($result);
        echo "<div class='story' style='display:none' id='" . $row['id'] . "'>\n";
        echo "<div class='title'>" . nl2br(htmlentities($row['title'])) ."\n<br></div>\n" 
            . "<div class='date'>posted at " . date("j F, Y", strtotime($row['time'])) . "<br></div>" 
            . "<div class='post'>" . nl2br(htmlentities($row['post'])) . "<br></div>";
        if ($row['id'] == $_COOKIE["auth"]) {
            echo "(you)";
        }
        echo "</div>\n";
        echo "<div class='vote' style='display:inline-block' id='" . $row['id'] . "-vote>\n"
            . "<div class='upvote'></div>\n"
            . "<div class='downvote'></div>";
    }

?>
</html>
