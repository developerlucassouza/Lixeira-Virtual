<?php

// Gerar URL do site
$url = 'https://lixeiravirtual.developerlucassouza.com/';

// Informar ao navegador e aos buscadores que a saída é XML
header('Content-Type: application/xml; charset=UTF-8');

// Início do XML
echo '<?xml version="1.0" encoding="UTF-8"?>';

// urlset
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Padrão para gerar cada URL
// echo '<url><loc>' . $url . '' . '</loc></url>';

// --------------------------------------------------------------------------------------------------------

// HOME
echo '<url><loc>' . $url  . '</loc></url>';


// --------------------------------------------------------------------------------------------------------
// Fechar urlset
echo '</urlset>';