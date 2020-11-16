function validacionForm() {

    var valor1 = document.getElementById('1').value;
    var valor2 = document.getElementById('2').value;
    var valor3 = document.getElementById('3').value;
    var valor4 = document.getElementById('4').value;

    if (valor1 == "" || valor2 == "" || valor3 == "" || valor4 == "") {
        document.getElementById('1').style.borderColor = "red";
        document.getElementById('2').style.borderColor = "red";
        document.getElementById('3').style.borderColor = "red";
        document.getElementById('4').style.borderColor = "red";

        var numero
        var letr
        var letra
        var expresion_regular_valor3
      
        expresion_regular_valor3 = /^\d{8}[a-zA-Z]$/;
      
        if(expresion_regular_valor3.test (valor3) == true){
          numero = valor3.substr(0,valor3.length-1);
          letr = valor3.substr(valor3.length-1,1);
          numero = numero % 23;
          letra='TRWAGMYFPDXBNJZSQVHLCKET';
          letra=letra.substring(numero,numero+1);
          if (letra!=letr.toUpperCase()) {
            alert('Dni erroneo, la letra del NIF no se corresponde');
            return false;
          }else{
            alert('Dni correcto,participante inscrito');
            return true;
          }
        }else{
          alert('Dni erroneo, formato no válido');
          return false;
        }
    }

    var numero
    var letr
    var letra
    var expresion_regular_valor3
   
    expresion_regular_valor3 = /^\d{8}[a-zA-Z]$/;
   
    if(expresion_regular_valor3.test (valor3) == true){
       numero = valor3.substr(0,valor3.length-1);
       letr = valor3.substr(valor3.length-1,1);
       numero = numero % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(numero,numero+1);
      if (letra!=letr.toUpperCase()) {
         alert('Dni erroneo, la letra del NIF no se corresponde');
         return false;
       }else{
         alert('Dni correcto,participante inscrito');
         return true;
       }
    }else{
       alert('Dni erroneo, formato no válido');
       return false;
       
     }

}

