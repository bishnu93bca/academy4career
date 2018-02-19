<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CoursesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Courses=$this->Courses->find('all', [
            'contain' => ['Levels','Disciplines']
        ]);
		$this->set('Courses',$Courses);
	}
    public function CoursesList()
    {
        if(empty($this->request->data)){
            $Courses=$this->Courses->find('all', ['order'=>array('course_id DESC'),
            'contain' => ['Levels','Disciplines']]);
        }elseif(!empty($this->request->data['level_id'])&&!empty($this->request->data['discipline_id'])){
           $Courses=$this->Courses->find('all', ['order'=>array('course_id DESC'),
            'contain' => ['Levels','Disciplines']])->where(['Courses.level_id'=>$this->request->data['level_id']])->andwhere(['Courses.discipline_id'=>$this->request->data['discipline_id']]);
        }elseif(!empty($this->request->data['level_id'])){
            $Courses=$this->Courses->find('all', ['order'=>array('course_id DESC'),
            'contain' => ['Levels','Disciplines']])->where(['Courses.level_id'=>$this->request->data['level_id']]);
        }
        
        $Levels=$this->Courses->Levels->find('all')->select(['level_id','level_name']);
        
        $this->set('Levels',$Levels);
        $this->set('Courses',$Courses);
    }
    public function readmore($id=null)
    {
         $Courses = $this->Courses->get($id, [
            'contain' =>  ['Levels','Disciplines']
        ]);
        $this->set('Courses', $Courses);
        $this->set('_serialize', ['Courses']);

    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$ScholarShips=   TableRegistry::get('scholarship');
		$Courses = $this->Courses->newEntity();
        if ($this->request->is('post')) {
        	// $value=$this->request->data['course_image'];
         //        $filePath = WWW_ROOT."img".DS."courses".DS;
         //        $filename = end(explode('.',$value['name']));
         //        $imagename = 'Img_'.time().rand().'.'.$filename;
         //        if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
         //            $this->request->data['course_image'] =$imagename; 
         //        }
         //        move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            
            $Courses = $this->Courses->patchEntity($Courses, $this->request->data);
            if ($this->Courses->save($Courses)) {
                $this->Flash->success(__('Your Courses has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Courses.'));
        }
         $ScholarShips = $ScholarShips->find('all')->select(['scholarship_id','scholarship_name']);
         $Levels=$this->Courses->Levels->find('all')->select(['level_id','level_name']);
        
        $this->set('Levels',$Levels);
        $this->set('ScholarShips',$ScholarShips);
        $this->set(compact('Courses'));
        $this->set('_serialize', ['Courses']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Courses = $this->Courses->get($id, [
            'contain' => ['Levels','Disciplines']
        ]);
        $this->set('Courses', $Courses);
        $this->set('_serialize', ['Courses']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$ScholarShips=   TableRegistry::get('scholarship');
		$Courses = $this->Courses->get($id, [
            'contain' => ['Levels','Disciplines']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	// $value=$this->request->data['course_image'];
         //        $filePath = WWW_ROOT."img".DS."courses".DS;
         //        $filename = end(explode('.',$value['name']));
         //        $imagename = 'Img_'.time().rand().'.'.$filename;
         //        if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
         //            $this->request->data['course_image'] =$imagename; 
         //        }else{
         //            $this->request->data['course_image']=$Courses->course_image;
         //        }
         //        move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            
            $Courses = $this->Courses->patchEntity($Courses, $this->request->data);
            if ($this->Courses->save($Courses)) {
                $this->Flash->success(__('The Courses has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Courses could not be Update. Please, try again.'));
            }
        }
        $ScholarShips = $ScholarShips->find('all')->select(['scholarship_id','scholarship_name']);
        $Levels=$this->Courses->Levels->find('all')->select(['level_id','level_name']);
        
        $this->set('Levels',$Levels);
        $this->set('ScholarShips',$ScholarShips);
        $this->set(compact('Courses'));
        $this->set('_serialize', ['Courses']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Courses = $this->Courses->get($id);
        if ($this->Courses->delete($Courses)) {
            $this->Flash->success(__('The Courses has been deleted.'));
        } else {
            $this->Flash->error(__('The Courses could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}