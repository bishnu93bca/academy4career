<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class StudentsTestSeriesResultsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$StudentsTestSeriesResults=$this->StudentsTestSeriesResults->find('all', [
            'contain' => ['Class','StudentsTestSeries','Subjects']
        ]);
		$this->set('StudentsTestSeriesResults',$StudentsTestSeriesResults);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$StudentsTestSeriesResults = $this->StudentsTestSeriesResults->newEntity();
        if ($this->request->is('post')) {
        	
            
            $this->request->data['student_id']=1;
            $StudentsTestSeriesResults = $this->StudentsTestSeriesResults->patchEntity($StudentsTestSeriesResults, $this->request->data);
            if ($this->StudentsTestSeriesResults->save($StudentsTestSeriesResults)) {
                $this->Flash->success(__('Your Student Test Series Result has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Student Test Series Result.'));
        }
        $Class=$this->StudentsTestSeriesResults->Class->find('all')->select(['class_id','class_name']);
        $StudentsTestSeries=$this->StudentsTestSeriesResults->StudentsTestSeries->find('all')->select(['student_test_series_id','student_test_series_name']);
        $this->set('Class',$Class);
        $this->set('StudentsTestSeries',$StudentsTestSeries);
        $this->set(compact('StudentsTestSeriesResults'));
        $this->set('_serialize', ['StudentsTestSeriesResults']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $StudentsTestSeriesResults = $this->StudentsTestSeriesResults->get($id, [
            'contain' => ['Class','StudentsTestSeries','Subjects']
        ]);
        $this->set('StudentsTestSeriesResults', $StudentsTestSeriesResults);
        $this->set('_serialize', ['StudentsTestSeriesResults']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$StudentsTestSeriesResults = $this->StudentsTestSeriesResults->get($id, [
            'contain' => ['Class','StudentsTestSeries','Subjects']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            
            $StudentsTestSeriesResults = $this->StudentsTestSeriesResults->patchEntity($StudentsTestSeriesResults, $this->request->data);
            if ($this->StudentsTestSeriesResults->save($StudentsTestSeriesResults)) {
                $this->Flash->success(__('The Student Test Series Result has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Student Test Series Result could not be Update. Please, try again.'));
            }
        }
         $Class=$this->StudentsTestSeriesResults->Class->find('all')->select(['class_id','class_name']);
        $StudentsTestSeries=$this->StudentsTestSeriesResults->StudentsTestSeries->find('all')->select(['student_test_series_id','student_test_series_name']);
        $this->set('Class',$Class);
        $this->set('StudentsTestSeries',$StudentsTestSeries);
        $this->set(compact('StudentsTestSeriesResults'));
        $this->set('_serialize', ['StudentsTestSeriesResults']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $StudentsTestSeriesResults = $this->StudentsTestSeriesResults->get($id, [
            'contain' => ['Class','StudentsTestSeries','Subjects']
        ]);
        if ($this->StudentsTestSeriesResults->delete($StudentsTestSeriesResults)) {
            $this->Flash->success(__('The Student Test Series Result has been deleted.'));
        } else {
            $this->Flash->error(__('The Student Test Series Result could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}