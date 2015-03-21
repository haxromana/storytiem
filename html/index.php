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
        Storee
    </h3>
    <form method="post" action="post.php" enctype="multipart/formdata">
        <input type="text" name="title" id="inputTitle" maxlength="80"
            placeholder="Enter a title for your story here"></input>
        <div class="expandingArea">
            <pre><span></span></pre>
            <input type="textarea" name="story" id="inputStory" maxlength="40000"
                placeholder="Enter your story here"></input>
        </div>

        <input type="submit" id="button" value="submit"></input>
    </form>
    <form method="link" action="story.php">
    <input type="submit" value="go to stories">
    </form>
</body>
</html>
