var richterTable = [
    {acimade: 8,   class: "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros."},
    {acimade: 7,   class: "Grande terremoto. Pode causar sérios danos numa grande faixa."},
    {acimade: 6.1, class: "Pode ser destrutivo em áreas até 100km do epicentro."},
    {acimade: 5.5, class: "No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas."},
    {acimade: 3.5, class: "Às vezes sentido, mas raramente causa danos."},
    {acimade: 0,   class: "Geralmente não sentido, mas gravado."}
]

function insert(){
    let amplitude = document.getElementById("amplitude");
    let intervalo = document.getElementById("intervalo");

    if (amplitude.value <= 0  || intervalo.value <= 0) {
        alert('Insira todos os dados!');
        amplitude.value = "";
        intervalo.value = "";
        amplitude.focus();
    } else {
        amplitude = amplitude.value;
        intervalo = intervalo.value;
        let magnitude = Math.log10(amplitude)+3*Math.log10(8*intervalo)-2.92;
        let classificacao = "a";
        for (let i=0;i<6;i++) {
            if (magnitude > richterTable[i].acimade) {
                classificacao = richterTable[i].class;
                break;
            }
        }
        document.getElementById("magnitude").innerHTML = `O terremoto é de magnitude ${magnitude.toFixed(2)}.</br>${classificacao}`;
        $('#results').css("visibility", "visible");
    }
}

function restart() {
    document.getElementById("amplitude").value = "";
    document.getElementById("intervalo").value = "";
    $('#results').css("visibility", "hidden");
}