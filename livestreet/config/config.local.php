<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'social';
$config['db']['params']['pass'] = 'social';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'social';
$config['db']['table']['prefix'] = '';

$config['path']['root']['web'] = 'http://ls.dd5533.tk';
$config['path']['root']['server'] = '/srv/www/livestreet';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
$config['sys']['cache']['type'] = 'memory';
return $config;
?>
