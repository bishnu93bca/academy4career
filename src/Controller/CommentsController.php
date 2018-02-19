<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CommentsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		 $Comments=$this->Comments->find('all');
		 $this->set('Comments',$Comments);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Comments = $this->Comments->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['user_id']=1;
            $Comments = $this->Comments->patchEntity($Comments, $this->request->data);
            if ($this->Comments->save($Comments)) {
                // $this->Flash->success(__('Your Comments has been saved.'));
                return $this->redirect(['controller'=>'blogs','action' => 'readmore',$this->request->data['post_id']]);
            }
            $this->Flash->error(__('Unable to add your Comments.'));
        }
        $this->set(compact('Class'));
        $this->set('_serialize', ['Class']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Class = $this->Class->get($id, [
            'contain' => []
        ]);
        $this->set('Class', $Class);
        $this->set('_serialize', ['Class']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Class = $this->Class->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            $Class = $this->Class->patchEntity($Class, $this->request->data);
            if ($this->Class->save($Class)) {
                $this->Flash->success(__('The Class has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Class could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Class'));
        $this->set('_serialize', ['Class']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Class = $this->Class->get($id);
        if ($this->Class->delete($Class)) {
            $this->Flash->success(__('The Class has been deleted.'));
        } else {
            $this->Flash->error(__('The Class could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}