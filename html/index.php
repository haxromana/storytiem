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
    <h5>
        
    </h5>
    <div id='post_form'>
    <form method="post" action="post.php" enctype="multipart/formdata">
        <input type="text" name="title" id="inputTitle" maxlength="80"
            placeholder="Enter a title for your story here"></input>
        <textarea name="story" id="inputStory" wrap='on' rows='4'
            placeholder="Enter your story here"></textarea>

        <input type="submit" class="button" value="submit"></input>
    </form>
    <form method="link" action="story.php">
    <input type="submit" value="go to stories" class="button">
    </form>
    </div>
    <div class="orangeUpvote"></div>
</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/logic.js"></script>
<script>
    $(document).ready(function () {
        fixTextareaWidth();
        $("h5").text(getHooks());
    });
    
</script>
