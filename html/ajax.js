'use strict'
var lastresponse = ""

function getPosts() {
   var http = new XMLHttpRequest();
   http.onreadystatechange = function () {
        if (lastresponse != http.responseText)
            $("#stories").html(http.responseText);
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
