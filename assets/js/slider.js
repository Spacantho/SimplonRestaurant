var counter = 1;

window.onload = function(){
    changerimage();
}

setInterval(function() {
    changerimage()
}, 5000);

function changerimage(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}