<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class UserTypesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$UserTypes=$this->UserTypes->find('all');
		$this->set('UserTypes',$UserTypes);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$UserTypes = $this->UserTypes->newEntity();
        if ($this->request->is('post')) {
            $UserTypes = $this->UserTypes->patchEntity($UserTypes, $this->request->data);
            if ($this->UserTypes->save($UserTypes)) {
                $this->Flash->success(__('Your User Types has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your User Types.'));
        }
        $this->set(compact('UserTypes'));
        $this->set('_serialize', ['UserTypes']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $UserTypes = $this->UserTypes->get($id, [
            'contain' => []
        ]);
        $this->set('UserTypes', $UserTypes);
        $this->set('_serialize', ['UserTypes']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$UserTypes = $this->UserTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $UserTypes = $this->UserTypes->patchEntity($UserTypes, $this->request->data);
            if ($this->UserTypes->save($UserTypes)) {
                $this->Flash->success(__('The User Types has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The User Types could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('UserTypes'));
        $this->set('_serialize', ['UserTypes']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $UserTypes = $this->UserTypes->get($id);
        if ($this->UserTypes->delete($UserTypes)) {
            $this->Flash->success(__('The User Types has been deleted.'));
        } else {
            $this->Flash->error(__('The User Types could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}