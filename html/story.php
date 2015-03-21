<!doctype HTML>
<html>
<head>
    <meta charset="utf8">
    <title>storytiem!</title>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>                   
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h3>
        Stories
    </h3>

<div id='stories'>
<?php  
    $conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    $sql = 'select * from posts order by time desc;';
    $result = pg_query($sql);
    for ($i = 0; $i < pg_num_rows($result); $i++) {
        pg_result_seek($result, $i);
        $row = pg_fetch_assoc($result);
        echo "<div class='story' style='display:block' id='" . $row['id'] . "'>\n";
        echo nl2br(htmlentities($row['title'])) ."\n<br>\n" . nl2br(htmlentities($row['post'])) . "<br>";
        if ($row['id'] == $_COOKIE["auth"]) {
            echo "(you)";
        }
        echo "</div>\n";
    }

?>
</div>

</body>
<script src='js/jquery.js'></script>
<script src='js/logic.js'></script>
<script src='ajax.js'></script>
<script>    
    updatePosts()
</script>
</html>
