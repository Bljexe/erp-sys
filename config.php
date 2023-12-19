<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// VARIÁVEIS PARA CONEXÃO COM O BANCO DE DADOS LOCAL
$servidor = 'localhost';
$porta = '3306';
$usuario = 'root';
$senha = '';
$banco = 'sistema';

// CONFIGURAÇÕES DO SISTEMA
define('SISTEMA', 'ERP');
define('ROOT_URL', 'http://localhost/sistema/');
$relatorio_pdf = 'SIM';
$cabecalho_img_rel = 'NAO';
$rodape_relatorios = " Sistema de Gestão e PDV - Desenvolvido por Bryan.";
$desconto_porcentagem = "SIM";

// INFORMAÇÕES DO CLIENTE
define('NOME_EMPRESA', 'Nome da Empresa');
define('CNPJ_EMPRESA', '00.000.000/0001-00');
define('ENDERECO_EMPRESA', 'Rua João D Agostin, 2273, Casa 2 - Colombo - PR');
define('TELEFONE_EMPRESA', '(41) 98483-5936');
