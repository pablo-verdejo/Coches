function validacionForm() {

  var nombre = document.getElementById('nombre').value;
  var apellido = document.getElementById('apellido').value;
  var dni = document.getElementById('dni').value;
  var nacimiento = document.getElementById('nacimiento').value;

  if (nombre == "" || apellido == "" || dni == "" || nacimiento == "") {
    document.getElementById('nombre').style.borderColor = "red";
    document.getElementById('apellido').style.borderColor = "red";
    document.getElementById('dni').style.borderColor = "red";
    document.getElementById('nacimiento').style.borderColor = "red";

    var numero
    var letr
    var letra
    var expresion_regular_dni

    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

    if (expresion_regular_dni.test(dni) == true) {
      numero = dni.substr(0, dni.length - 1);
      letr = dni.substr(dni.length - 1, 1);
      numero = numero % 23;
      letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
      letra = letra.substring(numero, numero + 1);
      if (letra != letr.toUpperCase()) {
        alert('Dni erroneo, la letra del NIF no se corresponde');
        return false;
      } else {
        alert('Dni correcto,participante inscrito');
        return true;
      }
    } else {
      alert('Dni erroneo, formato no válido');
      return false;
    }
  }

  var numero
  var letr
  var letra
  var expresion_regular_dni

  expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

  if (expresion_regular_dni.test(dni) == true) {
    numero = dni.substr(0, dni.length - 1);
    letr = dni.substr(dni.length - 1, 1);
    numero = numero % 23;
    letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
    letra = letra.substring(numero, numero + 1);
    if (letra != letr.toUpperCase()) {
      alert('Dni erroneo, la letra del NIF no se corresponde');
      return false;
    } else {
      alert('Dni correcto,participante inscrito');
      return true;
    }
  } else {
    alert('Dni erroneo, formato no válido');
    return false;

  }

}

