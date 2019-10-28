var questao1 = [
    {resposta: "b", a: "Arroz", b: "Sabonete", c: "Feijão", d: "Batata"},
    {resposta: "c", a: "Bicicleta", b: "Carro", c: "Algodão Doce", d: "Moto"},
    {resposta: "d", a: "Óculos", b: "Cadeira de praia", c: "Sombrinha", d: "Máquina de lavar"},
    {resposta: "b", a: "Bola", b: "Skate", c: "Patins", d: "Chave de fenda"}
]
var i = 0;
var acertos = 0;
function insert(){
    let resposta = $('input[name=questao-01]:checked').val();
    if (resposta == null) {
        alert('Escolha uma resposta!');
    } else {
        if (questao1[i].resposta = resposta) {acertos++}
        i++;
        if (i == questao1.length) {
            $('#questao').css('display', 'none');
            $('#questao2').css('display', 'block');
        } else {
            $('#questao img').attr("src", `img/questao1/${i}.jpg`);
            $('#label-a').html(questao1[i].a);
            $('#label-b').html(questao1[i].b);
            $('#label-c').html(questao1[i].c);
            $('#label-d').html(questao1[i].d);
            $('input[name=questao-01]').prop('checked', false);
        }
    }
}

function result() {
    if($('#questao-02-a').val() == 0 || $('#questao-02-b').val() == 0 || $('#questao-02-c').val() == 0 || $('#questao-02-d').val() == 0) {
        alert('Escolha todas as respostas!');
    } else {
        if($('#questao-02-a').val() == 1) {i++}
        if($('#questao-02-b').val() == 1) {i++}
        if($('#questao-02-c').val() == 1) {i++}
        if($('#questao-02-d').val() == 1) {i++}
        $('#questao2').css('display', 'none');
        $('#results').css('visibility', 'visible');
        $('#results').css('display', 'block');
        $('#pontuacao').html(`Parabéns! Você acertou ${i} de ${questao1.length+4} perguntas!`);
    }
}

function restart() {
    i = 0;
    $('#questao').css('display', 'block');
    $('#results').css('display', 'none');
    $('#questao img').attr("src", `img/questao1/${i}.jpg`);
    $('#label-a').html(questao1[i].a);
    $('#label-b').html(questao1[i].b);
    $('#label-c').html(questao1[i].c);
    $('#label-d').html(questao1[i].d);
    $('#questao-02-a').val('0');
    $('#questao-02-b').val('0');
    $('#questao-02-c').val('0');
    $('#questao-02-d').val('0');
    $('input[name=questao-01]').prop('checked', false);
}