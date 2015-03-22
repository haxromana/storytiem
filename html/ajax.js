'use strict'
var lastresponse = ""
var stories_per_page = 10;

function getPosts() {
   var http = new XMLHttpRequest();
   http.onreadystatechange = function () {
        if (lastresponse != http.responseText) {
            $("#stories").html(http.responseText);
            loadStories();
            showStory(0);
        }
        lastresponse = http.responseText
   }
   http.open("GET", "getstories.php", true);
   http.send()
}

function getPostsRecent() {
   var http = new XMLHttpRequest();
   http.onreadystatechange = function () {
        if (lastresponse != http.responseText) {
            $("#stories").html(http.responseText);
            loadStories();
            for (var i = 0; i < stories.length && i < stories_per_page; i++) {
                showStory(i);
            }
        }
        lastresponse = http.responseText
   }
   http.open("GET", "getstories.php", true);
   http.send()
}

function getPostsTop() {
   var http = new XMLHttpRequest();
   http.onreadystatechange = function () {
        if (lastresponse != http.responseText) {
            $("#stories").html(http.responseText);
            loadStories();
            for (var i = 0; i < stories.length && i < stories_per_page; i++) {
                showStory(i);
            }
        }
        lastresponse = http.responseText
   }
   http.open("GET", "gettopstories.php", true);
   http.send()
}

function getRandomPosts() {
   var http = new XMLHttpRequest();
   http.onreadystatechange = function () {
        if (lastresponse != http.responseText) {
            $("#stories").html(http.responseText);
            loadStories();
            var n = randomStory();
            showStory(n);
            addReadStory(n);
        }
        lastresponse = http.responseText
   }
   http.open("GET", "getstories.php", true);
   http.send()
}

function jAjax() {
    var response
    $.ajax({
        url: "getstories.php"
    }).done(function (html) {
        response = html
        $("#stories").append(html);
    });
    return response
}

function updatePosts() {
    getPosts();
    showStory();
    setTimeout(updatePosts, 30000);
}
