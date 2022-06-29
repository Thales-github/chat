let formulario = document.querySelector(".formulario");
formulario.addEventListener("submit", function (event) {
    event.preventDefault();

    let ajax = new XMLHttpRequest();
    ajax.open("post", "../chat/php/gravaMensagem.php");

    ajax.send(new FormData(formulario));

});

let painelMensagens = document.querySelector(".chat");

function recuperarDados() {

    let painelMensagens = document.querySelector(".chat");

    let ajax = new XMLHttpRequest();
    ajax.open("get", "../chat/php/recuperaMensagens.php");

    ajax.onload = function () {
        let mensagens = JSON.parse(ajax.responseText);
        //console.log(mensagens);

        painelMensagens.innerHTML = "";
        mensagens.forEach(element => {

            painelMensagens.innerHTML += `${element.MEN_USUARIO} : ${element.MEN_CONTEUDO} \n <br />`;
        });
    }
    ajax.send();
}

setInterval(function () { recuperarDados(); }, 1000);