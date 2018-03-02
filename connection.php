<?php

session_start();

require "../vendor/autoload.php";
$db = new \atk4\data\Persistence_SQL('mysql:host=127.0.0.1;dbname=main;charset=utf8', 'root', '');

class Place extends \atk4\data\Model {

	public $table = 'places';



function init() {

	parent::init();

	$this->addField('name',['caption'=>'City']);

  $this->hasMany('Record', new Record);

}

}



class Record extends \atk4\data\Model {

	public $table = 'records';



function init() {

	parent::init();

  $this->addField('name');

  $this->addField('surname');

  $this->addField('phone_number');

  $this->addField('e_mail');

  $this->addField('departure_date',['type'=>'date']);

  $this->addField('arrival_date',['type'=>'date']);

  $this->hasOne('places_id', new Place)->addTitle();

}

}
