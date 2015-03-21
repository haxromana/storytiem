<!doctype HTML>
<html>
<head>
    <meta charset="utf8">
    <title>storytiem!</title>
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

    <div class="grayUpvote" id="topVoteButton" onClick="voteClicked(this);"></div>
    <div class="grayDownvote" id="bottomVoteButton" onClick="voteClicked(this);"></div>
</body>
<script src='js/jquery.js'></script>
<script src='js/logic.js'></script>
<script src='ajax.js'></script>
<script>    
$(document).ready(function () {
    getPosts();
    $(".greyUpvote").click(function() {
        var ID = $(this).parent().attr('id');
        $.ajax({
            type = 'POST',
            url: 'upvote.php',
            data: {ID : ID},
            success: funciton(data){
                alert("DID IT!");
            }
        });
    });
    $(".greyDownvote").click(function() {
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
