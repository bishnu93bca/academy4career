<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class TestsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Tests=$this->Tests->find('all');
		$this->set('Tests',$Tests);


	}
	public function TestList()
	{
		
		if(in_array($_SESSION->plan_id,[1,2,3])){
		$Tests=$this->Tests->find('all',['order'=>['id DESC']]);
		$this->set('Tests',$Tests);
		}else{
		return $this->redirect(['controller'=>'members','action' => 'add']);	
		}
	}
	public function readmore($id=null)
	{
		
		if(in_array($_SESSION->plan_id,[1,2,3])){
		$Tests=$this->Tests->find('all',['order'=>['id DESC']]);
		$this->set('Tests',$Tests);
		}else{
		return $this->redirect(['controller'=>'members','action' => 'add']);	
		}
	}
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		
			$Tests = $this->Tests->newEntity();
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
	        $Questions->title=$this->request->data['name'];
	        $Questions->time=$this->request->data['time'].':00';
	         if ($q_id=$QuestionTable->save($Questions)){
        	$this->request->data['question_id']=$q_id->id;
            $Tests = $this->Tests->patchEntity($Tests, $this->request->data);
            if ($Tests=$this->Tests->save($Tests)) {

                $this->Flash->success(__('Your Tests has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Tests.'));
        }


       
        $this->set(compact('Tests'));
        $this->set('_serialize', ['Tests']);

    }
	}
	public function view($id=null)
	{
		 $this->viewBuilder()->layout('ajax');
		if ($this->request->is(['patch', 'post', 'put'])) {
		pr($this->request->data);exit();
}

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Tests = $this->Tests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$this->request->data['time']= $this->request->data['time'].':00';
            $Tests = $this->Tests->patchEntity($Tests, $this->request->data);
            if ($Tests=$this->Tests->save($Tests)) {

                $this->Flash->success(__('Your Tests has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Tests.'));
        }


        //$this->set('Tests',$this->Tests->Tests->find('all')->select(['id','title']));
        $this->set(compact('Tests'));
        $this->set('_serialize', ['Tests']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$QuestionTable   =   TableRegistry::get('questions');
		$qu=$QuestionTable->find('all')->where(['test_id'=>$id]);
		foreach ($qu as $key => $value) {
			if ($QuestionTable->delete($QuestionTable->find('all')->where(['id'=>$value->id])->first())) {
			}
		}
		$Tests = $this->Tests->get($id);
        if ($this->Tests->delete($Tests)) {


            $this->Flash->success(__('The Tests has been deleted.'));

        } else {
            $this->Flash->error(__('The Tests could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);


	}
}