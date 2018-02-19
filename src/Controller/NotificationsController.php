<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class NotificationsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Notifications=$this->Notifications->find('all');
		$this->set('Notifications',$Notifications);
	}
    public function noticeBoardList()
    {
        $Notifications=$this->Notifications->find('all',['order'=>array('notification_id DESC')]);
        $this->set('Notifications',$Notifications);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Notifications = $this->Notifications->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['notification_image'];
                $filePath = WWW_ROOT."img".DS."notification".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['notification_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
          
            $Notifications = $this->Notifications->patchEntity($Notifications, $this->request->data);
            if ($this->Notifications->save($Notifications)) {
                $this->Flash->success(__('Your Notification has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Notification.'));
        }
        $this->set(compact('Notifications'));
        $this->set('_serialize', ['Notifications']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Notifications = $this->Notifications->get($id, [
            'contain' => []
        ]);
        $this->set('Notifications', $Notifications);
        $this->set('_serialize', ['Notifications']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Notifications = $this->Notifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['notification_image'];
                $filePath = WWW_ROOT."img".DS."notification".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['notification_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $Notifications = $this->Notifications->patchEntity($Notifications, $this->request->data);
            if ($this->Notifications->save($Notifications)) {
                $this->Flash->success(__('The Notification has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Notification could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Notifications'));
        $this->set('_serialize', ['Notifications']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Notifications = $this->Notifications->get($id);
        if ($this->Notifications->delete($Notifications)) {
            $this->Flash->success(__('The Notification has been deleted.'));
        } else {
            $this->Flash->error(__('The Notification could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}