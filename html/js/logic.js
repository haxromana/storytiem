var stories 

function loadStories() {
    stories = $(".story")
}

function fixTextareaWidth() {
    $("#inputStory").width($("#inputTitle").width());
}

function canSee() {
    
}


function showStory() {
    $('.story').show()
}

function getHooks() {
    var hooks = {"Collective stories about the human condition",
                     "Speak friend and enter...",
                     "After nourishment, shelter and companionship, stories are the thing we need most in the world.",
                     "The more you leave out, the more you highlight what you leave in.",
                     "Of course it is happening inside your head, Harry, but why on earth should that mean that it is not real?",
                     "John Madden, John Madden, John Madden",
                     "Artists use lies to tell the truth. Yes, I created a lie. But because you believed it, you found something true about yourself.",
                     "By telling stories, you objectify your own experience. You separate it from yourself. You pin down certain truths. You make up others.",
                     "Call me Ishmael...",
                     "It was the best of times. It was the worst of times.",
                     "This here's a story all about how my life got flipped, turned upside down."}
    return hooks[Math.floor(Math.random()*(hooks.length+1))];
}

    


