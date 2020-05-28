function repeatExercice(){
  location.reload();
}

function screenBlack(){
   var word = document.getElementById("word"); 
   var word_select = document.getElementById("word_select"); 
   var serch_word = document.getElementById("serch_word"); 
   var gameScreen  = document.getElementById("gameScreen");
   gameScreen.style.backgroundColor = "#303030";
   word.style.color = "#fff"; 
   word_select.style.color = "#fff"; 
   serch_word.style.color = "#fff"; 
}

function screenWhite(){
   var word = document.getElementById("word"); 
   var word_select = document.getElementById("word_select"); 
   var serch_word = document.getElementById("serch_word"); 
   var gameScreen  = document.getElementById("gameScreen");
   gameScreen.style.backgroundColor = "#fff";
   word.style.color = "#000"; 
   word_select.style.color = "#000"; 
   serch_word.style.color = "#000"; 
}

