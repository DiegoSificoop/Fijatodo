"use strict";

(function () {

  var validanombre = function validanombre() {
    var n = nombre.value;
    if (n == "") {
      nombre.select();
    } else if (!/^[a-z-A-Z]+.+[a-z-A-Z]/.test(n)) {
      alert("Escriba su nombre correctamente. Evite espacios antes de escribir.");
      nombre.value = "";
    }
  };

  var correo = function correo() {
    var n = corr.value;
    if (n == "") {
      corr.select();
    } else if (!/^[a-z-0-9\.\_\-]+@+[a-z]+.+[a-z]/.test(n)) {
      alert("Escriba un correo electronico valido");
      corr.value = "";
    }
  };

  var validaform = function validaform(e) {
    if (nombre.value == "" || corr.value == "" || texto.value == "") {
      alert("Completa los campos antes de enviar");
      e.preventDefault();
    }
  };

  //Variables para validar formulario
  var formulario = document.getElementById('valform');
  formulario.addEventListener("submit", validaform);

  var nombre = document.getElementById('nombre');
  nombre.addEventListener("blur", validanombre);

  var corr = document.getElementById('email');
  corr.addEventListener("blur", correo);

  var texto = document.getElementById('texto');
})();