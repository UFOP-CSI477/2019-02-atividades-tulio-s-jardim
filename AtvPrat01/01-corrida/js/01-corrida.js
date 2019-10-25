var i = 0;
function insert(){
    let largada = document.getElementById("largada");
    let nome = document.getElementById("nome");
    let tempo = document.getElementById("tempo");

    if (largada.value == 0 || nome.value == '' || tempo.value <= 0) {
        alert('Insira todos os dados!');
    } else {
        let table = document.getElementById("tbody");
        let row = table.insertRow(i++);
        let tpos = row.insertCell(0);
        let tlarg = row.insertCell(1)
        let tnome = row.insertCell(2);
        let ttempo= row.insertCell(3);
        let tsit = row.insertCell(4);

        tpos.classList.add('class','clean-table');
        tsit.classList.add('class','clean-table');
        tlarg.innerHTML = largada.value;
        tnome.innerHTML = nome.value;
        ttempo.innerHTML = tempo.value;
    }
    
    largada.value = "0";
    nome.value = "";
    tempo.value = "";
    nome.focus();
}

function restart() {
    document.getElementById("largada").value = "0";
    document.getElementById("nome").value = "";
    document.getElementById("tempo").value = "";
    let tbody = document.getElementById("tbody");
    let table = document.getElementById("resultados");
    table.removeChild(tbody);
    tbody = document.createElement("tbody");
    tbody.id = "tbody";
    table.appendChild(tbody);
    i = 0;
}

function result() {
    
}