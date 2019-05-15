<?php
// CONFIGURAÇÕES DE AMBIENTE (Horário, Timestamp, Exibição de erros)
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Brazil/East');
if (extension_loaded('newrelic')) newrelic_capture_params();

// CONFIGURAÇÕES DE SESSÃO
session_save_path('tmp');
session_start();

// DEFINIÇÃO DE URL CASO HAJA SUBPASTA (CASO RAÍZ DO DOMÍNIO, UTILIZE 0)
define('INIT_URL', 0);
// DEFINIÇÃO DE URL TESTE
define('URL_TESTE', $_SERVER['SERVER_NAME'].($_SERVER['SERVER_PORT'] != 80 ?':'.$_SERVER['SERVER_PORT']:''));
// DEFINIÇÃO DE URL COMPLETA
define('URL', 'http://' . URL_TESTE . '/');

// IDENTIFICAÇÃO DA URL NO NAVEGADOR
$url = strip_tags($_SERVER['REQUEST_URI']);
$url_array = explode('/', $url);
array_shift($url_array);

// PÁGINA PADRÃO PARA INCLUIR CASO NÃO HAJA NENHUMA PÁGINA ESPECÍFICA NA URL
$arquivo = 'dashboard';

// INTERPRETA MENU JSON
$importMenu = file_get_contents('menu_items.json');
$menuItens = json_decode($importMenu, true);

// TRATAMENTO DA URL AMIGÁVEL
if (!empty($url_array[INIT_URL])) {
    if ($url_array[INIT_URL] == 'geradores') {

        if (empty($url_array[INIT_URL + 1])) {
            $arquivo = 'geradores';
        } else if ($url_array[INIT_URL + 1] == 'mdc') {
            $arquivo = 'mdc';
        } else if ($url_array[INIT_URL + 1] == 'query') {
            $arquivo = 'query';
        }

    } else if ($url_array[INIT_URL] == 'code') {
        $arquivo = 'code';
    } else {
        $arquivo = '404';
    }
}

// INCLUI A PASTA DOS ARQUIVOS DE PAGINA
$arquivo = 'paginas/' . $arquivo;

// INCLUI A INDEX FINALMENTE
require_once('index.php');
