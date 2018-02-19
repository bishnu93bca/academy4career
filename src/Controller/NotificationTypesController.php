<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class NotificationTypesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$NotificationTypes=$this->NotificationTypes->find('all');
		$this->set('NotificationTypes',$NotificationTypes);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$NotificationTypes = $this->NotificationTypes->newEntity();
        if ($this->request->is('post')) {
            $NotificationTypes = $this->NotificationTypes->patchEntity($NotificationTypes, $this->request->data);
            if ($this->NotificationTypes->save($NotificationTypes)) {
                $this->Flash->success(__('Your Notification Type has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Notification Type.'));
        }
        $this->set(compact('NotificationTypes'));
        $this->set('_serialize', ['NotificationTypes']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $NotificationTypes = $this->NotificationTypes->get($id, [
            'contain' => []
        ]);
        $this->set('NotificationTypes', $NotificationTypes);
        $this->set('_serialize', ['NotificationTypes']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$NotificationTypes = $this->NotificationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            $NotificationTypes = $this->NotificationTypes->patchEntity($NotificationTypes, $this->request->data);
            if ($this->NotificationTypes->save($NotificationTypes)) {
                $this->Flash->success(__('The Notification Type has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Notification Type could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('NotificationTypes'));
        $this->set('_serialize', ['NotificationTypes']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $NotificationTypes = $this->NotificationTypes->get($id);
        if ($this->NotificationTypes->delete($NotificationTypes)) {
            $this->Flash->success(__('The Notification Type has been deleted.'));
        } else {
            $this->Flash->error(__('The Notification Type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}