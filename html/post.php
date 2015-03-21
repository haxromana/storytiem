<?php
	$conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    
    if ($_POST) {
        
        extract($_POST);
        $id = hash("md5", $story . date());
        setcookie("auth", $id, time()+3600);
		$sql = "insert into posts(post, title, score, id) values ('$story', '$title', 0, '$id')";
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
<form method="link" action="story.php">
    <input type="submit" value="go to stories">
    </form>
