function inserir(){
   let nome = document.getElementById("inputNome").value;
   let ordenado = nome.toUpperCase().split('').sort().join('');
   document.getElementById("tabela").innerHTML = document.getElementById("tabela").innerHTML + "<tbody><tr> <td>" + nome + "</td> <td>" + ordenado + "</td> </tr></tbody>"
}

function remover(){
   var table = document.getElementById("tabela").deleteRow(1);
}