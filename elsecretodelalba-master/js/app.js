$(document).foundation()


var title = document.querySelector('#title');

var imagen = document.querySelector('#logo');

imagen.addEventListener('click', function(){

    function cambiarColor(){
        title.style.color='white';
    }
    cambiarColor();
});
