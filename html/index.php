<!doctype HTML>
<html>
<head>
    <meta charset="utf8">
    <title>storytiem!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">        
</head>

<body>
    <h3>
        Storeeeeee
    </h3>
    <form method="post" action="post.php" enctype="multipart/formdata">
        THIS IS WHERE THE TITL GOES
        <input type="text" name="title" id="inputTitle" maxlength="80" placeholder="THIS IS WHERE THE TITLE GOES"></input>
        THIS IS WHERE THE STORY GOES
        <input type="textarea" name="story" id="inputStory" maxlength="40000" placeholder="THIS IS WHERE THE STORY GOES"></input>
        
        <input type="submit" id="button" value="submit"></input>
    </form>
    <form method="link" action="story.php">
    <input type="submit" value="go to stories">
    </form>
</body>
</html>
