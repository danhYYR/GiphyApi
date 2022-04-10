 var userInput = document.getElementById("email")
function comment(){
    var comment = document.createElement("p")
    comment.innerHTML="Email: "+userInput.value
    document.body.appendChild(comment)
}