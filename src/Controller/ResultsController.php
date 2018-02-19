<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
 
use App\Controller\AppController;

class ResultsController extends AppController
{
	public function index()
	{
		$Results=$this->Results->find('all',[
            'contain' => ['Users'],'order'=>['Results.id DESC']
        ])->where(['Results.user_id'=>$_SESSION->id])->first();
        $this->set('Results',$Results);
	}
	public function pdf() 
	{
		$this->viewBuilder()->layout('pdf');
		$Results=$this->Results->find('all',[
            'contain' => ['Users'],'order'=>['Results.id DESC']
        ])->where(['Results.user_id'=>$_SESSION->id])->first();
        $this->set('Results',$Results);
	}

	public function add()
	{
		$this->viewBuilder()->layout('admin');
		
		$Results = $this->Results->newEntity();
        if ($this->request->is('post')) {
        	
        	$this->request->data['user_id']=$_SESSION->id;
        	$this->request->data['name']=$this->request->data['test_id'];
            $Results = $this->Results->patchEntity($Results, $this->request->data);
            if ($Results=$this->Results->save($Results)) {

                $this->Flash->success(__('Your Results has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Results.'));
        }

	}
}