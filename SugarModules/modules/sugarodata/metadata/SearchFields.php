<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$module_name = 'team';
$searchFields[$module_name] = array(
    'tablename' => array('query_type' => 'default'),
    'current_user_only' => array('query_type' => 'default', 'db_field' => array('assigned_user_id'), 'my_items' => true),
    'assigned_user_id' => array('query_type' => 'default'),
);
?>
