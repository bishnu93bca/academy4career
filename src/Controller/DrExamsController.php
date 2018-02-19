<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class DrExamsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$DrExams=$this->DrExams->find('all');
		$this->set('DrExams',$DrExams);


	} 
    public function drExamsList()
    {
        $DrExams=$this->DrExams->find('all',['order'=>array('drexam_id DESC')]);
        $this->set('DrExams',$DrExams);
    }
    public function readmore($id=null)
    {
        
         $DrExams = $this->DrExams->get($id, [
            'contain' => []
        ]);
        $this->set('DrExams', $DrExams);
        $this->set('_serialize', ['DrExams']);
    }

	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$DrExams = $this->DrExams->newEntity();
        if ($this->request->is('post')) {
        	
        	$value=$this->request->data['drexam_image'];
                $filePath = WWW_ROOT."img".DS."drexams".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexam_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }
                
            
           	$drexammaterial_for=$this->request->data['drexammaterial_for'];
                $filePath = WWW_ROOT."img".DS."drexams".DS."pdf".DS;
                $filename = end(explode('.',$drexammaterial_for['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexammaterial_for']=$imagename;
                    move_uploaded_file($drexammaterial_for['tmp_name'],$filePath.$imagename);
                    
                }
                
            
            $drexam_samplematerial=$this->request->data['drexam_samplematerial'];
                $filePath = WWW_ROOT."img".DS."drexams".DS."pdf".DS;
                $filename = end(explode('.',$drexam_samplematerial['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexam_samplematerial']=$imagename;
                    move_uploaded_file($drexam_samplematerial['tmp_name'],$filePath.$imagename); 
                }
                
            
            $drexam_material=$this->request->data['drexam_material'];
                $filePath = WWW_ROOT."img".DS."drexams".DS."pdf".DS;
                $filename = end(explode('.',$drexam_material['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexam_material']=$imagename;
                    move_uploaded_file($drexam_material['tmp_name'],$filePath.$imagename); 
                }
                
            

           
            $DrExams = $this->DrExams->patchEntity($DrExams, $this->request->data);
            if ($this->DrExams->save($DrExams)) {
                $this->Flash->success(__('Your Dr Exams has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Dr Exams.'));
        }
        $this->set(compact('DrExams'));
        $this->set('_serialize', ['DrExams']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $DrExams = $this->DrExams->get($id, [
            'contain' => []
        ]);
        $this->set('DrExams', $DrExams);
        $this->set('_serialize', ['DrExams']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$DrExams = $this->DrExams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['drexam_image'];
                $filePath = WWW_ROOT."img".DS."drexams".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                   $this->request->data['drexam_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }else{
                   $this->request->data['drexam_image']= $DrExams->drexam_image;
                }
                
            
           	$drexammaterial_for=$this->request->data['drexammaterial_for'];
                $filePath = WWW_ROOT."img".DS."drexams".DS."pdf".DS;
                $filename = end(explode('.',$drexammaterial_for['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexammaterial_for']=$imagename;
                    move_uploaded_file($drexammaterial_for['tmp_name'],$filePath.$imagename);
                    
                }else{
                   $this->request->data['drexammaterial_for']= $DrExams->drexammaterial_for;
                }
                
            
            $drexam_samplematerial=$this->request->data['drexam_samplematerial'];
                $filePath = WWW_ROOT."img".DS."drexams".DS."pdf".DS;
                $filename = end(explode('.',$drexam_samplematerial['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexam_samplematerial']=$imagename;
                    move_uploaded_file($drexam_samplematerial['tmp_name'],$filePath.$imagename); 
                }else{
                   $this->request->data['drexam_samplematerial']= $DrExams->drexam_samplematerial;
                }
                
            
            $drexam_material=$this->request->data['drexam_material'];
                $filePath = WWW_ROOT."img".DS."drexams".DS."pdf".DS;
                $filename = end(explode('.',$drexam_material['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['drexam_material']=$imagename;
                    move_uploaded_file($drexam_material['tmp_name'],$filePath.$imagename); 
                }else{
                   $this->request->data['drexam_material']= $DrExams->drexam_material;
                }
                
            $DrExams = $this->DrExams->patchEntity($DrExams, $this->request->data);
            if ($this->DrExams->save($DrExams)) {
                $this->Flash->success(__('The Dr Exams has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Dr Exams could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('DrExams'));
        $this->set('_serialize', ['DrExams']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $DrExams = $this->DrExams->get($id);
        if ($this->DrExams->delete($DrExams)) {
            $this->Flash->success(__('The Dr Exams has been deleted.'));
        } else {
            $this->Flash->error(__('The Dr Exams could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}