<?php

    $conteudo = file_get_contents('https://meu-cv.vercel.app/api/');

    libxml_use_internal_errors(true);

    $DOMdocumento = new DOMDocument();
    $DOMdocumento->loadHTML($conteudo);

    $linkTags = $DOMdocumento->getElementsByTagName('a');

    $linkList= '';

    foreach($linkTags as $link) {
        $paginas = $link->getAttribute('href');

        if(!empty($paginas)) {
            $linkList .= $link->getAttribute('href') . '<br>';
        }
    }

    echo $linkList;