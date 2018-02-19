<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CareerTestResultsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$CareerTestResults=$this->CareerTestResults->find('all',[
            'contain' => ['CareerTests','CareerTestTypes']
        ]);
		$this->set('CareerTestResults',$CareerTestResults);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$CareerTestResults = $this->CareerTestResults->newEntity();
        if ($this->request->is('post')) {
        	
            
            $CareerTestResults = $this->CareerTestResults->patchEntity($CareerTestResults, $this->request->data);
            if ($this->CareerTestResults->save($CareerTestResults)) {
                $this->Flash->success(__('Your Career Test Results has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Career Test Results.'));
        }
        $CareerTest=$this->CareerTestResults->CareerTests->find('all')->select(['career_test_id','career_test_name']);
        $CareerTestTypes=$this->CareerTestResults->CareerTestTypes->find('all')->select(['career_test_type_id','career_test_type_name']);
        $this->set('CareerTestTypes',$CareerTestTypes);
        $this->set('CareerTest',$CareerTest);
        $this->set(compact('CareerTestResults'));
        $this->set('_serialize', ['CareerTestResults']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $CareerTestResults = $this->CareerTestResults->get($id, [
            'contain' => ['CareerTests','CareerTestTypes']
        ]);
        $this->set('CareerTestResults', $CareerTestResults);
        $this->set('_serialize', ['CareerTestResults']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$CareerTestResults = $this->CareerTestResults->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
            
            $CareerTestResults = $this->CareerTestResults->patchEntity($CareerTestResults, $this->request->data);
            if ($this->CareerTestResults->save($CareerTestResults)) {
                $this->Flash->success(__('The Career Test Results has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Career Test Results could not be Update. Please, try again.'));
            }
        }
        $CareerTest=$this->CareerTestResults->CareerTests->find('all')->select(['career_test_id','career_test_name']);
        $CareerTestTypes=$this->CareerTestResults->CareerTestTypes->find('all')->select(['career_test_type_id','career_test_type_name']);
        $this->set('CareerTestTypes',$CareerTestTypes);
        $this->set('CareerTest',$CareerTest);
        $this->set(compact('CareerTestResults'));
        $this->set('_serialize', ['CareerTestResults']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $CareerTestResults = $this->CareerTestResults->get($id);
        if ($this->CareerTestResults->delete($CareerTestResults)) {
            $this->Flash->success(__('The Career Test Results has been deleted.'));
        } else {
            $this->Flash->error(__('The Career Test Results could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}