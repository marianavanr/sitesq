function sendMail() {
    var link = "mailto:me@example.com"
             + "?cc=myCCmvanrossum.dev@gmail.com"
             + "&subject=" + escape("This is my subject")
             + "&body=" + escape(document.getElementById('myText').value)
    ;

    window.location.href = link;
    
    onclick = sendMail(){
        alert("Obrigada por entrar em contato com a Salus!");
    }
       
}