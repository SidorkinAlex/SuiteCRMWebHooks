<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14.04.21
 * Time: 23:21
 */
$admin_option_defs = array(
    'Administration' => array(
        'web_hooks_request' => array(
            'Administration',
            'LBL_WEB_HOOKS_REQUEST',
            'LBL_WEB_HOOKS_REQUEST_DESCRIPTION',
            'index.php?module=WEBH_HOOKS_REQUEST&action=index',
        ),
    ),
);

$admin_group_header[] = array('LBL_WEB_HOOKS_REQUEST_HEADER', '', false, $admin_option_defs);