<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
 
use App\Controller\AppController;

class ParentsCornersController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$ParentsCorners=$this->ParentsCorners->find('all');
		$this->set('ParentsCorners',$ParentsCorners);
	}
    public function cList()
    {
        //$this->viewBuilder()->layout('admin');
        
        $ParentsCorners=$this->ParentsCorners->find('all',['order'=>['ParentsCorners.parents_id DESC']])->contain(['Users']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $$ParentsCorners = $this->$ParentsCorners->newEntity();
            $this->request->data['user_id']=$_SESSION->id;
            $ParentsCorners = $this->ParentsCorners->patchEntity($ParentsCorners, $this->request->data);
            if ($this->ParentsCorners->save($ParentsCorners)) {
                return $this->redirect(['action' => 'listview']);
            }
        }
        $this->set('ParentsCorners',$ParentsCorners);
    }
    public function listview($id=null)
    {
        $ParentsComments   =   TableRegistry::get('parents_doubts');
         $ParentsCorners = $this->ParentsCorners->get($id, [
            'contain' => ['Users']
        ]);
         $parents_ans=$ParentsComments->find('all')->select(['Users.first_name','Users.last_name','Users.first_name','parents_doubts.doubt_answer','parents_doubts.created'])->contain(['Users'])->where(['parents_doubts.parents_id'=>$id]);
         if ($this->request->is(['patch', 'post', 'put'])) {
     
            $ParentsComment= $ParentsComments->newEntity();
            $ParentsComment->user_id=$_SESSION->id;
            $ParentsComment->parents_id=$this->request->data['parents_id'];
            $ParentsComment->doubt_answer=$this->request->data['doubt_answer'];           
            if ($Parents=$ParentsComments->save($ParentsComment)) {
                return $this->redirect(['action' => 'listview',$Parents->parents_id]);
            }
        }
        $this->set('parents_ans', $parents_ans);
        $this->set('ParentsCorners', $ParentsCorners);
        $this->set('_serialize', ['ParentsCorners','parents_ans']);
    }  
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$ParentsCorners = $this->ParentsCorners->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['parents_image'];
                $filePath = WWW_ROOT."img".DS."parentscorners".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['parents_image']=$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            
        	$this->request->data['student_id']=1;
            $ParentsCorners = $this->ParentsCorners->patchEntity($ParentsCorners, $this->request->data);
            if ($this->ParentsCorners->save($ParentsCorners)) {
                $this->Flash->success(__('Your Parents Corners has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Parents Corners.'));
        }
        $this->set(compact('ParentsCorners'));
        $this->set('_serialize', ['ParentsCorners']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $ParentsCorners = $this->ParentsCorners->get($id, [
            'contain' => []
        ]);
        $this->set('ParentsCorners', $ParentsCorners);
        $this->set('_serialize', ['ParentsCorners']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$ParentsCorners = $this->ParentsCorners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['parents_image'];
                $filePath = WWW_ROOT."img".DS."parentscorners".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['parents_image']=$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $ParentsCorners = $this->ParentsCorners->patchEntity($ParentsCorners, $this->request->data);
            if ($this->ParentsCorners->save($ParentsCorners)) {
                $this->Flash->success(__('The Parents Corners has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Parents Corners could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('ParentsCorners'));
        $this->set('_serialize', ['ParentsCorners']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $ParentsCorners = $this->ParentsCorners->get($id);
        if ($this->ParentsCorners->delete($ParentsCorners)) {
            $this->Flash->success(__('The Parents Cornerse has been deleted.'));
        } else {
            $this->Flash->error(__('The Parents Corners could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}