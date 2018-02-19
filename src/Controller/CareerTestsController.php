<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
 
use App\Controller\AppController;

class CareerTestsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$careertests=$this->CareerTests->find('all', [
            'contain' => ['Courses','Disciplines']
        ]);
		$this->set('careertests',$careertests);
	} 
    public function careerTestList()
    {
        //if($_SESSION->members[1]->status=='success'){
            if(empty($this->request->data)){
               $careertests=$this->CareerTests->find('all', ['order'=>array('career_test_id DESC'),
                'contain' => ['Courses','Disciplines']
            ]);  
            }elseif(!empty($this->request->data['course_id'])){
                  $careertests=$this->CareerTests->find('all', ['order'=>array('career_test_id DESC'),
                    'contain' => ['Courses','Disciplines']])->where(['CareerTests.course_id'=>$this->request->data['course_id']]);  
            }

           
            $Courses=$this->CareerTests->Courses->find('all')->select(['course_id','course_name']);
            $this->set('Courses',$Courses);
            $this->set('careertests',$careertests);
        // }else{
        //     return $this->redirect(['controller'=>'members','action' => 'add']);    
        // }
        
    }
    public function readmore($id=null)
    {
         $careertests = $this->CareerTests->get($id, [
            'contain' => ['Courses','Disciplines']
        ]);
        $this->set('careertests', $careertests);
        $this->set('_serialize', ['careertests']);

    }
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$careertests = $this->CareerTests->newEntity();
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
        $Questions->title=$this->request->data['career_test_name'];
        $Questions->time=$this->request->data['time'].':00';
         if ($q_id=$QuestionTable->save($Questions)){
        }
        	$value=$this->request->data['career_test_image'];
                $filePath = WWW_ROOT."img".DS."careertests".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['career_test_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
        	$this->request->data['question_id']=$q_id->id;
            $careertests = $this->CareerTests->patchEntity($careertests, $this->request->data);
            if ($this->CareerTests->save($careertests)) {
                $this->Flash->success(__('Your Career Test has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Career Test.'));
        }
        $Courses = $this->CareerTests->Courses->find('all')->select(['course_id','course_name']);
        $Disciplines = $this->CareerTests->Disciplines->find('all')->select(['discipline_id','discipline_name']);
        $this->set('Disciplines',$Disciplines);
        $this->set('Courses',$Courses);
        $this->set(compact('careertests'));
        $this->set('_serialize', ['careertests']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $careertests = $this->CareerTests->get($id, [
            'contain' => ['Courses','Disciplines']
        ]);
        $this->set('careertests', $careertests);
        $this->set('_serialize', ['careertests']);

	}
    public function test($id=null)
    {
        $careertests = $this->CareerTests->get($id, [
            'contain' => ['Questions']
        ]);
        $this->set('careertests', $careertests);
        $this->set('_serialize', ['careertests']);

    }
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$careertests = $this->CareerTests->get($id, [
            'contain' => ['Courses','Disciplines']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

        	$value=$this->request->data['career_test_image'];
                $filePath = WWW_ROOT."img".DS."careertests".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['career_test_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $careertests = $this->CareerTests->patchEntity($careertests, $this->request->data);
            if ($this->CareerTests->save($careertests)) {
                $this->Flash->success(__('The Career Test has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Career Test could not be Update. Please, try again.'));
            }
        }
        $Courses = $this->CareerTests->Courses->find('all')->select(['course_id','course_name']);
        $Disciplines = $this->CareerTests->Disciplines->find('all')->select(['discipline_id','discipline_name']);
        $this->set('Disciplines',$Disciplines);
        $this->set('Courses',$Courses);
        $this->set(compact('careertests'));
        $this->set('_serialize', ['careertests']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $careertests = $this->CareerTests->get($id);
        if ($this->CareerTests->delete($careertests)) {
            $this->Flash->success(__('The Career Test has been deleted.'));
        } else {
            $this->Flash->error(__('The Career Test could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}