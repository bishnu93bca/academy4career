<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class EntranceMaterialsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');


	}
	public function entranceMaterialList()
    {   
    	$EntranceTable    =   TableRegistry::get('entrance');
        if(empty($this->request->data)){
           $EntranceExams=$EntranceTable->find('all',['order'=>array('entrance_id DESC')]); 
       }elseif (!empty($this->request->data['entrance_name'])) {
           $EntranceExams=$EntranceTable->find('all',['order'=>array('entrance_id DESC')])->where(['entrance_name LIKE'=>'%'.trim($this->request->data['entrance_name']).'%']); 
       }
        
        $this->set('EntranceExams',$EntranceExams);
    }
    public function readmore($id=null)
    {
    	$EntranceTable    =   TableRegistry::get('entrance');
    	$EntranceExams = $EntranceTable->get($id, [
            'contain' => []
        ]);
        $this->set('EntranceExams', $EntranceExams);
        $this->set('_serialize', ['EntranceExams']);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');


	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
}