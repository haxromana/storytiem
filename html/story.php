<!doctype HTML>
<html>
<head>
    <meta charset="utf8">
    <title>It's Storytiem!</title>
    <link rel="shortcut icon" type="image/x-icon" href="pics/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>                   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src='js/click.js'></script>
</head>

<body>
    <h3>
        Stories
    </h3>
    <div id='stories'>
    </div>

    <form method="link" action="story.php">
        <input type="submit" value="see the next story" class="button">
    </form>


    <form method="link" action="index.php">
        <input type="submit" value="post another" class="button">
    </form>

</body>
<script src="https://github.com/typicaljoe/taffydb/raw/master/taffy.js"></script>
<script src='js/jquery.js'></script>
<script src='js/taffydb.js'></script>
<script src='js/logic.js'></script>
<script src='ajax.js'></script>
<script>    
$(document).ready(function () {
    getRandomPosts();
});

    function upvote() {
        console.log("upvoted");
        var id = getId();
        console.log("upvoting " + id);
        $.ajax({
            type: 'POST',
            url: 'upvote.php',
            data: {ID : id},
            success: function(data){
                console.log("succeedeed");
            }
        })
    }

    function downvote() {
        console.log("downvote");
        var ID = $(this).parent().attr('id');
        $.ajax({
            type: 'POST',
            url: 'downvote.php',
            data: {ID : ID},
            success: function(data){
                alert("DID IT!");
            }
        });
    }
    alert("YAY");
</script>
</html>
