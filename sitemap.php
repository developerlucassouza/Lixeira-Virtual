<?php

// Padrão para gerar cada URL
// echo '<url><loc>' . $url . '' . '</loc></url>';

// Gerar URL do site
$url = 'https://lixeiravirtual.developerlucassouza.com';

// Função para não precisar usar echo em tudo
function cadastraUrl($txt) {
    global $url;
    echo '<url><loc>' . $url . '/' . $txt  . '</loc></url>' . "\n";
}

// Indexa todos os .php de uma pasta
function indexaPasta($pasta) {
    $arquivos = glob($pasta . '/*.php');
    foreach ($arquivos as $arquivo) {
        // Se for o index.php, não indexa como index.php
        if ($arquivo == $pasta . '/index.php') { cadastraUrl($pasta . '/'); continue; }

        cadastraUrl($arquivo);
    }
}

// --------------------------------------------------------------------------------------------------------

// Informar ao navegador e aos buscadores que a saída é XML
header('Content-Type: application/xml; charset=UTF-8');

// --------------------------------------------------------------------------------------------------------

// Início do XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";

// urlset
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// --------------------------------------------------------------------------------------------------------

// HOME
cadastraUrl('');

// Cursos
indexaPasta('html');
indexaPasta('css');
indexaPasta('javascript');

// --------------------------------------------------------------------------------------------------------
// Fechar urlset
echo '</urlset>';