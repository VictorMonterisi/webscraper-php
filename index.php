<?php
    $conteudo = file_get_contents('https://meu-cv.vercel.app/api/');

    preg_match_all('/<ul class="tecnologias">(.*?)<span>(.*?)<\/span>(.*?)  <\/ul>/s', $conteudo, $matches);

    echo strip_tags($matches[0][0]);