const btnNuevoUsuario = document.getElementById("newusuario");
const formUsuario = document.getElementById("form-usuario");
const btnEnviaUsuario = document.getElementById("enviaUsuario");
btnNuevoUsuario.addEventListener("click", (e) => {
  e.preventDefault();
  formUsuario.classList.remove("noVer");
});
btnEnviaUsuario.addEventListener("click", (e) => {
  formUsuario.classList.add("noVer");
});

const btnNuevoPrestamo = document.getElementById("newprestamo");
const btnEnviaPrestamo = document.getElementById("enviaprestamo");
const formPrestamo = document.getElementById("form-prestamo");
btnNuevoPrestamo.addEventListener("click", (e) => {
  e.preventDefault();
  formPrestamo.classList.remove("noVer");
});
btnEnviaPrestamo.addEventListener("click", (e) => {
  e.preventDefault();
  formPrestamo.classList.add("noVer");
});
