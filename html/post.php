<?php
	$conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
    echo "connected";
    if ($_POST) {
        echo 'post data received';
        print_r($_POST);
        extract($_POST);
        $id = hash("md5", $story . date());
        
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
