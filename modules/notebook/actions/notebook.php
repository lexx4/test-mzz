<?php
//notebook actions config

return array (
    'list' => 
    array (
        'controller' => 'list',
        'crud_class' => 'notebook',
    	'roles' => array(
    		0 => 'auth'
    	),
    ),
    'add' => 
    array (
        'controller' => 'save',
        'title' => 'Добавить',
        'main' => 'active.blank.tpl',
        'jip' => '1',
        'icon' => 'sprite:sys/page-add',
        'crud_class' => 'notebook',
    	'roles' => array(
    		0 => 'auth'
    	),
    ),
    'admin' => 
    array (
        'controller' => 'admin',
        'main' => 'active.admin.tpl',
        'jip' => '0',
        'icon' => '',
    	'admin' => true,
        'crud_class' => 'notebook',
    ),
);
?>