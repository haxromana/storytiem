'use strict'
function getPosts() {
   http = new XMLHttpRequest();
   http.onReadyStateChange = function () {
       document.getElementById("stories").innerHTML = http.responseText
   }
   http.open("GET", "getstories.php", true);
   http.send()
}
function updatePosts() {
    getPosts();
    showStory();
    setTimeout(updatePosts, 5000);
}
