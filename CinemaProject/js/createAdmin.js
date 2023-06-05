function validarCampos() {
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");

    if (nome.value.length < 3 ) {

        alert("Nome inválido. Digite um nome com mais de 3 caracteres");
        return false;
    }

    if (email.value.length < 8) {

        alert("Email inválido. Digite um Email com mais de 8 caracteres");
        return false;
    }

    if (senha.value.length < 4 || senha.value.length > 18) {

        alert("Senha inválida. Digite uma Senha entre 4 e 18 caracteres");
        return false;
    }

}