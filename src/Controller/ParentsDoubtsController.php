<?php

namespace App\Controller;
use Cake\ORM\TableRegistry; 

use App\Controller\AppController;

class ParentsDoubtsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->layout('admin');
        $ParentsDoubts=$this->ParentsDoubts->find('all');
        $this->set('ParentsDoubts',$ParentsDoubts);
    }
    public function faq()
    {
        $ParentsDoubts=$this->ParentsDoubts->find('all',['order'=>array('parents_doubt_id DESC')]);
        $this->set('ParentsDoubts',$ParentsDoubts);
    } 
    public function add()
    {
        $this->viewBuilder()->layout('admin');
        $ParentsDoubts = $this->ParentsDoubts->newEntity();
        if ($this->request->is('post')) {
           
            $this->request->data['parent_id']=1;
            $ParentsDoubts = $this->ParentsDoubts->patchEntity($ParentsDoubts, $this->request->data);
            if ($this->ParentsDoubts->save($ParentsDoubts)) {
                $this->Flash->success(__('Your Parents Doubts has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Parents Doubts.'));
        }
        $this->set(compact('ParentsDoubts'));
        $this->set('_serialize', ['ParentsDoubts']);          
    }
    public function view($id=null)
    {
        $this->viewBuilder()->layout('admin');
         $ParentsDoubts = $this->ParentsDoubts->get($id, [
            'contain' => []
        ]);
        $this->set('ParentsDoubts', $ParentsDoubts);
        $this->set('_serialize', ['ParentsDoubts']);

    }
    public function edit($id=null)
    {
        $this->viewBuilder()->layout('admin');
        $ParentsDoubts = $this->ParentsDoubts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $ParentsDoubts = $this->ParentsDoubts->patchEntity($ParentsDoubts, $this->request->data);
            if ($this->ParentsDoubts->save($ParentsDoubts)) {
                $this->Flash->success(__('The Parents Doubts has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Parents Doubts could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('ParentsDoubts'));
        $this->set('_serialize', ['ParentsDoubts']);


    }
    public function delete($id=null)
    {
        $this->viewBuilder()->layout('admin');
        //$this->request->allowMethod(['post', 'delete']);
        $ParentsDoubts = $this->ParentsDoubts->get($id);
        if ($this->ParentsDoubts->delete($ParentsDoubts)) {
            $this->Flash->success(__('The Parents Doubts has been deleted.'));
        } else {
            $this->Flash->error(__('The Parents Doubts could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}