<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class DisciplinesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Disciplines=$this->Disciplines->find('all', [
            'contain' => ['Levels']
        ]);
		$this->set('Disciplines',$Disciplines);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Disciplines = $this->Disciplines->newEntity();
        if ($this->request->is('post')) {

            $Disciplines = $this->Disciplines->patchEntity($Disciplines, $this->request->data);
            if ($this->Disciplines->save($Disciplines)) {
                $this->Flash->success(__('Your Disciplines has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Disciplines.'));
        }
        $Levels = $this->Disciplines->Levels->find('all')->select(['level_id','level_name']);
        $this->set('Levels',$Levels);
        $this->set(compact('Disciplines'));
        $this->set('_serialize', ['Disciplines']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Disciplines = $this->Disciplines->get($id, [
            'contain' => ['Levels']
        ]);
        $this->set('Disciplines', $Disciplines);
        $this->set('_serialize', ['Disciplines']);

	}
    public function ajax($id=null)
    {
        $this->viewBuilder()->layout('ajax');
         $Disciplines = $this->Disciplines->find('all')->select(['discipline_id','discipline_name'])->where(['level_id'=>$id]);
        $this->set('Disciplines', $Disciplines);
        $this->set('_serialize', ['Disciplines']);

    }
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Disciplines = $this->Disciplines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            $Disciplines = $this->Disciplines->patchEntity($Disciplines, $this->request->data);
            if ($this->Disciplines->save($Disciplines)) {
                $this->Flash->success(__('The Disciplines has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Disciplines could not be Update. Please, try again.'));
            }
        }
        $Levels = $this->Disciplines->Levels->find('all')->select(['level_id','level_name']);
        $this->set('Levels',$Levels);
        $this->set(compact('Disciplines'));
        $this->set('_serialize', ['Disciplines']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Disciplines = $this->Disciplines->get($id);
        if ($this->Disciplines->delete($Disciplines)) {
            $this->Flash->success(__('The Disciplines has been deleted.'));
        } else {
            $this->Flash->error(__('The Disciplines could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}