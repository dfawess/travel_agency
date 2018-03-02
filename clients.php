<?php

require 'connection.php';

$app = new \atk4\ui\App('Travel Agency');
require 'visual.php';


$crud = $app->layout->add('CRUD');
$crud->setModel(new Record($db));

$crud->menu->addItem('Reload', new \atk4\ui\jsReload($crud));
