console.log('Hello World');

//Funciones

let myFunction = function(){

 console.log( 'Ejecuto la funcion ' )   //Esta es la mejor manera de realizar una funcion
 
}

function myNamedFunction(){
    console.log('Ejecuto la funcion con nombre')
}

myFunction()

mynamedFunction()

const HELLO = ' Hello, '

let messageElement = document.getElementById('message')
let inputElement = document.getElementById('name')
let buttonElement = document.getElementById('sendButton')

const sendHandler = function(event){
    messageElement.innerHTML = HELLO + inputElement.value
    console.log(event)
}

buttonElement.onclick = sendHandler

console.log(messageElement.innerHTML)

messageElement.innerHTML += ' Clase' 


// Variables

var mal = ' Ya no se usa ' 

let bien = ' Variable de contexto que esta bien'  
 
const bientb = ' Valor que nunca se modifica ' 



//Objetos

let myObject ={
    propiedad1: 'valor1 ', 
    propiedad2: 'valor2 ',
    propiedad3: 'valor3 ' 
}

console.log(myObject)

//Listas

let myList = [ 'un string ', 4, myObject ]

myList.pop

console.log(myList)