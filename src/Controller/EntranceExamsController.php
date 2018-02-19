<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class EntranceExamsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$EntranceExams=$this->EntranceExams->find('all');
		$this->set('EntranceExams',$EntranceExams);


	}
    public function entranceExamsList()
    {   
        if(empty($this->request->data)){
           $EntranceExams=$this->EntranceExams->find('all',['order'=>array('entrance_id DESC')]); 
       }elseif (!empty($this->request->data['entrance_name'])) {
           $EntranceExams=$this->EntranceExams->find('all',['order'=>array('entrance_id DESC')])->where(['entrance_name LIKE'=>'%'.trim($this->request->data['entrance_name']).'%']); 
       }
        
        $this->set('EntranceExams',$EntranceExams);
    } 
    public function readmore($id=null)
    {
         $EntranceExams = $this->EntranceExams->get($id, [
            'contain' => []
        ]);
        $this->set('EntranceExams', $EntranceExams);
        $this->set('_serialize', ['EntranceExams']);

    }

	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$EntranceExams = $this->EntranceExams->newEntity();
        if ($this->request->is('post')) {
        	
        	$value=$this->request->data['entrance_image'];
                $filePath = WWW_ROOT."img".DS."entranceexams".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['entrance_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }
                
            
           	$entrance_material=$this->request->data['entrance_material'];
                $filePath = WWW_ROOT."img".DS."entranceexams".DS."pdf".DS;
                $filename = end(explode('.',$entrance_material['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['entrance_material']=$imagename;
                    move_uploaded_file($entrance_material['tmp_name'],$filePath.$imagename);
                    
                }
                
           
            $EntranceExams = $this->EntranceExams->patchEntity($EntranceExams, $this->request->data);
            if ($this->EntranceExams->save($EntranceExams)) {
                $this->Flash->success(__('Your Entrance Exams has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Entrance Exams.'));
        }
        $this->set(compact('EntranceExams'));
        $this->set('_serialize', ['EntranceExams']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $EntranceExams = $this->EntranceExams->get($id, [
            'contain' => []
        ]);
        $this->set('EntranceExams', $EntranceExams);
        $this->set('_serialize', ['EntranceExams']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$EntranceExams = $this->EntranceExams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['entrance_image'];
                $filePath = WWW_ROOT."img".DS."entranceexams".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['entrance_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }else{
                   $this->request->data['entrance_image']= $EntranceExams->entrance_image;
                }
                
            
           	$entrance_material=$this->request->data['entrance_material'];
                $filePath = WWW_ROOT."img".DS."entranceexams".DS."pdf".DS;
                $filename = end(explode('.',$entrance_material['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['entrance_material']=$imagename;
                    move_uploaded_file($entrance_material['tmp_name'],$filePath.$imagename);
                    
                }else{
                   $this->request->data['entrance_image']= $EntranceExams->entrance_material;
                }
            
            $EntranceExams = $this->EntranceExams->patchEntity($EntranceExams, $this->request->data);
            if ($this->EntranceExams->save($EntranceExams)) {
                $this->Flash->success(__('The Entrance Exams has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Entrance Exams could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('EntranceExams'));
        $this->set('_serialize', ['EntranceExams']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $EntranceExams = $this->EntranceExams->get($id);
        if ($this->EntranceExams->delete($EntranceExams)) {
            $this->Flash->success(__('The Entrance Exams has been deleted.'));
        } else {
            $this->Flash->error(__('The Entrance Exams could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}