<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public $name = 'Users'; //Controller name
    public $uses = array('User'); //Model name
  
    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    public function index() {
        $condition=array('order' => array('User.sl_no ASC'));
        $this->set('GetCoolAttraction', $this->User->find('all',$condition));
    }
	public function sorting() {
         $this->layout = 'ajax';         
         $array = $_REQUEST['listItem'];
		  $count = 1;
		  foreach ($array as $idval) {            
			$this->Cool_attraction->updateAll(array('sl_no' => $count), array('Cool_attraction.id' => $idval)); 
			$count ++; 
		 } 
        exit;
    }
}
