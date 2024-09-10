function validarcampos() {

    var titulo = document.getElementById("titulo").value;
    var genero = document.getElementById("genero").value;
    var qtdpag = document.getElementById("qtdpag").value;

    //Validar se o campo foi preenchido

    if(titulo.trim() == "") {
        alert("Preencha o título do livro!");
        return false;
    }

    if(genero.trim() == "") {
        alert("Preencha Tipo de Genero!");
        return false;
    }

    if(qtdpag.trim() == "") {
        alert("Preencha a Quantidade Páginas");
        return false;
    }
    /*
    console.log(titulo);
    console.log(genero);
    console.log(qtdpag);
    */


    return true;
}
