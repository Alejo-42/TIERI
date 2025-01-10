const $abrir = document.querySelector("#BtnAbrir")
const $cerrar = document.querySelector(".BtnCerrar")
const $inicio = document.querySelector(".inicio")

function abrir() {
    $inicio.classList.add("visible")
    $abrir.classList.add("ocultar")
}
function cerrar() {
    $inicio.classList.remove("visible")
    $abrir.classList.remove("ocultar")
}
$abrir.addEventListener("click",abrir)
$cerrar.addEventListener("click",cerrar)

window.addEventListener('scroll', () => {
    const button = document.querySelector('.login-button');
    if (window.scrollY >= document.body.scrollHeight - window.innerHeight) {
      button.style.opacity = 1;
    } else {
      button.style.opacity = 0;
    }
  });