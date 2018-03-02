<?php

require 'connection.php';


$app = new \atk4\ui\App('Travel Agency');
require 'visual.php';

$crud = $app->layout->add('Crud');
$crud->setModel(new Place($db));
