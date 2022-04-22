function inserir(nome, profissao){
   var table = document.getElementById("tabela");
   var nLinhas = table.rows.length;
   var linha = table.insertRow(nLinhas);

   var cellNome = linha.insertCell(0);
   var cellProfissao = linha.insertCell(1);
   
   cellNome.innerHTML = nome;
   cellProfissao.innerHTML = profissao;
}