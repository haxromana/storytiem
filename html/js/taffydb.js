var readStories = TAFFY();
readStories.store("readStories");

// invoked whenever "submit"/"go to stories"/"new story" is clicked
function addReadStory(n) {
    readStories.insert({id:$(stories[n]).attr('id')});
}

function isInTaffyDB(n) {
	return readStories({id:$(stories[n]).attr('id')}).count();
}


