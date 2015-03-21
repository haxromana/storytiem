function voteClicked(elmt) {
    if (elmt.id === "topVoteButton") {
        if(elmt.className === "orangeUpvote") {
            elmt.className = "grayUpvote";
            //Un-Upvote post
        }
        else if(document.getElementById("bottomVoteButton").className === "grayDownvote") {
            elmt.className = "orangeUpvote";
            //Upvote post
        }
    }
    else if(elmt.id === "bottomVoteButton"){
        if(elmt.className === "blueDownvote") {
            elmt.className = "grayDownvote";
            //Un-Downvote post
        }
        else if(document.getElementById("topVoteButton").className === "grayUpvote") {
            elmt.className = "blueDownvote";
            //Downvote post
        }
    }
}