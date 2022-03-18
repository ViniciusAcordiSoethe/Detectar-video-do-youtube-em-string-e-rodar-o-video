<?php

$html = '<p>Escuta esse bit da pesada <a title="Musica no Youtube" href="https://https://www.youtube.com/watch?v=1RN7FxZa2FI" target="_blank" rel="noopener">Musica no Youtube</a> , mas tem esse tbm <a title="Musica 2 " href="https://https://www.youtube.com/watch?v=cEflMmt3MzQ" target="_blank" rel="noopener">Musica 2</a> e esse tbm <a title="Musica 3 " href="https://www.youtube.com/watch?v=JDTGroZRybw" target="_blank" rel="noopener">Musica 2</a> novas</p>';

preg_match_all('~(?:https?://)?(?:www.)?(?:youtube.com|youtu.be)/(?:watch\?v=)?([^\s]+)~', $html, $match); // preg_match do youtube 

$tamanhoArray = count($match);