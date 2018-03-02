<?php

$app->initLayout('Admin');

$app->layout->leftMenu->addItem(['Main Menu','icon'=>'book'],['index']);

$app->layout->leftMenu->addItem(['Places','icon'=>'cloud'],['places']);

$app->layout->leftMenu->addItem(['Admin','icon'=>'computer'],['check1']);
