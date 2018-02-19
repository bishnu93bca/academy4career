<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Network\Session\DatabaseSession;
use App\Controller\AppController;

class AdminsController extends AppController
{
	
    public function login()
    {
         $Members =TableRegistry::get('users');
        $this->viewBuilder()->layout('login');  
      if ($this->request->is('post')) {
             $session= $this->request->session();
             if ($users=$Members->find('all')->where(['email'=>$this->request->data['email']])->andwhere(['password'=>md5($this->request->data['password'])])->andwhere(['user_type_id'=>1])->first()){
                $session->write('user',$users);
                

                //$this->Flash->success(__('Login successful.'));
                return $this->redirect(['controller'=>'dashboards','action'=>'index']);
            }
            $this->Flash->error(__('Unable to login your accounts.'));
        }
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    }
    public function logout(){
         $this->viewBuilder()->layout('login');
         $session= $this->request->session();
        $session->destroy('admin');
        return $this->redirect(['controller'=>'homes','action' => 'index']);

    }
	
}