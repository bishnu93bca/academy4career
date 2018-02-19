<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class ImportantLinksController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$ImportantLinks=$this->ImportantLinks->find('all');
		$this->set('ImportantLinks',$ImportantLinks);
	}
    public function importantLinkList()
    {
        $ImportantLinks=$this->ImportantLinks->find('all',['order'=>array('link_id DESC')]);
        $this->set('ImportantLinks',$ImportantLinks);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$ImportantLinks = $this->ImportantLinks->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['link_image'];
                $filePath = WWW_ROOT."img".DS."importantlinks".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['link_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
          
            $ImportantLinks = $this->ImportantLinks->patchEntity($ImportantLinks, $this->request->data);
            if ($this->ImportantLinks->save($ImportantLinks)) {
                $this->Flash->success(__('Your Important Links has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Important Links.'));
        }
        $this->set(compact('ImportantLinks'));
        $this->set('_serialize', ['ImportantLinks']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $ImportantLinks = $this->ImportantLinks->get($id, [
            'contain' => []
        ]);
        $this->set('ImportantLinks', $ImportantLinks);
        $this->set('_serialize', ['ImportantLinks']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$ImportantLinks = $this->ImportantLinks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['link_image'];
                $filePath = WWW_ROOT."img".DS."importantlinks".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['link_image'] =$imagename; 
                }else{
                     $this->request->data['link_image'] =$ImportantLinks->link_image;
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $ImportantLinks = $this->ImportantLinks->patchEntity($ImportantLinks, $this->request->data);
            if ($this->ImportantLinks->save($ImportantLinks)) {
                $this->Flash->success(__('The Important Links has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Important Links could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('ImportantLinks'));
        $this->set('_serialize', ['ImportantLinks']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $ImportantLinks = $this->ImportantLinks->get($id);
        if ($this->ImportantLinks->delete($ImportantLinks)) {
            $this->Flash->success(__('The Important Links has been deleted.'));
        } else {
            $this->Flash->error(__('The Important Links could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}