var imcTable = [
    {acimade: 40,   class: "Obesidade grau 3"},
    {acimade: 35,   class: "Obesidade grau 2"},
    {acimade: 30,   class: "Obesidade grau 1"},
    {acimade: 25,   class: "Sobrepeso"},
    {acimade: 18.5, class: "Peso saudável"},
    {acimade: 0,    class: "Subnutrição"}
]

function insert(){
    let peso = document.getElementById("peso");
    let altura = document.getElementById("altura");

    if (peso.value <= 0  || altura.value <= 0) {
        alert('Insira todos os dados!');
        peso.value = "";
        altura.value = "";
        peso.focus();
    } else {
        peso = peso.value;
        altura = altura.value;
        let imc = peso/(altura*altura);
        let classificacao = "a";
        for (let i=0;i<6;i++) {
            if (imc > imcTable[i].acimade) {
                classificacao = imcTable[i].class;
                break;
            }
        }
        let minIdeal = 18.5*altura*altura;
        let maxIdeal = 24.9*altura*altura;
        document.getElementById("imc").innerHTML = `Seu IMC é de ${imc.toFixed(2)} e você está na categoria "${classificacao}"`;
        document.getElementById("intervalo").innerHTML = `Você deveria estar pesando entre ${minIdeal.toFixed(2)} e ${maxIdeal.toFixed(2)}`;
        $('#results').css("visibility", "visible");
    }
}

function restart() {
    document.getElementById("peso").value = "";
    document.getElementById("altura").value = "";
    $('#results').css("visibility", "hidden");
}