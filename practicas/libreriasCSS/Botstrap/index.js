// Definicion de variable
// tipo identificador = valor


// Imprimir en pantalla 
// console.log(valor) - consola
// alert([valor]) - ventana emergente navegador

/* Declaracion de funcion
function [nombreFuncion]([...Parametros]) {
    // codigo
}
*/

let persona = {
    nombre: "erick",
    edad: 21
} 

console.log(persona.nombre)

function suma() {
    let n1 = parseInt(document.getElementById('numero1').value)
    let n2 = parseInt(document.getElementById('numero2').value)
    alert(n1 + n2)
}

function copyNumber1() {
    
    let numero1 = document.getElementById('numero4').value
   
    let copia = document.getElementById('numero3')
    copia.innerHTML = numero1
}

// Document.getElementById([nameId]).value