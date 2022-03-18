<?php

$html = '<p>Escuta esse bit da pesada <a title="Musica no Youtube" href="https://www.youtube.com/watch?v=enzAqfTOE1Y&amp;ab_channel=splash.mp3" target="_blank" rel="noopener">Musica no Youtube</a> , mas tem esse tbm <a title="Musica 2 " href="https://www.youtube.com/watch?v=W0OK7t1W9Nc&amp;ab_channel=MCMenordaVG-Topic" target="_blank" rel="noopener">Musica 2</a></p>';

parse_str(parse_url($html, PHP_URL_QUERY), $var);

var_dump($var);


