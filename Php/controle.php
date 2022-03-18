<?php

$html = '<p>Escuta esse bit da pesada <a title="Musica no Youtube" href="https://www.youtube.com/watch?v=enzAqfTOE1Y&amp;ab_channel=splash.mp3" target="_blank" rel="noopener">Musica no Youtube</a> , mas tem esse tbm <a title="Musica 2 " href="https://www.youtube.com/watch?v=W0OK7t1W9Nc&amp;ab_channel=MCMenordaVG-Topic" target="_blank" rel="noopener">Musica 2</a></p>';

$htmlexplode = explode('"' , $html);

foreach ($htmlexplode as $string) {
    $char = str_word_count($string, 1);
    print_r($char);

    echo '<br>';

    $guarda = in_array("watch", $char);
    if ($guarda == 1) {
        $tamanho = count($char);
        for ($i = 0; $i < $tamanho; $i++) {
            if ($char[$i] == "v") {
                print_r($char[$i+1]);
            }
        }
    }

    echo '<br>';

}

