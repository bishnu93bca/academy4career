<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class PersonalityTestsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$PersonalityTests=$this->PersonalityTests->find('all');
		$this->set('PersonalityTests',$PersonalityTests);


	}
	public function personalityTestList()
	{
		
        $PersonalityTests=$this->PersonalityTests->find('all',['order'=>array('personality_test_id DESC')]);
        $this->set('PersonalityTests',$PersonalityTests);

	}
	public function readmore($id=null)
	{
		 
         $PersonalityTests = $this->PersonalityTests->get($id, [
            'contain' => []
        ]);
        $this->set('PersonalityTests', $PersonalityTests);
        $this->set('_serialize', ['PersonalityTests']);

	}
	public function add()
	{
		$this->viewBuilder()->layout('admin');
       
		$PersonalityTests = $this->PersonalityTests->newEntity();
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
            $Questions->title=$this->request->data['personality_test_name'];
            $Questions->time=$this->request->data['time'].':00';
             if ($q_id=$QuestionTable->save($Questions)){
            }
        	$value=$this->request->data['personality_test_image'];
                $filePath = WWW_ROOT."img".DS."personalitytests".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['personality_test_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }
              $this->request->data['question_id']=$q_id->id;
            $PersonalityTests = $this->PersonalityTests->patchEntity($PersonalityTests, $this->request->data);
            if ($this->PersonalityTests->save($PersonalityTests)) {
                $this->Flash->success(__('Your Personality Test has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Personality Test.'));
        }
        $this->set(compact('PersonalityTests'));
        $this->set('_serialize', ['PersonalityTests']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $PersonalityTests = $this->PersonalityTests->get($id, [
            'contain' => []
        ]);
        $this->set('PersonalityTests', $PersonalityTests);
        $this->set('_serialize', ['PersonalityTests']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$PersonalityTests = $this->PersonalityTests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['personality_test_image'];
                $filePath = WWW_ROOT."img".DS."personalitytests".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['personality_test_image'] =$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }
            $PersonalityTests = $this->PersonalityTests->patchEntity($PersonalityTests, $this->request->data);
            if ($this->PersonalityTests->save($PersonalityTests)) {
                $this->Flash->success(__('The Personality Test has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Personality Test could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('PersonalityTests'));
        $this->set('_serialize', ['PersonalityTests']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $PersonalityTests = $this->PersonalityTests->get($id);
        if ($this->PersonalityTests->delete($PersonalityTests)) {
            $this->Flash->success(__('The Personality Test has been deleted.'));
        } else {
            $this->Flash->error(__('The Personality Test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}