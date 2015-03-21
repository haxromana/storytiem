<?php
	$conn = pg_connect("host=localhost dbname=storytiem user=ras password='john madden'");
	if ($_POST) {
		extract($_POST);
        $id = hash("md5", $inputTitle . $inputPost);
        
		$sql = "insert into posts(post, title, score, id) values ('$inputPost', '$inputTitle', 0, '$id')";
		pg_query($sql);
		header( 'Location: index.php');	
	}
