let tarefas = []
let paragrafo = document.querySelector("#tarefas")


let existeTarefa = (novaTarefa) => {
    for (t of tarefas) {
        if (t === novaTarefa)
            return true
    }
    return false
}
let listaTarefas = () => {
    paragrafo.innerHTML = ""
    let i = 0

    while (tarefas[i]) {
        paragrafo.innerHTML += '<p><label><input type="checkbox" value="' + tarefas[i]+'"class="checkTarefa">'+tarefas[i]+'</label></p>'
        i++
    }
}

let limpar = () => {
    if (tarefas.length != 0){
        tarefas = []
        listaTarefas()
        document.querySelector("#novaTarefa").value = ``
    }else{
        alert("Lista vazia!")
    }
}

let adicionarTarefa = () => {
    let novaTarefa = document.querySelector("#novaTarefa").value

    if (novaTarefa === "") return

    if (!existeTarefa(novaTarefa)){
        tarefas.push(novaTarefa)
        listaTarefas()
    }else{
        alert("Tarefa existente!")
    }
    document.querySelector("#novaTarefa").value = ``

}

let apagarTarefa = () => {
    let confer = false
    let listaCheckbox = document.getElementsByClassName("checkTarefa")
    for (check of listaCheckbox){
        if (check.checked) {
            confer = true
            tarefas = tarefas.filter((item) => { return item != check.value })
        }
    }if (confer == false) {
        alert("Nenhuma tarefa selecionada!")
        }
    listaTarefas()
}

let editarTarefa = () => {
    let allCheck = document.querySelectorAll(".checkTarefa")
    let newTask = document.querySelector("#novaTarefa").value
    let aux1 = 0
    let aux2 = 0
    for (let check of allCheck){
        if (check.checked){
            aux1++
        }
    }if (aux1 != 1 || newTask == ''){
        alert(" Multiplas tarefas selecionadas / nenhuma tarefa selecioanda / o campo em branco!")
    }else{
        for (let check of allCheck){
            if (check.checked && check.value != newTask.value){
                tarefas[aux2] = newTask
            }aux2++
        }listaTarefas()
    }
}

let selecionarTarefas = () => {
    let allCheck = document.querySelectorAll(".checkTarefa")
    for (let check of allCheck){
        if (!check.checked){
            check.checked = !check.checked
        }
    }
}