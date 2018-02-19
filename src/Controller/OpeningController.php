<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use App\Controller\AppController;

class OpeningController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$this->set('Opening', $this->Opening->find("all"));
        $this->set('_serialize', ['Opening']);


	}
    public function openingList()
    {
        
        $this->set('Opening', $this->Opening->find("all",['order'=>array('opening_id DESC')]));
        $this->set('_serialize', ['Opening']);


    }
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Opening = $this->Opening->newEntity();
        if ($this->request->is('post')) {
        	pr($this->request->data);
            $Opening = $this->Opening->patchEntity($Opening, $this->request->data);
            if ($this->Opening->save($Opening)) {
                $this->Flash->success(__('Your Opening Jobs has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Opening Jobs.'));
        }
        $this->set(compact('Opening'));
        $this->set('_serialize', ['Opening']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Opening = $this->Opening->get($id, [
            'contain' => []
        ]);
        $this->set('Opening', $Opening);
        $this->set('_serialize', ['Opening']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Opening = $this->Opening->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            $Opening = $this->Opening->patchEntity($Opening, $this->request->data);
            if ($this->Opening->save($Opening)) {
                $this->Flash->success(__('The  Opening has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Opening could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Opening'));
        $this->set('_serialize', ['Opening']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Opening = $this->Opening->get($id);
        if ($this->Opening->delete($Opening)) {
            $this->Flash->success(__('The Opening has been deleted.'));
        } else {
            $this->Flash->error(__('The  Opening could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}