<!doctype HTML>
<head>
<meta charset="utf8">
</head>
<?php
	$conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    
    if ($_POST) {
        
        extract($_POST);
        $date = date();
        $id = hash("md5", $story . $date);
        setcookie("auth", $id, time()+3600);
        $story = pg_escape_string($story);
        $title = pg_escape_string($title);
		$sql = "insert into posts(post, title, score, id, time) values"
            . "('$story', '$title', 0, '$id', '$date')";
        $result = pg_query($conn, $sql);
        if ($result == FALSE) {
            echo "<br>" . pg_last_error();
        }
		header('Location: story.php');	
	}
    else {
        echo "no post data received";
    }
?>
