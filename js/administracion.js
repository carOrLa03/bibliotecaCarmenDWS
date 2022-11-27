// VARIABLES PARA EL FORMULARIO DE USUARIOS
const btnNuevoUsuario = document.getElementById("newusuario");
const formUsuario = document.getElementById("form-usuario");
// VARIABLES PARA EL FORMULARIO DE PRESTAMO
const btnNuevoPrestamo = document.getElementById("nuevoPrestamo");
const btnEnviaPrestamo = document.getElementById("enviaprestamo");
const fP = document.getElementById("form-prestamo");
// variables para el formulario de insertar libros en la BBDD
const btnNuevolibro = document.getElementById("newlibro");
const btnEnviaLibro = document.getElementById("enviaLibro");
const formLibro = document.getElementById("form-libros");

// si clicko en nuevo USUARIO aparece, cuando lo envío desaparece
btnNuevoUsuario.addEventListener("click", (e) => {
  e.preventDefault();
  noverTablas();
  formUsuario.classList.remove("noVer");
  // si se ve el formulario de usuarios, los otros dos no se ven
  formLibro.classList.add("noVer");
  fP.classList.add("noVer");

  const btnEnviaUsuario = document.getElementById("enviaUsuario");
  btnEnviaUsuario.addEventListener("click", (e) => {
    e.preventDefault();
    formUsuario.classList.add("noVer");
  });
});

// si clicko en nuevo PRESTAMO aparece, cuando lo envío desaparece
btnNuevoPrestamo.addEventListener("click", (e) => {
  e.preventDefault();
  fP.classList.remove("noVer");
  // si se ve el formulario de prestamos, los otros dos no se ven
  formUsuario.classList.add("noVer");
  formLibro.classList.add("noVer");
  noverTablas();
});
btnEnviaPrestamo.addEventListener("click", (e) => {
  e.preventDefault();
  fP.classList.add("noVer");
});

// si clicko en nuevo libro aparece, cuando lo envío desaparece
btnNuevolibro.addEventListener("click", (e) => {
  e.preventDefault();
  formLibro.classList.remove("noVer");
  // si se ve el formulario de libros, los otros dos no se ven
  formUsuario.classList.add("noVer");
  fP.classList.add("noVer");
  noverTablas();
});
btnEnviaLibro.addEventListener("click", (e) => {
  e.preventDefault();
  formLibro.classList.add("noVer");
});

// BOTONES DE MOSTRAR
const mostrarUsuarios = document.getElementById("mostrarUsuarios");
const mostrarPrestamos = document.getElementById("mostrarPrestamos");
const mostrarMensajes = document.getElementById("mostrarMensajes");

mostrarUsuarios.addEventListener("submit", (e) => {
  nomostrar();
});
mostrarPrestamos.addEventListener("submit", (e) => {
  nomostrar();
});
mostrarMensajes.addEventListener("submit", (e) => {
  nomostrar();
});
function nomostrar() {
  formUsuario.classList.add("noVer");
  fP.classList.add("noVer");
  formLibro.classList.add("noVer");
}
const sectionMostrarTablas = document.getElementById("mostrarTablas");
function noverTablas() {
  sectionMostrarTablas.classList.add("noVer");
}
