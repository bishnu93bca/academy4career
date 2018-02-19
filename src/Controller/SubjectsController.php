<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class SubjectsController extends AppController
{
	public function index()
    {
        $this->viewBuilder()->layout('admin');
        $Subjects=$this->Subjects->find('all',[
            'contain' => ['Class']
        ]);
        $this->set('Subjects',$Subjects);
    } 
    public function add()
    {
        $this->viewBuilder()->layout('admin');
        $Subjects = $this->Subjects->newEntity();
        if ($this->request->is('post')) {
            $Subjects = $this->Subjects->patchEntity($Subjects, $this->request->data);
            if ($this->Subjects->save($Subjects)) {
                $this->Flash->success(__('Your Subjects has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add  Subjects.'));
        }
        $Class = $this->Subjects->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('Subjects','Class'));
        $this->set('_serialize', ['Subjects']);          
    }
    public function view($id=null)
    {
        $this->viewBuilder()->layout('admin');
         $Subjects = $this->Subjects->get($id, [
            'contain' => ['Class']
        ]);
        $this->set('Subjects', $Subjects);
        $this->set('_serialize', ['Subjects']);

    }
    public function ajax($id=null)
    {
        $this->viewBuilder()->layout('ajax');
         $Subjects = $this->Subjects->find('all')->select(['subject_id','subject_name'])->where(['class_id'=>$id]);
        $this->set('Subjects', $Subjects);
        $this->set('_serialize', ['Subjects']);

    }
    public function edit($id=null)
    {
        $this->viewBuilder()->layout('admin');
        $Subjects = $this->Subjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $Subjects = $this->Subjects->patchEntity($Subjects, $this->request->data);
            if ($this->Subjects->save($Subjects)) {
                $this->Flash->success(__('The Subjects has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Subjects could not be Update. Please, try again.'));
            }
        }
        $Class = $this->Subjects->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('Subjects'));
        $this->set('_serialize', ['Subjects']);


    }
    public function delete($id=null)
    {
        $this->viewBuilder()->layout('admin');
        //$this->request->allowMethod(['post', 'delete']);
        $Subjects = $this->Subjects->get($id);
        if ($this->Subjects->delete($Subjects)) {
            $this->Flash->success(__('The Subjects has been deleted.'));
        } else {
            $this->Flash->error(__('The Subjects could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}