<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CareerQuestionsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$careerquestions=$this->CareerQuestions->find('all', [
            'contain' => ['CareerTestTypes'] 
        ]);
		$this->set('careerquestions',$careerquestions);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$careerquestions = $this->CareerQuestions->newEntity();
        if ($this->request->is('post')) {
            $careerquestions = $this->CareerQuestions->patchEntity($careerquestions, $this->request->data);
            if ($this->CareerQuestions->save($careerquestions)) {
                $this->Flash->success(__('Your Career Questions has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Career Questions.'));
        }
        $CareerTestTypes = $this->CareerQuestions->CareerTestTypes->find('all')->select(['career_test_type_id','career_test_type_name']);
        $this->set('CareerTestTypes',$CareerTestTypes);
        $this->set(compact('careerquestions'));
        $this->set('_serialize', ['careerquestions']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $careerquestions = $this->CareerQuestions->get($id, [
            'contain' =>['CareerTestTypes']
        ]);
        $this->set('careerquestions', $careerquestions);
        $this->set('_serialize', ['careerquestions']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$careerquestions = $this->CareerQuestions->get($id, [
            'contain' => ['CareerTestTypes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $careerquestions = $this->CareerQuestions->patchEntity($careerquestions, $this->request->data);
            if ($this->CareerQuestions->save($careerquestions)) {
                $this->Flash->success(__('The Career Questions has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Career Questions could not be Update. Please, try again.'));
            }
        }
        $CareerTestTypes = $this->CareerQuestions->CareerTestTypes->find('all')->select(['career_test_type_id','career_test_type_name']);
        $this->set('CareerTestTypes',$CareerTestTypes);
        $this->set(compact('careerquestions'));
        $this->set('_serialize', ['careerquestions']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $careerquestions = $this->CareerQuestions->get($id, [
            'contain' => ['CareerTestTypes']
        ]);
        if ($this->CareerQuestions->delete($careerquestions)) {
            $this->Flash->success(__('The Career Questions has been deleted.'));
        } else {
            $this->Flash->error(__('The Career Questions could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}