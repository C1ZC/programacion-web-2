var num1 = 10; //tipo entero
var num2 = 20; //tipo entero
var dec1 = 1.1; //tipo decimal
var dec2 = 2.2; //tipo decimal

function cfacto() {
  var numero = document.getElementById("nIngresado").value;
  var resultado = 1;
  for (var i = 1; i <= numero; i++) {
    resultado = resultado * i;
  }
  document.getElementById("tResultado").innerHTML = resultado;
}
function cEdad() {
  var edad = document.getElementById("iEdad").value;

  if (edad >= 18) {
    alert("mayor de edad");
  }
  if (edad < 18) {
    alert("menor de edad");
  }

}
