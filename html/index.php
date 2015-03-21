<!doctype HTML>
<head>
    <meta charset="utf8">
    <title>storytiem!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">        
</head>

<body>
    <h3>
        Storeeeeee
    </h3>
    <form method="post" action="post.php">
        THIS IS WHERE THE TITLE GOES
        <input type="text" id="inputTitle" maxlength="80" placeholder="THIS IS WHERE THE TITLE GOES"></input>
        THIS IS WHERE THE STORY GOES
        <input type="textarea" id="inputStory" maxlength="40000" placeholder="THIS IS WHERE THE STORY GOES"></input>
        
        <input type="submit" id="button"></input>
    </form>
    <div id="stories">
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/logic.js"></script>
</body>
