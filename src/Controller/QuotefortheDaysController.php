<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class QuotefortheDaysController extends AppController
{
	public function index()
    {
        $this->viewBuilder()->layout('admin');
        $QuotefortheDays=$this->QuotefortheDays->find('all');
        $this->set('QuotefortheDays',$QuotefortheDays);
    }
    public function quotefortheDaysList()
    {
        $QuotefortheDays=$this->QuotefortheDays->find('all',['order'=>array('quotes_id DESC')]);
        $this->set('QuotefortheDays',$QuotefortheDays);
    } 
    public function add()
    {
        $this->viewBuilder()->layout('admin');
        $QuotefortheDays = $this->QuotefortheDays->newEntity();
        if ($this->request->is('post')) {
            $QuotefortheDays = $this->QuotefortheDays->patchEntity($QuotefortheDays, $this->request->data);
            if ($this->QuotefortheDays->save($QuotefortheDays)) {
                $this->Flash->success(__('Your Quote for the Days has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add  Quote for the Days.'));
        }
        $this->set(compact('QuotefortheDays'));
        $this->set('_serialize', ['QuotefortheDays']);          
    }
    public function view($id=null)
    {
        $this->viewBuilder()->layout('admin');
         $QuotefortheDays = $this->QuotefortheDays->get($id, [
            'contain' => []
        ]);
        $this->set('QuotefortheDays', $QuotefortheDays);
        $this->set('_serialize', ['QuotefortheDays']);

    }
    public function edit($id=null)
    {
        $this->viewBuilder()->layout('admin');
        $QuotefortheDays = $this->QuotefortheDays->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $QuotefortheDays = $this->QuotefortheDays->patchEntity($QuotefortheDays, $this->request->data);
            if ($this->QuotefortheDays->save($QuotefortheDays)) {
                $this->Flash->success(__('The Quote for the Days has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Quote for the Days could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('QuotefortheDays'));
        $this->set('_serialize', ['QuotefortheDays']);


    }
    public function delete($id=null)
    {
        $this->viewBuilder()->layout('admin');
        //$this->request->allowMethod(['post', 'delete']);
        $QuotefortheDays = $this->QuotefortheDays->get($id);
        if ($this->QuotefortheDays->delete($QuotefortheDays)) {
            $this->Flash->success(__('The Quote for the Days has been deleted.'));
        } else {
            $this->Flash->error(__('The Quote for the Days could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}