alert('Olá')

var my_var
my_var = 'Olá Pessoal'
alert(my_var)
my_var = 5
alert(my_var)
my_var = [1,10.2,'Olá',true]
alert(my_var)

function my_func(){
    alert('Eu disse para não clicar')
}

var my_button1 = document.getElementById('ElProibido')
my_button1.onclick = function(){
    alert("Teimoso tu em")
}

var myName = prompt('Por favor, digite seu nome:')
var myHeading = document.querySelector('h1')
myHeading.textContent = 'Bem vindo, ' + myName

var my_button2 = document.getElementById('mudaCor')
my_button2.onclick = function (){
    var myColor = prompt("Digite a nova cor do fundo em inglês: ")
    myHeading.style.backgroundColor = myColor
}