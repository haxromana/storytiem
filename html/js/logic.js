var stories 
var snum = 0;

function loadStories() {
    stories = $(".story");
    return stories;
}

function downvote() {
    
}

function fixTextareaWidth() {
    $("#inputStory").width($("#inputTitle").width());
}

function showNext() {
    snum++;
    return showStory(snum);
}

function showStory(n) {
    snum = n;
    $(stories[n]).show();
    return $(stories[n]);
}

function removeReadStories() {
    for (i = 0; i < stories.length; i++) {
        if (isReadStory(i)) {
            $(stories[n]).remove();
        }
    }
    return loadStories();
}

function randomStory() {
    var probabilityArray = new Array(stories.length);
    var isReadStoryArray = new Array(stories.length);
    var probSum = 0; // will be used as max for random number generator
    for (i = 0; i < stories.length; i++) {
        if (!isReadStory(i)) {
            var score = $(stories[n]).attr('score');
            var age = time() - $(stories[n]).attr('time');
            var lifespan = 
            probSum[i] += (score+5)()
            isReadStoryArray[i] = false;

            $(stories[n]).remove();
        }
    }
}

function getHooks() {
    var hooks = ["Collective stories about the human condition",
                     "Speak friend and enter...",
                     "After nourishment, shelter and companionship, stories are the thing we need most in the world.",
                     "The more you leave out, the more you highlight what you leave in.",
                     "Of course it is happening inside your head, Harry, but why on earth should that mean that it is not real?",
                     "John Madden, John Madden, John Madden",
                     "Artists use lies to tell the truth. Yes, I created a lie. But because you believed it, you found something true about yourself.",
                     "By telling stories, you objectify your own experience. You separate it from yourself. You pin down certain truths. You make up others.",
                     "Call me Ishmael...",
                     "It was the best of times. It was the worst of times.",
                     "This here's a story all about how my life got flipped, turned upside down."]
    return hooks[Math.floor(Math.random()*(hooks.length))];
}

    


