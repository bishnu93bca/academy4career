<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class QustionTypesController extends AppController
{
	public function index()
    {
        $this->viewBuilder()->layout('admin');
        $QustionTypes=$this->QustionTypes->find('all');
        $this->set('QustionTypes',$QustionTypes);
    } 
    public function add()
    {
        $this->viewBuilder()->layout('admin');
        $QustionTypes = $this->QustionTypes->newEntity();
        if ($this->request->is('post')) {
            $QustionTypes = $this->QustionTypes->patchEntity($QustionTypes, $this->request->data);
            if ($this->QustionTypes->save($QustionTypes)) {
                $this->Flash->success(__('Your Qustion Types has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add  Qustion Types.'));
        }
        $this->set(compact('QustionTypes'));
        $this->set('_serialize', ['QustionTypes']);          
    }
    public function view($id=null)
    {
        $this->viewBuilder()->layout('admin');
         $QustionTypes = $this->QustionTypes->get($id, [
            'contain' => []
        ]);
        $this->set('QustionTypes', $QustionTypes);
        $this->set('_serialize', ['QustionTypes']);

    }
    public function edit($id=null)
    {
        $this->viewBuilder()->layout('admin');
        $QustionTypes = $this->QustionTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $QustionTypes = $this->QustionTypes->patchEntity($QustionTypes, $this->request->data);
            if ($this->QustionTypes->save($QustionTypes)) {
                $this->Flash->success(__('The Qustion Types has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Qustion Types could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('QustionTypes'));
        $this->set('_serialize', ['QustionTypes']);


    }
    public function delete($id=null)
    {
        $this->viewBuilder()->layout('admin');
        //$this->request->allowMethod(['post', 'delete']);
        $QustionTypes = $this->QustionTypes->get($id);
        if ($this->QustionTypes->delete($QustionTypes)) {
            $this->Flash->success(__('The Qustion Types has been deleted.'));
        } else {
            $this->Flash->error(__('The Qustion Types could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}