<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class ExpertsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Experts=$this->Experts->find('all');
		$this->set('Experts',$Experts);
	}
    public function meettheExpertsList()
    {
        $Experts=$this->Experts->find('all',['order'=>array('expert_id DESC')]);
        $this->set('Experts',$Experts);
    }
    public function readmore($id=null)
    {
         $Experts = $this->Experts->get($id, [
            'contain' => []
        ]);
        $this->set('Experts', $Experts);
        $this->set('_serialize', ['Experts']);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Experts = $this->Experts->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['expert_image'];
                $filePath = WWW_ROOT."img".DS."experts".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['expert_image']=$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $Experts = $this->Experts->patchEntity($Experts, $this->request->data);
            if ($this->Experts->save($Experts)) {
                $this->Flash->success(__('Your Experts Type has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Experts.'));
        }
        $this->set(compact('Experts'));
        $this->set('_serialize', ['Experts']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Experts = $this->Experts->get($id, [
            'contain' => []
        ]);
        $this->set('Experts', $Experts);
        $this->set('_serialize', ['Experts']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Experts = $this->Experts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['expert_image'];
                $filePath = WWW_ROOT."img".DS."experts".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['expert_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
           
            $Experts = $this->Experts->patchEntity($Experts, $this->request->data);
            if ($this->Experts->save($Experts)) {
                $this->Flash->success(__('The Experts has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Experts could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Experts'));
        $this->set('_serialize', ['Experts']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Experts = $this->Experts->get($id);
        if ($this->Experts->delete($Experts)) {
            $this->Flash->success(__('The Experts has been deleted.'));
        } else {
            $this->Flash->error(__('The Experts could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}