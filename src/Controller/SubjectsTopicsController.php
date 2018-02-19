<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class SubjectsTopicsController extends AppController
{
	public function index()
    {
        $this->viewBuilder()->layout('admin');
        $SubjectsTopics=$this->SubjectsTopics->find('all',[
            'contain' => ['Class','Subjects']
        ]);
        $this->set('SubjectsTopics',$SubjectsTopics);
    } 
    public function add()
    {
        $this->viewBuilder()->layout('admin');
        $SubjectsTopics = $this->SubjectsTopics->newEntity();
        if ($this->request->is('post')) {
            $SubjectsTopics = $this->SubjectsTopics->patchEntity($SubjectsTopics, $this->request->data);
            if ($this->SubjectsTopics->save($SubjectsTopics)) {
                $this->Flash->success(__('Your Subject Topics has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add  Subject Topics.'));
        }
        $Class = $this->SubjectsTopics->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $Subjects = $this->SubjectsTopics->Subjects->find('all')->select(['subject_id','subject_name']);
        $this->set('Subjects',$Subjects);
        $this->set(compact('SubjectsTopics'));
        $this->set('_serialize', ['SubjectsTopics']);          
    }
    public function view($id=null)
    {
        $this->viewBuilder()->layout('admin');
         $SubjectsTopics = $this->SubjectsTopics->get($id, [
             'contain' => ['Class','Subjects']
        ]);
        $this->set('SubjectsTopics', $SubjectsTopics);
        $this->set('_serialize', ['SubjectsTopics']);

    }
    public function edit($id=null)
    {
        $this->viewBuilder()->layout('admin');
        $SubjectsTopics = $this->SubjectsTopics->get($id, [
             'contain' => ['Class','Subjects']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $SubjectsTopics = $this->SubjectsTopics->patchEntity($SubjectsTopics, $this->request->data);
            if ($this->SubjectsTopics->save($SubjectsTopics)) {
                $this->Flash->success(__('The Subject Topics has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Subject Topics could not be Update. Please, try again.'));
            }
        }
        $Class = $this->SubjectsTopics->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $Subjects = $this->SubjectsTopics->Subjects->find('all')->select(['subject_id','subject_name']);
        $this->set('Subjects',$Subjects);
        $this->set(compact('SubjectsTopics'));
        $this->set('_serialize', ['SubjectsTopics']);


    }
    public function delete($id=null)
    {
        $this->viewBuilder()->layout('admin');
        //$this->request->allowMethod(['post', 'delete']);
        $SubjectsTopics = $this->SubjectsTopics->get($id,[
            'contain' => ['Class','Subjects']
        ]);
        if ($this->SubjectsTopics->delete($SubjectsTopics)) {
            $this->Flash->success(__('The Subject Topics has been deleted.'));
        } else {
            $this->Flash->error(__('The Subject Topics could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}