var link = '<p>Escuta esse bit da pesada <a title="Musica no Youtube" href="https://www.youtube.com/watch?v=enzAqfTOE1Y&amp;ab_channel=splash.mp3" target="_blank" rel="noopener">Musica no Youtube</a> , mas tem esse tbm <a title="Musica 2 " href="https://www.youtube.com/watch?v=W0OK7t1W9Nc&amp;ab_channel=MCMenordaVG-Topic" target="_blank" rel="noopener">Musica 2</a></p>';
var resultado = document.getElementById('resultadopegacodio');

function pegacodigo() {
    VID_REGEX = /(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
    resultado.innerHTML = link.match(VID_REGEX)[1];
}

function mostrartodos(){

}