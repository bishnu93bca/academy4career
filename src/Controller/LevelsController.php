<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class LevelsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Levels=$this->Levels->find('all', [
            'contain' => []
        ]);
		$this->set('Levels',$Levels);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Levels = $this->Levels->newEntity();
        if ($this->request->is('post')) {

            $Levels = $this->Levels->patchEntity($Levels, $this->request->data);
            if ($this->Levels->save($Levels)) {
                $this->Flash->success(__('Your Levels has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Levels.'));
        }
        $this->set(compact('Levels'));
        $this->set('_serialize', ['Levels']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Levels = $this->Levels->get($id, [
            'contain' => []
        ]);
        $this->set('Levels', $Levels);
        $this->set('_serialize', ['Levels']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Levels = $this->Levels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            $Levels = $this->Levels->patchEntity($Levels, $this->request->data);
            if ($this->Levels->save($Levels)) {
                $this->Flash->success(__('The Levels has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Levels could not be Update. Please, try again.'));
            }
        }
       
        $this->set(compact('Levels'));
        $this->set('_serialize', ['Levels']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Levels = $this->Levels->get($id);
        if ($this->Levels->delete($Levels)) {
            $this->Flash->success(__('The Levels has been deleted.'));
        } else {
            $this->Flash->error(__('The Levels could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}