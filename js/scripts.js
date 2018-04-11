//javascript code for the typewriter
var word = "Welcome to our site";
var i = 0;
var timer = setInterval(function(){
    document.getElementById("head").innerHTML+=word[i];i++;if(i>word.length-1){clearInterval(timer)}
},100)