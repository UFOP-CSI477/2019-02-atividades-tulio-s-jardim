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
        let tlarg = row.insertCell(1);
        let tnome = row.insertCell(2);
        let ttempo= row.insertCell(3);
        let tres = row.insertCell(4);

        tpos.classList.add('class','clean-table');
        tpos.classList.add('class', 'trPos');
        tlarg.classList.add('class', 'trLarg');
        tnome.classList.add('class', 'trNome');
        ttempo.classList.add('class', 'trTempo');
        tres.classList.add('class','clean-table');
        tres.classList.add('class', 'trRes');
        tlarg.innerHTML = largada.value;
        tnome.innerHTML = nome.value;
        ttempo.innerHTML = tempo.value;
        tres.innerHTML = "-";
        $("#largada option:selected").remove();
        $('#results').css("visibility", "visible");
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
    $('.clean-table').css("display", "none");

    $("#largada option").remove();
    $("#largada").append("<option selected disabled value='0'>Escolha uma posição de largada</option>");
    for(let j=1; j<=6; j++) {
        $("#largada").append("<option value='" + j + "'>" + j + "</option>");
    }
    $('#results').css("visibility", "hidden");
}

function result() {
    $('.clean-table').css("display", "block");
    var competidores = []
    $('#tbody tr').each(function() {
        competidores.push(
            {
                posicao: 0,
                largada: $(this).find(".trLarg").html(),
                nome: $(this).find(".trNome").html(),
                tempo: $(this).find(".trTempo").html(),
                resultado: '-'
            }
        );
     });
    competidores.sort(sortTempo);
    let j = 0;
    competidores.forEach(e => {
        e.posicao = j+1;
        if(j==0) {e.resultado = "Vencedor(a)!"}
        j++;
    });
    j = 0;
    $('#tbody tr').each(function() {
        $(this).find(".trPos").html(competidores[j].posicao);
        $(this).find(".trLarg").html(competidores[j].largada);
        $(this).find(".trNome").html(competidores[j].nome);
        $(this).find(".trTempo").html(competidores[j].tempo);
        $(this).find(".trRes").html(competidores[j].resultado);
        j++;
        console.log(competidores[j])
     });
}


function sortTempo(a, b){
    var aTempo = a.tempo;
    var bTempo = b.tempo;
    return ((aTempo == bTempo && a.largada > b.largada)?-1:((aTempo < bTempo)?-1:1));
}