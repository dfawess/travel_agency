<?php

require 'connection.php';

$app = new \atk4\ui\App('Travel Agency');
require 'visual.php';

$form = $app->layout->add('Form');
$form->setModel(new Record($db));


/*$form->onSubmit(function ($form) {
  $form->model->save();
  return new \atk4\ui\jsExpression('document.location = "index.php" ');
});*/

$form->onSubmit(function ($form) {
    $notifier = new \atk4\ui\jsNotify();
    $notifier->setColor('red')
             ->setPosition('bottomRight')
             ->setWidth('40%')
             ->setContent('Данные были сохранены')
             ->setTransition('jiggle')
             ->setIcon('computer')
             ->setDuration('10000')
             ->setOpacity('0.7');
$form->model->save();
return $notifier;
           });
