
let $cerrarSeccion = document.querySelector('#cerrar');
let $form = document.querySelector('#form')

$cerrarSeccion.style.cursor = "pointer";
$cerrarSeccion.addEventListener("click", function(event){
    event.preventDefault();
    $form.submit();
})

