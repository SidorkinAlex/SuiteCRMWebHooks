<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.04.21
 * Time: 22:15
 */
$path_arr_for_build = array(
    array(
        'from' => 'modules/AOW_WorkFlow/aow_utils.php',
        'to' => 'SugarModules/modules/AOW_WorkFlow/aow_utils.php',
    ),
    array(
        'from' => 'modules/WEBH_HOOKS_REQUEST',
        'to' => 'SugarModules/modules/WEBH_HOOKS_REQUEST',
    ),
    array(
        'from' => 'icons/',
        'to' => 'icons/',
    ),
    array(
        'from' => 'LICENSE.txt',
        'to' => 'LICENSE.txt',
    ),
    array(
        'from' => 'manifest.php',
        'to' => 'manifest.php',
    ),
    array(
        'from' => 'custom/Extension/application/Ext/Language/en_us.Web_Hooks.php',
        'to' => 'SugarModules/language/application/en_us.lang.php',
    ),
    array(
        'from' => 'custom/Extension/application/Ext/Language/ru_ru.Web_Hooks.php',
        'to' => 'SugarModules/language/application/ru_ru.lang.php',
    ),
    array(
        'from' => 'custom/Extension/modules/Administration',
        'to' => 'SugarModules/custom/Extension/modules/Administration',
    ),
);

return $path_arr_for_build;