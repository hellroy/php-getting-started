
     /* var title= document.getElementById("title").value;
      var desc= document.getElementById("desc").value;
      var burl= document.getElementById("burl").value;
      */

     
var bitly;
var url;

FB.init({
    appId: "564626746908994",
    status: true,
    cookie: true
});

//get id from URL
url = getUrlVars()["url"];
updateBitly(url);



function postToFeed() {
//Form values
var caption= document.getElementById("caption").value;

    // calling the API ...
    var obj = {
        method: 'feed',
        link: bitly,
        name: '',
        caption: caption,
        description: ''
    };

    function callback(response) {
        document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
    }
    FB.ui(obj, callback);
}

function postToTwitter() {
    var tweetContent = document.getElementById('turl').value;
    location.href = 'https://twitter.com/share?url=' + encodeURI(bitly) + "&text=" + encodeURI(document.getElementById('turl').value);
    document.getElementById('msg').innerHTML = bitly;
}

function updateBitly(url) {
    //if id is passed, bit.ly it
    if (!url){
    var url = document.getElementById("url").value;
    }
    $.getJSON('http://api.bit.ly/v3/shorten?format=json&login=o_35okf96d17&apiKey=R_e6284ea2bce3f6f9970a9d6b07a5a8b6&longUrl=' + url, function(data) {
    document.getElementById("burl").value = data.data.url;
         bitly = data.data.url;

     });

}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
        vars[key] = value;
    });
    return vars;
}