<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class MembersController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Members=$this->Members->find('all',['contain'=>'Users']);
		$this->set('Members',$Members);
	} 
	public function add()
	{
        $Plans=TableRegistry::get('plan');
        $this->set('Plans',$Plans->find('all'));
				 
	}
    public function success()
    {
        $this->viewBuilder()->layout('ajax');
        $Users=TableRegistry::get('users');
        $Members = $this->Members->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['user_id']=$_SESSION->id;
            $this->request->data['detail_json'] = json_encode($this->request->data);
            $Members = $this->Members->patchEntity($Members, $this->request->data);
            if ($Members=$this->Members->save($Members)) { 
                $user=$Users->find('all')->where(['email'=>$this->request->data['email']])->first();
                $user->plan_id=$this->request->data['udf1'];
                if($Users->save($user)){

                }
                 $session= $this->request->session();
                 $session->destroy('user');
               if($Users = $Users->find('all',['contain'=>['Members']])->where(['email'=>$this->request->data['email']])->first()){
                    $session->write('user',$Users);
                    }
            }
        }
        $this->set(compact('Members'));
        $this->set('_serialize', ['Members']);  
                  
    }
    public function fail()
    {
        $this->viewBuilder()->layout('ajax');
        $MembersTable=TableRegistry::get('payment_fail');
        $Members = $MembersTable->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['user_id']=$_SESSION->id;
            $this->request->data['detail_json']=json_encode($this->request->data);
            $Members = $MembersTable->patchEntity($Members, $this->request->data);
            if ($Members=$MembersTable->save($Members)) {
                $this->Flash->success(__('Your Members has been saved.'));
                
            }
            $this->Flash->error(__('Unable to add your Members.'));
        }
        $this->set(compact('Members'));
        $this->set('_serialize', ['Members']);    
                  
    }


	public function view($id=null)
	{
		 $Plans=TableRegistry::get('plan');
        $this->set('Plans',$Plans->find('all')->where(['id'=>$id])->first());

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Members = $this->Members->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	

            $Members = $this->Members->patchEntity($Members, $this->request->data);
            if ($this->Members->save($Members)) {
                $this->Flash->success(__('The Members has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Members could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Members'));
        $this->set('_serialize', ['Members']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Members = $this->Members->get($id);
        if ($this->Members->delete($Members)) {
            $this->Flash->success(__('The Members has been deleted.'));
        } else {
            $this->Flash->error(__('The Members could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}