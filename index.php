<?php

function scraper() {
    $conteudo = file_get_contents('https://meu-cv.vercel.app/api/'); // Faz uma requisição GET para encontrar a webpage que será analisada e retorna o seu corpo
    
    if($conteudo === false) {
        echo 'Erro ao obter o conteúdo da página.';
        
    } else {
        preg_match_all('/<ul class="tecnologias">(.*?)<\/ul>/s', $conteudo, $matches); // Busca todos os termos encontrados na lista Tecnologias e armazena no array $matches

        if(isset($matches[0])) {
            foreach($matches[0] as $match) {
                echo $match;
            }
        } else {
            echo 'Nenhuma correspondência encontrada';
        }
    }
    
}
scraper();
