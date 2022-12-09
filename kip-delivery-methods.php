<?php

/**
 * Plugin Name:       kip-delivery-methods
 * Plugin URI:        
 * Description:       Formulario metodos de envio
 * Version:           1.0.0
 * Author:            ADIS Ingenieros
 * Author URI:        http://adisingenieros.com/
 */

function delivery_methods_custom_menu()
{

    add_menu_page('Métodos de envío', 'Métodos de envío', 'read', 'metodos_envio.php', '', 'dashicons-cart
    ', 101);
    add_submenu_page('metodos_envio.php', 'Métodos de envío', 'Métodos de envío', 'read', ABSPATH . 
    'wp-content\plugins\kip-delivery-methods\views\admin.php', '');

    remove_submenu_page('metodos_envio.php', 'metodos_envio.php');
}

add_action('admin_menu', 'delivery_methods_custom_menu');


?>