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
    <div class="votes" id="votes">
        <div class="grayUpvote" id="topVoteButton" onClick="voteClicked(this);"></div>
        <div class="grayDownvote" id="bottomVoteButton" onClick="voteClicked(this);" ></div>
    </div>

    <div id='stories'>
        <div id="sample" class="story" position="relative" style="">

            <div class="title">stuff</div>
            <div class="date">now</div>
            <div class="post">cool</div>
        </div>
    </div> 
</body>
<script src="https://github.com/typicaljoe/taffydb/raw/master/taffy.js"></script>
<script src='js/jquery.js'></script>
<script src='js/taffydb.js'></script>
<script src='js/logic.js'></script>
<script src='ajax.js'></script>
<script>    
$(document).ready(function () {
    getPosts();
    $(".greyUpvote, markedDownvote").click(function() {
        var ID = $(this).parent().attr('id');
        $.ajax({
            type: 'POST',
            url: 'upvote.php',
            data: {ID : ID},
            success: function(data){
                alert("DID IT!");
            }
        });
    });
    $(".greyDownvote, markedUpvote").click(function() {
        var ID = $(this).parent().attr('id');
        $.ajax({
            type = 'POST',
            url: 'downvote.php',
            data: {ID : ID},
            success: funciton(data){
                alert("DID IT!");
            }
        });
    });
});
</script>
</html>
