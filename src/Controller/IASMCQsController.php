<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class IASMCQsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$IASMCQs=$this->IASMCQs->find('all');
		$this->set('IASMCQs',$IASMCQs);


	}
	public function iASMCQList()
	{
		$IASMCQs=$this->IASMCQs->find('all',['order'=>array('ias_subject_id DESC')]);
		$this->set('IASMCQs',$IASMCQs);


	}

	public function readmore($id=null)
	{

		$IASMCQs = $this->IASMCQs->get($id, [
            'contain' => []
        ]);
        $this->set('IASMCQs', $IASMCQs);
        $this->set('_serialize', ['IASMCQs']);

	}
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$IASMCQs = $this->IASMCQs->newEntity();
        if ($this->request->is('post')) {
        	$file = $this->request->data['upload_file'];
        $file=$file['tmp_name'];
        $handle=fopen($file,'r');
        while ($data=fgetcsv($handle)) {
            
            $array[]=array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);
        }
        fclose($handle);
        $QuestionTable   =   TableRegistry::get('questions');
        $Questions=$QuestionTable->newEntity();
        $Questions->name=json_encode($array);
        $Questions->title=$this->request->data['ias_subject'];
        $Questions->time=$this->request->data['time'].':00';
         if ($q_id=$QuestionTable->save($Questions)){
         }
        	$value=$this->request->data['subject_image'];
                $filePath = WWW_ROOT."img".DS."iasmcqs".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['subject_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }
               $this->request->data['question_id']= $q_id->id;
            $IASMCQs = $this->IASMCQs->patchEntity($IASMCQs, $this->request->data);
            if ($this->IASMCQs->save($IASMCQs)) {
                $this->Flash->success(__('Your IAS MCQs  has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your IAS MCQs.'));
        }
        $this->set(compact('IASMCQs'));
        $this->set('_serialize', ['IASMCQs']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $IASMCQs = $this->IASMCQs->get($id, [
            'contain' => []
        ]);
        $this->set('IASMCQs', $IASMCQs);
        $this->set('_serialize', ['IASMCQs']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$IASMCQs = $this->IASMCQs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	// $value=$this->request->data['subject_image'];
         //        $filePath = WWW_ROOT."img".DS."iasmcqs".DS;
         //        $filename = end(explode('.',$value['name']));
         //        $imagename = 'Img_'.time().rand().'.'.$filename;
         //        if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
         //            $this->request->data['subject_image'] =$imagename;
         //            move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
         //        }else{
         //            $this->request->data['subject_image']=$IASMCQs->subject_image;
         //        }
            $IASMCQs = $this->IASMCQs->patchEntity($IASMCQs, $this->request->data);
            if ($this->IASMCQs->save($IASMCQs)) {
                $this->Flash->success(__('The IAS MCQs has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The IAS MCQs could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('IASMCQs'));
        $this->set('_serialize', ['IASMCQs']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $IASMCQs = $this->IASMCQs->get($id);
        if ($this->IASMCQs->delete($IASMCQs)) {
            $this->Flash->success(__('The IAS MCQs has been deleted.'));
        } else {
            $this->Flash->error(__('The IAS MCQs could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}