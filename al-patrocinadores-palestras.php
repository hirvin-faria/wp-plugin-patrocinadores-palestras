<?php
/**
 * Plugin Name: Patrocinadores Alura
 * Description: Selecionar patrocinadores da palestra.
 * Version: 1.0.0
 * Author: Hirvin Faria
 */


/**
 * Verificação para que o plugin seja chamado do mesmo diretório onde o wp esteja instalado
 */
if(!defined('ABSPATH')) {
    die;
}

require_once plugin_dir_path(__FILE__) . '/includes/al-patrocinadores-palestras-widget.php';