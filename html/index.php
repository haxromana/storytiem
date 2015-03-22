<!doctype HTML>
<html>
<head>
    <meta charset="utf8">
    <title>storytiem!</title>
    <link rel="shortcut icon" type="image/x-icon" href="pics/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">        
    <script>
    function validate() {
        var title = $("#inputTitle");
        var txtarea = $("#inputStory");
        if (title.val().length < 4) {
            alert('title too short');
            return false;
        }
        if (txtarea.val().length < 144) {
            alert('post too short');
            return false;
        }
        return true;
    }
    </script>
</head>

<body>
    <h3>
        It's Storytiem
    </h3>
    <h5>
        
    </h5>
    <div id='post_form'>
    <form method="post" action="post.php" onsubmit="return validate()" enctype="multipart/formdata">
        <input type="text" name="title" id="inputTitle" maxlength="80"
            required title='3 characters minimum'
            placeholder="Enter a title for your story here"></input>
        <textarea name="story" id="inputStory" wrap='on' rows='4'
            required title='500 characters minimum'
            placeholder="Enter your story here"></textarea>
        <input type="submit" class="button" value="submit"></input>
    </form>
    <form method="link" action="story.php">
    <input type="submit" value="go to stories" class="button">
    </form>
    </div>
</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/logic.js"></script>
<script>
    $(document).ready(function () {
        fixTextareaWidth();
        $("h5").text(getHooks());
        errorMessage = "Please match the requested format.";
        $(window).resize(function(){
            fixTextareaWidth();
        });
});

    
</script>
