let nome = prompt("Insira seu nome:")
alert("Seja bem-vindo a CALCULADORA, " + nome + "!")

let v1 = prompt("Insire o primeiro valor:")
let op = prompt("Insira o símbolo da operação que deseja realizar:")
let v2 = prompt("Insira o segundo valor:")

if(op === "+"){
    alert(nome + ", o resultado da sua operação é: " + (parseInt(v1) + parseInt(v2)))
}else {
    if(op === "-"){
        alert(nome + ", o resultado da sua operação é: " + (parseInt(v1) - parseInt(v2)))
    }else{
        if(op === "*"){
            alert(nome + ", o resultado da sua operação é: " + (parseInt(v1) * parseInt(v2)))
        }else{
            if(op === "/"){
                alert(nome + ", o resultado da sua operação é: " + (parseInt(v1) / parseInt(v2)))
            }else{
                alert("Operador inválido!")
            }
        }
    }
}