<?php
//notebookItem actions config

return array (
    'edit' => 
    array (
        'controller' => 'save',
        'title' => 'Изменить',
        'main' => 'active.blank.tpl',
        'jip' => '1',
        'icon' => 'sprite:sys/page-edit',
        'crud_class' => 'notebookItem',
    	'roles' => array(
    		0 => 'auth'
    	),
    ),
    'delete' => 
    array (
        'controller' => 'delete',
        'title' => 'Удаление',
        'confirm' => 'Вы действительно хотите удалить запись?',
        'main' => 'active.blank.tpl',
        'jip' => '1',
        'icon' => 'sprite:sys/page-del',
        'crud_class' => 'notebookItem',
    	'roles' => array(
    		0 => 'auth'
    	),
    ),
    'view' => 
    array (
        'controller' => 'view',
        'jip' => '0',
        'icon' => '',
        'crud_class' => 'notebookItem',
    	'roles' => array(
    		0 => 'auth'
    	),
    ),
);
?>