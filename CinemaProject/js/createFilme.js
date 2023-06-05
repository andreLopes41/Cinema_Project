function validarCampos() {
    var nome = document.getElementById("nome");
    var genero = document.getElementById("genero");
    var duracao = document.getElementById("duracao");
    var distribuidor = document.getElementById("distribuidor");

    if (nome.value.length < 3 ) {

        alert("Nome inválido. Digite um nome com mais de 3 caracteres");
        return false;
    }

    if (genero.value.length < 4) {

        alert("Gênero Inválido. Digite um Gênero com mais de 4 caracteres");
        return false;
    }

    if (duracao.value < 1 || duracao.value > 999) {

        alert("Duração Inválida. Digite uma Duração entre 1 e 999 Minutos");
        return false;
    }

    if (distribuidor.value.length < 2) {

    alert("Distribuidor(a) Inválido(a). Digite um distribuidor(a) com no mínimo 2 digitos");
    distribuidor.value.focus();
    return false;
    }
}