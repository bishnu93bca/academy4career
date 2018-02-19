<?php
  
namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class StudentsTestSeriesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$StudentsTestSeries=$this->StudentsTestSeries->find('all', [
            'contain' => ['Class','Subjects']
        ]);
		$this->set('StudentsTestSeries',$StudentsTestSeries);
	}
    public function studentsSestSeriesList()
    {
        if(empty($this->request->data)){
            $StudentsTestSeries=$this->StudentsTestSeries->find('all',['order'=>array('student_test_series_id DESC'),'contain' =>['Class']]);
        }elseif (!empty($this->request->data['class_id'])&&!empty($this->request->data['subject_id'])){
            $StudentsTestSeries=$this->StudentsTestSeries->find('all',['order'=>array('student_test_series_id DESC'),'contain' =>['Class']])->where(['StudentsTestSeries.class_id'=>$this->request->data['class_id']])->andwhere(['StudentsTestSeries.subject_id'=>$this->request->data['subject_id']]);
        }elseif (!empty($this->request->data['class_id'])) {
           $StudentsTestSeries=$this->StudentsTestSeries->find('all',['order'=>array('student_test_series_id DESC'),'contain' =>['Class']])->where(['StudentsTestSeries.class_id'=>$this->request->data['class_id']]); 
        }
        $Class=$this->StudentsTestSeries->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set('StudentsTestSeries',$StudentsTestSeries);
    }
    public function readmore($id=null)
    {
        $StudentsTestSeries = $this->StudentsTestSeries->get($id, [
            'contain' => ['Class','Subjects']
        ]);
        $this->set('StudentsTestSeries', $StudentsTestSeries);
        $this->set('_serialize', ['StudentsTestSeries']);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$StudentsTestSeries = $this->StudentsTestSeries->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['student_test_series_image'];
                $filePath = WWW_ROOT."img".DS."studentstestseries".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['student_test_series_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $this->request->data['student_id']=1;
            $this->request->data['parent_id']=1;
            $StudentsTestSeries = $this->StudentsTestSeries->patchEntity($StudentsTestSeries, $this->request->data);
            if ($this->StudentsTestSeries->save($StudentsTestSeries)) {
                $this->Flash->success(__('Your Student Test Series has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Student Test Series.'));
        }
        $Class=$this->StudentsTestSeries->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('StudentsTestSeries'));
        $this->set('_serialize', ['StudentsTestSeries']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $StudentsTestSeries = $this->StudentsTestSeries->get($id, [
            'contain' => ['Class','Subjects']
        ]);
        $this->set('StudentsTestSeries', $StudentsTestSeries);
        $this->set('_serialize', ['StudentsTestSeries']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$StudentsTestSeries = $this->StudentsTestSeries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['student_test_series_image'];
                $filePath = WWW_ROOT."img".DS."studentstestseries".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['student_test_series_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $StudentsTestSeries = $this->StudentsTestSeries->patchEntity($StudentsTestSeries, $this->request->data);
            if ($this->StudentsTestSeries->save($StudentsTestSeries)) {
                $this->Flash->success(__('The Student Test Series has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Student Test Series could not be Update. Please, try again.'));
            }
        }
        $Class=$this->StudentsTestSeries->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('StudentsTestSeries'));
        $this->set('_serialize', ['StudentsTestSeries']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $StudentsTestSeries = $this->StudentsTestSeries->get($id);
        if ($this->StudentsTestSeries->delete($StudentsTestSeries)) {
            $this->Flash->success(__('The Student Test Series has been deleted.'));
        } else {
            $this->Flash->error(__('The Student Test Series could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}